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

<?php
if(isset($_GET['del'])){
  $messageId=$_GET['del'];
  $messageDel=" delete from contactus where id=$messageId ;";
  $resultDel=mysqli_query($connection,$messageDel);
  header(("Location: adminMessages.php?ac=3"));
}
?>

<hr>
<div class="container">
<?php
$query="select * from contactus;";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
?>
<table>
  <tr>
    <th>From</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Options</th>
  </tr>
<?php
while($res=mysqli_fetch_assoc($result)){
    $id=$res['id'];
    echo "<tr>";
    echo  "<td>".$res['name']."</td>";
    echo  "<td>".$res['email']."</td>";
    echo  "<td>".$res['subject']."</td>";
    echo  "<td>".$res['message']."</td>";
    echo  "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this message?'); \" href='adminMessages.php?del=".$id."'>Delete</td></a>";
    echo "</tr>";
}
}else{
   echo "<div class='msg'>No Messages</div>";
}
?>