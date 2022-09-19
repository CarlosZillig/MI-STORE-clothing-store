<?php
// Sair da conta
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: login.php');
