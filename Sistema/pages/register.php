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
        $checkEmailStmt = $conn->prepare("SELECT email FROM userdata WHERE email = ?");
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute(); 
        $checkEmailStmt->store_result();
        if ($checkEmailStmt->num_rows() > 0){
            $message = "Email ID  already existes"
        }
    }
?> 