<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ukfe";

$conn = mySQLi_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mySQLi_connect_error());
	
}