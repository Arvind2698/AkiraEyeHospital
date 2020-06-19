<?php session_start() ?>

<?php $username=$_SESSION['username']; ?>
<?php
if(empty($username)){
  header("Location: index.php");
}
?>

<?php include 'include/header.php'; ?>

<?php include 'include/jumbotron.php'; ?>

<?php include 'include/adminNavBar.php'; ?>

<?php include 'include/function.php'; ?>
<br>
<?php
if(isset($_POST['submit'])){
    $userName=cleanInput($_POST['userName']);
    $password=cleanInput($_POST['password']);
    $location=$_POST['location'];

    $userName=mysqli_real_escape_string($connection,$userName);
    $password=mysqli_real_escape_string($connection,$password);

    if(empty($userName)){
        $errorMsg="Please enter username";
    }else if(empty($password)){
        $errorMsg="Please enter password";
    }else if(empty($location)){
        $errorMsg="Please enter location";
    }else{
        $query="insert into admin(userName,password,location) values('".$userName."','".$password."','".$location."');";
        $result=mysqli_query($connection,$query);
        $errorMsg="Success!!";
        $userName="";
    }
}else{
    $userName=$errorMsg="";
}
?>
<?php
if(isset($_GET['del'])){
    $delId=$_GET['del'];
    $queryDel="delete from admin where id=$delId ;";
    $resultDel=mysqli_query($connection,$queryDel);
    header("Location: addAdmin.php");
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="" method="POST">
            <div class="col-md-12">
            <h3>Add Admin</h3>
            <div class="errorMsg"><?php echo $errorMsg; ?></div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $userName; ?>" name="userName" placeholder="User Name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <select name="location"  id="" class="form-control">
                        <option value="">Select Branch</option>
                        <option value="Rajahmundry">Rajahmundry</option>
                        <option value="Vijaywada">Vijaywada</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
                </div>
            </div>
        </form>
        </div>
<?php

$queryAdmin="select * from admin;";
$resultAdmin=mysqli_query($connection,$queryAdmin);
?>

        <div class="col-md-6 pr-md-5 py-md-5">
            <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Options</th>
            </tr>
                <?php while($resAdmin=mysqli_fetch_assoc($resultAdmin)){
                        echo "<tr>";
                        echo "<td>".$resAdmin['userName']."</td>";
                        echo "<td>".$resAdmin['location']."</td>";
                        echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this admin?'); \" href='addAdmin.php?del=".$resAdmin['id']."'>Delete</td></a>";
                        echo "</tr>";
                }
                ?>
            </table>
        </div>


    </div>
</div>