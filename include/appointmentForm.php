<?php include 'function.php'; ?>
<?php
if(isset($_POST['submit'])){
    $name=cleanInput($_POST['name']);
    $age=cleanInput($_POST['age']);
    $location=cleanInput($_POST['location']);
    $phone=cleanInput($_POST['phone']);
    $date=cleanInput($_POST['date']);
    $time=cleanInput($_POST['time']);

    if(empty($name)){
        $errorMsg='Name Cannot be empty';
    }else if(empty($age)){
        $errorMsg='Age Cannot be empty';
    }else if(empty($location)){
        $errorMsg='Please select Location';
    }else if(empty($phone)){
        $errorMsg='Please enter Phone Number';
    }else if(empty($date)){
        $errorMsg='Please select a Date';
    }else if(empty($time)){
        $errorMsg='Please select a Time';
    }else if(!preg_match("/^[1-9][0-9]{9}$/",$phone)){
        $errorMsg="Please enter a valid phone number";
    }else{
        $query="insert into appointment(name,age,branch,phone,date,time) values( '".$name."' , ".$age." , '".$location."' , '".$phone."' , '".$date."' , '".$time."' ); ";
        $result=mysqli_query($connection,$query);
        $errorMsg="Appointment Saved!";
        $name=$age=$location=$phone=$date=$time='';
    }
}else{
    //$nameError=$ageError=$locationError=$phoneError=$dateError=$timeError='';
    $errorMsg='';
    $name=$age=$location=$phone=$date=$time='';
}
?>
<span class="errorMsg"><?php echo $errorMsg; ?></span>

<form action="" method="POST" class="appointment">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <input type="text" value="<?php echo $name; ?>" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" value="<?php echo $age; ?>" name="age" class="form-control" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="location" id="" class="form-control">
			                      	                    <option value="<?php echo $location; ?>">Select Branch</option>
			                                            <option value="Rajahmundry">Rajahmundry</option>
			                                            <option value="Vijaywada">Vijaywada</option>
			                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <input type="number" value="<?php echo $phone; ?>" name="phone" class="form-control" placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                                <input type="text" value="<?php echo $date; ?>" name="date" class="form-control appointment_date" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                <input type="text" value="<?php echo $time; ?>" name="time" class="form-control appointment_time" placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="book" class="btn btn-secondary py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>