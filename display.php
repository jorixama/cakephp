<?php
include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add user</button>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">N.O</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Retype Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


  <?php
  $sql = "Select * from users";
  $result = mysqli_query($con, $sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];
          $username = $row['username'];
          $email = $row['email'];
          $password = $row['password'];
          $enc_password = $row['enc_password'];
          echo ' <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$firstname.'</td>
          <td>'.$lastname.'</td>
          <td>'.$username.'</td>
          <td>'.$email.'</td>
          <td>'.$password.'</td>
          <td>'.$enc_password.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          </td>
        </tr> ';
      }
  }
?>


  </tbody>
</table>
        
    </div>
</body>
</html>