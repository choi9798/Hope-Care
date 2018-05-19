<?php
function con(){
$user="wdc";
$pass="wdc";
$conn="mysql:host=mysql.pooito.edu.mo;dbname=wdc";
$dbh=new PDO($conn,$user,$pass);
return $dbh;
}
?>
