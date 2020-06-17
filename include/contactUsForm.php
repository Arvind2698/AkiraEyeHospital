<?php include 'function.php'; ?>
<?php
if(isset($_POST['submit'])){
    $name=cleanInput($_POST['name']);
    $from=cleanInput($_POST['email']);
    $subject=cleanInput($_POST['subject']);
    $message=cleanInput($_POST['message']);

    if(empty($from)){
        $errorMsg="Please enter an Email";
    }else{
        $to="r.arvind007@gmail.com";
        $header="From: ".$from;
        mail($to,$subject,$message,$header);
        $errorMsg="Thank you for getting in touch";
    }
}else{
    $errorMsg='';
}

?>

<h3 class="mb-4">Get in touch</h3>
<span class="errorMsg"><?php echo $errorMsg; ?></span>
<form method="POST" id="contactForm" class="contactForm">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                <div class="submitting"></div>
            </div>
        </div>
    </div>
</form>