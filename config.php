<?php
 
 $server='localhost';
 $username='root';
 $password='';
 $database='jobs';

 $conn=mysqli_connect($server, $username, $password, $database);

 if ($conn->connect_error) {
    die("connection failed : ".$conn->connect_error);
 }
 echo"";

 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $number=$_POST['phone'];
     $password=$_POST['password'];

     $sql="INSERT INTO `users`( `name`, `email`, `password`, `phone`) VALUES ('$name','$email','$password','$number')";

     if (mysqli_query($conn, $sql)) {
        echo "";
     }
     else {
         echo "ERROR : Not Able toxecute $sql. ".mysqli_error($conn);

     }
 }
session_start();
if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result)==1) {

        header('Location:index.php');
        
    }
    else {
        $error='emailid or password is incorrect !';
        
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdsec=$_POST['jdsec'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdsec','$skills','$CTC')";
    if (mysqli_query($conn,$sql)) {
        echo "";
    }
    else {
        echo "ERROR : Not Able toxecute $sql. ".mysqli_error($conn);

      
    }

}
if (isset($_POST['applyjob'])) {
   $name=$_POST['name'];
   $qual=$_POST['qual'];
   $apply=$_POST['apply'];
   $year=$_POST['year'];

   $sql="INSERT INTO `candidate`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
//    var_dump($sql);
//    die();
   if (mysqli_query($conn,$sql)) {
    echo "";
}
else {
    echo "ERROR : Not Able toxecute $sql. ".mysqli_error($conn);

   
}
}
mysqli_close($conn);

?>