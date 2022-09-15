<?php
    $servane = 'localhost';
    $username = 'root';
    $password = '123';
    $db_name = 'banco';

    $connect  = mysqli_connect($servane, $username, $password, $db_name);

    if (mysqli_connect_error()){
        echo "Erro na conexão!" . mysqli_connect_error();
    }
?>