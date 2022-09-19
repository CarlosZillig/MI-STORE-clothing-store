<?php
include_once 'connect.php';
//Função de sessoes
session_start();
// Botão de Cadastro
if (isset($_POST['btn'])) {
    //  print_r($_POST['nome']);
    //  print_r($_POST['sobrenome']);
    //  print_r($_POST['tel']);
    //  print_r($_POST['email']);
    //  print_r($_POST['senha']);
    //  print_r($_POST['cpf']);

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['tel'];

    //Função que adiciona no banco as informação da tela de cadastro!
    $consult = mysqli_query($connect, "INSERT INTO clientes(nome, sobrenome, cpf, email, senha, telefone)
     VALUES ('$nome', '$sobrenome','$cpf','$email','$senha', '$telefone')");
}


//Verificação de Login

// if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
//     // Acessa

//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     // print_r('Email:' . $email);
//     // print_r('<br>');
//     // print_r('Senha:' . $senha);

//     $sql = "SELECT * FROM clientes WHERE email= '$email' and senha = '$senha'";
//     $result = $connect->query($sql);

//     // print_r($sql);
//     // print_r($result);

//     if (mysqli_num_rows($result) < 1) {
//         //Não existir usuario ele retorna para a tela de login
//         echo "<script>alert('Erro ao fazer o login')</script>";
//         unset($_SESSION['email']);
//         unset($_SESSION['senha']);
//         // header('Location: login.php');

//     } else {
//         //Caso existir o usuario ele redireciona para tela inicial
//         $_SESSION['email'] = $email;
//         $_SESSION['senha'] = $senha;
//         header('Location: acesso.php');
//     }

// }

