<?php if(isset($_GET["ac"])){
    $activeLink=$_GET["ac"];
}else{
    $activeLink=1;
}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
          </button>
          <div class="order-lg-last">
                <a href="include/logout.php" class="btn btn-primary">Logout</a>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($activeLink==1){echo "active";} ?> "><a href="adminIndex.php" class="nav-link">Appointments</a></li>
                    <li class="nav-item  <?php if($activeLink==2){echo "active";} ?> "><a href="addAdmin.php?ac=2" class="nav-link">Add Admin</a></li>
                    <li class="nav-item <?php if($activeLink==3){echo "active";} ?>"><a href="adminMessages.php?ac=3" class="nav-link ">Messages</a></li>
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>