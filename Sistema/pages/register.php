<?php
    include '../database/db_connect.php';
    $message="";
    $toastClass="";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        //check email already exists
        
    }
?> 