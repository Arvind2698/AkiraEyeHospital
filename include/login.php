<?php include 'function.php'; ?>
<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){
    $username=cleanInput($_POST['userName']);
    $password=cleanInput($_POST['password']);

    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);

    $queryUsername=" select userName from admin;" ;
    $resultUsername=mysqli_query($connection,$queryUsername);

    while($res1=mysqli_fetch_assoc($resultUsername)){
        if($res1['userName']==$username){
            $queryPassword=" select password from admin where userName='".$res1['userName']."';" ;
            $resultPassword=mysqli_query($connection,$queryPassword);
            while($res2=mysqli_fetch_assoc($resultPassword)){
                $password=crypt($password,$res2['password']);
                if($res2['password']==$password){
                    $_SESSION["username"]=$username;
                    header("Location: ../adminIndex.php");
                }else{
                    header("Location: ../login.php?err=1");
                }
            }
        }else{
            header("Location: ../login.php?err=2");
        }
    }
}else{
    $errorMsg="";
}
