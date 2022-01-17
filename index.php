<?php


include 'config.php'

?>
<?php include 'header.php' ?>

<div class="content">
   
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
Post Job
  </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDsec" class="form-label">Job Description</label>
    
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"  id="jobDesc" name="jdsec"></textarea>

  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
 
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text " class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
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
    $sql="SELECT `cname`, `position`, `CTC` FROM `jobs`";
    $result=mysqli_query($conn, $sql);
    if ($result->num_rows>0) {
      $i=0;
      while ($rows=$result->fetch_assoc()) {
        
        echo "<tr>
              <th>".++$i."</th>
            
              <td>".$rows['cname']."</td>
              
              <td>".$rows['position']."</td>
              
              <td>".$rows['CTC']."</td>
        </tr>";
        
      }
    }
    else {
      echo " ";
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>
</div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>