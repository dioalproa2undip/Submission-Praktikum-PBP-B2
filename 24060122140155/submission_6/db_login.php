<?php
$db_host = 'localhost';
$db_database = 'responsi_mobil';
$db_username = 'root';
$db_password = 'fefefwd2qe3r134rr3r3r3@#$%';

//  Connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno) {
    die('Could not connect to the database: <br/>' . $db->connect_error);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
