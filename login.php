<?php session_start();?>
<?php if(isset($_SESSION["username"])){
     header("Location: adminIndex.php"); 
     }else{ ?>
<?php include 'include/header.php'; ?>

<?php include 'include/jumbotron.php'; ?>

<?php include 'include/navbar.php'; ?>
<hr>
<?php if(isset($_GET["err"])){
    $err=$_GET["err"];
    if($err==1){
        $errorMsg="Incorrect Password";
    }else{
        $errorMsg="Incorrect Username";
    }
}else{
    $errorMsg="";
} ?>

<form method="POST" action="include/login.php">
<div class="col-md-4 text-center offset-4">
    <h3>Admin Login</h3>
    <div class="errorMsg"><?php echo $errorMsg; ?></div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="userName" placeholder="User Name">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
    </div>
</div>
</form>
<br><br><br><br><br><br>
<?php include 'include/footer.php' ?>
<?php } ?>
