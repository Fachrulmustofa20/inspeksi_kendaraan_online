<?php

/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'inspeksi_online';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
