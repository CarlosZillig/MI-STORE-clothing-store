<?php
// Botão de Cadastro
if (isset($_POST['btn'])) {
    //  print_r($_POST['nome']);
    //  print_r($_POST['sobrenome']);
    //  print_r($_POST['tel']);
    //  print_r($_POST['email']);
    //  print_r($_POST['senha']);
    //  print_r($_POST['cpf']);

    include_once 'connect.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['tel'];

    //Função que adiciona no banco as informação da tela de cadastro!
    $result = mysqli_query($connect, "INSERT INTO clientes(nome, sobrenome, cpf, email, senha, telefone)
     VALUES ('$nome', '$sobrenome','$cpf','$email','$senha', '$telefone')");
}

//Função de sessoes
// session_start();

//Verificação de Login
// if (isset($_POST['login'])) {
//     $erros = array();
//     $login = mysqli_escape_string($connect, $_POST['email']);
//     $senha = mysqli_escape_string($connect, $_POST['senha']);

//     if (empty($login) or empty($senha)) {
//         $erros[] = "<script> alert('Campo Login/senha precisa ser preenchido')</script>";
//     } else {
//         $sql = "SELECT email FROM clientes WHERE login = '$login'";
//     }
// }
