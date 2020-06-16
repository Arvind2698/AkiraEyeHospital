<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    if($id==2){
        $pageMessageMain="About Us";
        $pageMessageSub="About Us";
    }else if($id==3){
        $pageMessageMain="Our Experts";
        $pageMessageSub="Team";
    }else if($id==4){
        $pageMessageMain="Services";
        $pageMessageSub="Services";
    }else if($id=5){
        $pageMessageMain="Contact Us";
        $pageMessageSub="Contact Us";
    }
}else{
    $pageMessageMain="";
    $pageMessageSub="";
}
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/home3.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><?php echo $pageMessageSub ?> <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"><?php echo $pageMessageMain ?></h1>
          </div>
        </div>
      </div>
    </section>