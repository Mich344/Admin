<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass */
 <?php
   	include_once "Basedata.php";
   	// Llamar la base de datos desde el include_once.
   	$con = mysqli_connect($host, $user, $pasword, $db);
	$res = mysqli_query($con, $query);
 ?>

$sql_details = array(
	"type" => "Mysql",     // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => "$user",          // Database user name
	"pass" => "$pasword",          // Database password
	"host" => "$host", // Database host
	"port" => "",          // Database connection port (can be left empty for default)
	"db"   => "$db",          // Database name
	"dsn"  => "",          // PHP DSN extra information. Set as `charset=utf8mb4` if you are using MySQL
	"pdoAttr" => array()   // PHP PDO attributes array. See the PHP documentation for all options
);


// This is included for the development and deploy environment used on the DataTables
// server. You can delete this block - it just includes my own user/pass without making 
// them public!
if ( is_file($_SERVER['DOCUMENT_ROOT']."/datatables/pdo.php") ) {
	include( $_SERVER['DOCUMENT_ROOT']."/datatables/pdo.php" );
}
// /End development include

