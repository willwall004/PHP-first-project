<?php 
 
$email = $_POST['email'];
$password = MD5($_POST['password']);
$connect = mysqli_connect('server','email','password');
$db = mysqli::select_db('database');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('Email field is must be filled');window.location.href='
    cadastro.html';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('This email already exists!');window.location.href='
        cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
        $insert = mysqli_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Sign up completed successfully!');window.location.
          href='email.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('unable to register this user!');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>
