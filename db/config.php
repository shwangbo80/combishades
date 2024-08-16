<?php
// Development Settings
$db_username = 'root';
$db_password = '';
$conn = new PDO('mysql:host=localhost;dbname=abba1441_dealers', $db_username, $db_password);
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}
;

// Production Settings
// $db_username = 'abba1441_soo';
// $db_password = 't5V6pToc9KegXV';
// $conn = new PDO('mysql:host=localhost;dbname=abba1441_dealers', $db_username, $db_password);
// if (!$conn) {
//     die("Fatal Error: Connection Failed!");
// };