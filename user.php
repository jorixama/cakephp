<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_password = $_POST['enc_password'];

    $sql = "insert into users (firstname,lastname,username,email,password,enc_password)
    values('$firstname','$lastname','$username','$email','$password','$enc_password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:display.php');
    } else {
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
                <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <div class="form-group">
                <label>Retype Password</label>
                <input type="password" class="form-control" placeholder="Enter your password again to confirm" name="enc_password">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>