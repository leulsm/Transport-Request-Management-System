<?php
include("connection.php");

if(isset($_POST['submit'])){
$name=$_POST['admin_name'];
$id=$_POST['admin_id'];
$password=$_POST['password'];

$sql="SELECT * FROM admin_login WHERE admin_id='$id' && password='$password'";

$result= mysqli_query($connection,$sql);

$count=mysqli_num_rows($result);

if($count==1){
    header("Location:collageone.php");
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>collagelogin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>

    .colldiv{
        margin-top:20px ;
        border:2px solid #ffe1dd;
        
    }
    </style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container-fluid container">
    <a class="navbar-brand" href="#">HU_TRMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>
<div class="container p-5 colldiv">
<form class="row " method="POST">
  <div class="col-md-7">
    <label for="inputEmail4" class="form-label">NAME</label>
    <input type="text" name="admin_name"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-7">
    <label for="inputEmail4" class="form-label">ID</label>
    <input type="text" name="admin_id"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-7">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password"class="form-control" id="inputPassword4">
  </div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
</body>
</html>