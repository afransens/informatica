<?php
//Setup connection
$host = "localhost";
$user = "informatica";
$password = "informatica";
$database = "informatica";

$db = new mysqli($host, $user, $password, $database);

$order = $_GET["order"];
$scending = $_GET["scending"];
$category = $_GET["category"];
$search = $_GET["search"];

if ($scending == null ){
	$scending = "ASC";
}

if ($order == null ){
	$order = "Titel";
}
if ($category == null ){
	$category = "Titel";
}
?>