<?php 
$email = $_POST['email'];
$enter = $_POST['enter'];
$password = md5($_POST['password']);
$connect = mysqli_connect('server','email','password');
$db = mysqli::select_db('database');
  if (isset($enter)) {
           
    $verify = mysqli::query("SELECT * FROM users WHERE email = 
    '$email' AND password = '$password'") or die("selection error");
      if (mysqli_num_rows($verify)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Email or password input wrong');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("Location:index.php");
      }
  }
?>
