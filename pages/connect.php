<?php
    $servane = 'localhost';
    $username = 'root';
    $password = '123';
    $db_name = 'banco';

    $connect  = new mysqli($servane, $username, $password, $db_name);

    // if($connect->connect_error){
    //     echo "Erro";
    // }else{
    //     echo"Conexão Com Sucesso";
    // }
?>