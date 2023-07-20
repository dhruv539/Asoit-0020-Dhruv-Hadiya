<?php include("connection.php");?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action ="#" method="POST">
        <div class="title">
            Registration form
        </div>
    <div class="form">
        <div class="input_filed">
            <label>First Name</label>
            <input type="text" class="input" name="fname">
        </div>
        <div class="input_filed">
            <label>Last Name</label>
            <input type="text" class="input" name="lname">
        </div>
        <div class="input_filed">
            <label>Password</label>
            <input type="text" class="input" name="password">
        </div>
        <div class="input_filed">
            <label>Confirm Password</label>
            <input type="text" class="input"name="conpassword">
        </div>
        <div class ="input_filed">
            <label>Gender</label>
            <div class="custom_select">
                <select name="gender">
                <option> Select </option>
                <option> Male</option>
                <option> Female </option>
            </select>
        </div>
</div>
        <div class="input_filed">
            <label>Email Address</label>
            <input type="text" class="input"name="email">
        </div>
        <div class="input_filed">
            <label>Phone no</label>
            <input type="text" class="input" name="phone">
        </div>
        <div class="input_filed">
            <label>Address</label>
        <textarea class="textarea" name="address"></textarea>
        </div>
        <div class="input_filed terms">
            <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
</label>
<p>Agree to term and condition </p>
</div>
        <div class="input_filed">
            <input type="submit" value="Register" class="btn" name="Register">
</div>
</div>
</form>
</div>
</body>
</html>
<?php
if($_POST['Register'])
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['password'];
$cpwd=$_POST['conpassword'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];


$query="INSERT INTO form VALUES ('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"Data inserted succefully";
}
else{
    echo"Failed";
    }
}

?>