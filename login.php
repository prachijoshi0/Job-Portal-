<?php

// $server='localhost';
// $username='root';
// $password='';
// $database='jobs';

// $conn=mysqli_connect($server, $username, $password, $database);

// if ($conn->connect_error) {
//    die("connection failed : ".$conn->connect_error);
// }
// echo" ";
// session_start();
// if (isset($_POST['login'])) {
//     $email=$_POST['email'];
//     $password=$_POST['password'];

//     $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
//     $result=mysqli_query($conn,$query);
//     $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
//     if (mysqli_num_rows($result)==1) {

//         header('Location:index.php');
//         // echo "doneee";
//     }
//     else {
//         $error='emailid or password is incorrect !';
//         // echo "errorrrr";
//     }
// }
// mysqli_close($conn);
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Form</title>
    <style>
        body{
          
            background-image: url("https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxvZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60");
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            /* margin: 6em  0 40em 30em; */
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
     /* width: 60% ; */
     background-color: white;
            padding: 30px;
            box-shadow:  10px 10px 8px 10px  #888888;
        }
    </style>
</head>
<body>
    <div class="container">
    <form  method="POST">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
 

  <button type="submit" class="btn btn-primary" name="login">Submit</button> 
  <br> <br>
  <center>
      New User? <br>  Create Account <a href="register.php">Sign Up</a>
  </center>
 
</form>
    </div>
</body>
</html>