<?php 

// Information for connecting to DB
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = 'password';
$db_name = 'phonebook';

// Connect to the DB
try {
    $db_conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once('class.crud.php');

$crud = new crud($db_conn);

?>