<?php

session_start();
?>
<?php $username=$_SESSION['username']; ?>
<?php
if(empty($username)){
  header("Location: index.php");
}
?>
<?php
$_SESSION['username']=null;

header("Location: ../index.php");

?>