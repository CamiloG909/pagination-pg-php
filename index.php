<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$DB_HOST = $_ENV['DB_HOST'];
$DB_USER = $_ENV['DB_USER'];
$DB_PASS = $_ENV['DB_PASS'];
$DB_NAME = $_ENV['DB_NAME'];
$DB_SCHEMA = $_ENV['DB_SCHEMA'];
$DB_PORT = $_ENV['DB_PORT'];

try {
	$connection = new PDO("pgsql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME",$DB_USER,$DB_PASS);
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
	die();
}

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$postPerPage = 4;

$index = ($page > 1) ? ($page * $postPerPage - $postPerPage) : 0;

$articles = $connection -> prepare("SELECT *, count(*) OVER() AS total_count FROM $DB_SCHEMA.articles OFFSET $index LIMIT $postPerPage");
$articles -> execute();

$articles = $articles -> fetchAll();

require './index.view.php'


?>
