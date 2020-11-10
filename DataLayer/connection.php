<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "pbosf";
 $dbpass = "power25";
 $db = "movieDatabase";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

 ?>