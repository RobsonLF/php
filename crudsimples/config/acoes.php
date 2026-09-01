<?php
    session_start();
    require 'conexao.php';
    global $conexao;
    if (isset($_POST['criar_usuario'])){
        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash($_POST['senha'], PASSWORD_DEFAULT)) : null;

        $sql = "INSERT INTO userdata (username, email, userpassword) VALUES ('$nome', '$email', '$senha')";

        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = "Usuário criado com sucesso!";
            header('Location: ../index.php');
            exit();
        } else {
            $_SESSION['mensagem'] = "Erro ao criar usuário.";
            header('Location: ../index.php');
            exit;
        }

    }
?>