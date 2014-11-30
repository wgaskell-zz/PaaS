<?php
		class Register extends CI_Controller {
			public function index()
			{
				//Validation
				$rules = array( 
						"username" => array(
								"field" => "username",
								"label" => "Username",
								"rules" => "required|max_length[20]|min_length[5]|callback_username_is_taken"
							),
						"password" => array(
								"field" => "password",
								"label" => "Password",
								"rules" => "required|max_length[20]|min_length[6]"
							),
						"pass_conf" => array(
								"field" => "pass_conf",
								"label" => "Repeat Password",
								"rules" => "required|matches[password]"
							),
						"email" => array(
								"field" => "email",
								"label" => "E-Mail Address",
								"rules" => "required|valid_email|callback_email_is_taken"
							)
					);
				//Set the rules
				$this->form_validation->set_rules($rules);
				//Override Message : $this->form_validation->set_message('required', 'The %s field is empty!');
				//Checks to see if the form was submitted.
				if( $this->form_validation->run() != true ) {
	
				} else {
					
					$form = array();
					$form['username'] = $this->input->post("username");
					$form['password'] = md5($this->input->post("password"));
					$form['email']	  = $this->input->post("email");
					#Create user here.
					if( self::createUser( $form['username'], $form['password'], $form['email'] ) == true) {
						//Created User Successfully
						$data['username'] = $form['username'];
						
					} else {
						echo "Sorry, Couldn't Proccess Your Form!";
					}
				}
			}


			public function username_is_taken( $input ) {

				$query = "SELECT * FROM `users` WHERE `username` = ?";
				$arg   = array( $input );
				$exec  = $this->db->query($query, $arg) or die(mysql_error());

				if( $exec->num_rows() > 0 ) 
				{
					$this->form_validation->set_message('username_is_taken', 'Sorry the username <b> '.$input.' </b> is taken!');
					return FALSE;
				} else {
					return TRUE;
				}

			}

			public function email_is_taken( $input ) {

				$query = "SELECT * FROM `users` WHERE `email` = ?";
				$arg   = array( $input );
				$exec  = $this->db->query($query, $arg) or die(mysql_error());

				if( $exec->num_rows() > 0 ) 
				{
					$this->form_validation->set_message('email_is_taken', 'Sorry the email <b> '.$input.' </b> is taken! <a href="forgot_password"> Forgot Password? </a>');
					return FALSE;
				} else {
					return TRUE;
				}
			}


			 public function createUser( $user, $pass, $email )
			 {
			 	$query = "
			 		INSERT INTO `users` 
			 		(`username`,`password`,`email`,`date`,`ip`)
			 		VALUES (?,?,?,?,?)
			 	";

				$arg   = array( self::protect($user), self::protect($pass), $email, date("F j,Y"), $_SERVER['REMOTE_ADDR'] );
				
				if( $this->db->query($query, $arg) == true ) 
				{
					return TRUE; //Was Added To Databse `users` Succesfully.
				} else {
					return FALSE; //Problem with database or something.
				}
			 }
			public function protect( $str ) {
				return mysql_real_escape_string($str);
			}
		}
?>
