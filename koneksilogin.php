<?php
error_reporting(0)
$config = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' =. '',
	'database' => 'db_sekolah'
);

try {
	$sql = new PDO(
		"mysql:host=[$config['host']]; dbname=[$config['database']]",
		$config['username'],
		$config['password']
	);
} catch(PDOException $ex) {
	die('tida konek');
}

$rows = [];

?>