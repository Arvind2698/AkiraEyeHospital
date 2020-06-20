<?php session_start() ?>

<?php $username=$_SESSION['username']; ?>
<?php
if(empty($username)){
  header("Location: index.php");
}
?>
<?php include 'include/header.php'; ?>
<?php
if(isset($_GET['con'])){
  $conId=$_GET['con'];
  $queryCon=" update appointment set status='CONFIRMED' where id=$conId ;";
  $resultCon=mysqli_query($connection,$queryCon);
  header(("Location: adminIndex.php"));
}
?>
<?php
if(isset($_GET['del'])){
  $conDel=$_GET['del'];
  $queryDel=" delete from appointment where id=$conDel ;";
  $resultDel=mysqli_query($connection,$queryDel);
  header(("Location: adminIndex.php"));
}
?>


<?php include 'include/jumbotron.php'; ?>

<?php include 'include/adminNavBar.php'; ?>

<hr>
<div class="container">
<?php
$queryLocation="select location from admin where userName='".$username."';";
$resultLocation=mysqli_query($connection,$queryLocation);
while($resLocation=mysqli_fetch_assoc($resultLocation)){
  $location=$resLocation['location'];
}

$query="select * from appointment where branch='".$location."';";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
?>
<table>
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Location</th>
    <th>Phone Number</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Options</th>
  </tr>
<?php
while($res=mysqli_fetch_assoc($result)){
    $id=$res['id'];
    echo "<tr>";
    echo  "<td>".$res['name']."</td>";
    echo  "<td>".$res['age']."</td>";
    echo  "<td>".$res['branch']."</td>";
    echo  "<td>".$res['phone']."</td>";
    echo  "<td>".$res['date']."</td>";
    echo  "<td>".$res['time']."</td>";
    echo  "<td>".$res['status']."</td>";
    echo  "<td><a href='adminIndex.php?con=".$id."'>Confirm</a> <a onClick=\"javascript: return confirm('Are you sure you want to delete this appointment?'); \" href='adminIndex.php?del=".$id."'>Delete</td></a>";
    echo "</tr>";
}
}else{
   echo "<div class='msg'>No Appointments</div>";
}
?>

</table>
</div>
