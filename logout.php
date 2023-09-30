<?php 
session_start();
if(isset($_SESSION['adm_number'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");
?>