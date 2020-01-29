<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Welcome, $login_cookie <br>";
      echo"You <font color='red'>CAN</font> access this information";
    }else{
      echo"Welcome, guest <br>";
      echo"You <font color='red'>CANNOT</font> access this information";
      echo"<br>Please, <a href='login.html'>sign in</a> to read this content";
    }
?>
