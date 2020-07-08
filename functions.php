<?php 


function PregLetters($valueL) {

    if (preg_match("/^[a-zA-Z ]*$/", $valueL)) {
        $valueL = true;
    } else{
        $valueL = false;
    }
    return $valueL;
}

function PregNumbers($valueN) {

    if (preg_match('/[0-9]{10}/i', $valueN)) {
        $valueN = true;
    } else {
        $valueN = false;
    }
    return $valueN;
}

// Function to test input from use for backslashes, ...
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function request_is_post() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function request_is_get() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

function find_all_contacts() {
    global $conn;
    
    $pdo = $conn->prepare("SELECT * FROM Contacts");
    $pdo->execute();
    $contacts = $pdo->fetchAll(PDO::FETCH_ASSOC);
    return $contacts;
    }

    function findAllContactsByID() {
        global $conn;
        global $id;
      
        $pdo = $conn->prepare("SELECT * FROM Contacts WHERE id=?");
        $pdo->execute([$id]);
        $contacts = $pdo->fetch();
        return $contacts;
      }








?>