<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();

$_SESSION['usuario']=$usuario;

include('db.php');

