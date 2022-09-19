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
    $consult = mysqli_query($connect, "INSERT INTO clientes(nome, sobrenome, cpf, email, senha, telefone)
     VALUES ('$nome', '$sobrenome','$cpf','$email','$senha', '$telefone')");
}

//Função de sessoes
// session_start();

