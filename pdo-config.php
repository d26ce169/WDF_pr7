<?php
$servername='localhost';
$username='root';
$password='';
$dbname='degree';
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"<h1>Connected succesfully</h1>";
}catch(PDOException $e){
    echo"connection failed : ".$e->getMessage();
}
?>