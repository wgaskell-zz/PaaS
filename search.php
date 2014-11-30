<?php
// Credentials
$dbhost = "localhost";
$dbname = "db1020198";
$dbuser = "1020198";
$dbpass = "wayne2013";

//	Connection
global $wg_db;

$wg_db = new mysqli();
$wg_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$wg_db->set_charset("utf8");

//	Check Connection
if ($wg_db->connect_errno) {
    printf("Connect failed: %s\n", $wg_db->connect_error);
    exit();
}

/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank">';
$html .= '<h3><font color="#3399FF">resortString</h3>';
$html .= '<h4><font color="#996633">nameString</h3> ';
$html .= '<h4><font color="#666699">levelString</h4>';
$html .= '<h4><font color="#6600FF">lengthString</h4>';

//$html .= '</a>';
//$html .= '</li>';

// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = $wg_db->real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM piste WHERE resort LIKE "%'.$search_string.'%" OR name LIKE "%'.$search_string.'%"OR level LIKE "%'.$search_string.'%"OR length LIKE "%'.$search_string.'%"';

	// Do Search
	$result = $wg_db->query($query);
	while($results = $result->fetch_array()) {
		$result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
                        $display_resort = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['resort']);
                        $display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);
                        $display_level = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['level']);
                        $display_length = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['length']);

                        // Insert Name
                        $output = str_replace('nameString', $display_name, $html);

                        // Insert Resort
                        $output = str_replace('resortString', $display_resort, $output);

                        // Insert Level
                        $output = str_replace('levelString', $display_level, $output);

                        // Insert Length
                        $output = str_replace('lengthString', $display_length, $output);

                        // Output
                        echo($output);
                }
        }else{

                // Format No Results Output
                $output = str_replace('urlString', 'javascript:void(0);', $html);
                $output = str_replace('nameString', '<b>No Results Found :-(</b>', $output);
                $output = str_replace('resortString', '', $output);
                $output = str_replace('levelString', '', $output);
                $output = str_replace('lengthString', '', $output);

                // Output
                echo($output);
        }
}
?>
