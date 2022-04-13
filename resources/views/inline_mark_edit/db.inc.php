<?php
try{
$db = new PDO('mysql:host=localhost;dbname=school_management;charse=utf8','root',''); 
}
catch(PDOException $e){
    die($e->getMessage());
}
?>