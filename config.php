<?php 

define('DB_SERVER', 'mysql-elvin10.alwaysdata.net');
define('DB_USERNAME', 'elvin10');
define('DB_PASSWORD', 'elvin123');
define('DB_NAME', 'elvin10_newsletter');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>