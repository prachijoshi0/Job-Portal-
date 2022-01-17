<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/career.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
    <title>Career</title>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1>Job Portal</h1>
    <h3>Best Jobs available matching your skills</h3>
   
  </div>
</div>
<div class="row">
<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
   die("connection failed : ".$conn->connect_error);
}
echo" ";
$sql="SELECT * FROM `jobs`";

$result=mysqli_query($conn,$sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
    echo '
    <div class="col-md-4">
    <div class="phpDeveloper">
    <h3 style="text-align: center;">'.$row['position'].'</h3>
    <h4 style="text-align: center;">'.$row['cname'].'</h4>
    <p style ="color: black;text-align: justify;">'.$row['jdesc'].'</p>
    <p style="color: black;"><b> Skills Required : </b>' .$row['skills'].'</p>
    <p style="color: black;"><b> CTC : </b>'.$row['CTC'].'</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Apply Now</button>
    </div>

   </div>
    ';
  }
}
else {
  echo "";
}


?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" Required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" >Applying For</label>
   
          
            <div class="form-group">
         
 <?php
 $sql="SELECT position FROM `jobs`";

$result=mysqli_query($conn,$sql);
?>

  <select name="apply"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
 <?php
  if ($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
  $pos_name=$row['position'];
  echo "

  <option value='$pos_name'>$pos_name</option>";
}
}
?>
    </select>      
 
  
</div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" id="name" Required name="qual">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Year Passout</label>
            <input type="text" class="form-control" id="name" name="year" Required>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="applyjob">Apply</button>
      </div>
    </div>
    </form>
  </div>
</div

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>