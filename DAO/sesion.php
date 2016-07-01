<?php
  session_start();

  function logonSuccess($user){
    $_SESSION['logged']= true;
    $_SESSION['user']=$user;
  }

  function logout(){
    $_SESSION= array();
  }

  function islogged(){
    return (isset($_SESSION['logged']) && $_SESSION['logged']==true);
  }

?>
