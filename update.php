<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from users where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $username=$row['username'];
    $email=$row['email'];
    $password=$row['password'];
    $enc_password=$row['enc_password']; 


if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $enc_password=$_POST['enc_password'];

    $sql = "update users set id=$id, firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$password', enc_password='$enc_password' where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" autocomplete="off" 
                value=<?php echo $firstname;?>>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" autocomplete="off"
                value=<?php echo $lastname;?>>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off"
                value=<?php echo $username;?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                value=<?php echo $email;?>>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"
                value=<?php echo $password;?>>
            </div>

            <div class="form-group">
                <label>Retype Password</label>
                <input type="password" class="form-control" placeholder="Enter your password again to confirm" name="enc_password"
                value=<?php echo $enc_password;?>>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>