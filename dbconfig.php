<?php 

// Information for connecting to DB
$db_host = '127.0.0.1';
$db_user = 'your_username';
$db_pass = 'your_password';
$db_name = 'your_db_name';

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