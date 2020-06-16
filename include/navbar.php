<?php
if(isset($_GET['id'])){
    $active=$_GET['id'];
}else{
    $active=1;
}

?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
            <div class="order-lg-last">
                <a href="index.php#div1" class="btn btn-primary">Make an appointment</a>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($active==1){echo "active";} ?>"><a href="index.php?id=1" class="nav-link">Home</a></li>
                    <li class="nav-item <?php if($active==2){echo "active";} ?>"><a href="about.php?id=2" class="nav-link">About</a></li>
                    <li class="nav-item <?php if($active==3){echo "active";} ?>"><a href="team.php?id=3" class="nav-link">Team</a></li>
                    <li class="nav-item <?php if($active==4){echo "active";} ?>"><a href="services.php?id=4" class="nav-link">Services</a></li>
                    <li class="nav-item <?php if($active==5){echo "active";} ?>"><a href="contact.php?id=5" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>