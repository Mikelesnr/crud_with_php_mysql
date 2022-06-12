<?php

$server = 'localhost';
$user = 'mikelesnr';
$pass = 'Michael2331#';
$db = 'records';

$mysqli = new mysqli($server, $user, $pass, $db);

mysqli_report(MYSQLI_REPORT_ERROR);

?>