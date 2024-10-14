<?php
$servername = "localhost";
$username = "egeyxvwj_tugaspil";
$password = "mbnU@8XsBD9ajL2";
$db		  = "egeyxvwj_bukutamu";	
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>