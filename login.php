<?php include 'include/header.php'; ?>

<?php include 'include/jumbotron.php'; ?>

<?php include 'include/navbar.php'; ?>

<hr>s


<form>

<div class="col-md-4 text-center offset-4">
    <h3>Admin Login</h3>
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="User Name">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Password">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
            <div class="submitting"></div>
        </div>
    </div>
</div>
</form>
<br><br><br><br><br><br>

<?php include 'include/footer.php' ?>