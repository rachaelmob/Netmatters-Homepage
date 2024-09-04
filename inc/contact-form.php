<?php

// Only let user eneter database through form submission (prevent injection)
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['user-name'];
    $company =  $_POST['company'];
    $email =  $_POST['user-email'];
    $telephone = $_POST['user-tel'];
    $message = $_POST['user-message'];
    $marketing = $_POST['marketing-pref'];

    try {
        require_once "dbconfig.php";

        $query = "INSERT INTO `contact-form` (`name`, company, email, telephone, `message`,	marketing)
        VALUES (?, ?, ?, ?, ?, ?);";

        $statement = $dpdo->prepare($query);
        $statement->execute([$name, $company, $email, $telephone, $message, $marketing]);

        $dpdo = null;
        $statement = null;

        header("Location: ../index.php");

        die();
    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else { // Send them to home page if form not submited
    header("Location: ../index.php");
}



