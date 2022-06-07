<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.05.2022
 * Time: 11:27
 */
//print_r($_POST);

include "connect.php";

if(!empty($_POST)){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $check = $_POST['check'];

$sth = $pdo->prepare("INSERT INTO `dtab` SET `email` = :email, `pass` = :pass,`pod` = :pod");
$sth->execute(array('email' => $email, 'pass' => $pass, 'pod' => $check));

}