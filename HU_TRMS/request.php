<?php
include_once("session.php");
?>
<!-- REQUEST PAGE -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<style>
            body::before{
                display: block;
                content:'';
                height:160px;
            }
            #replay{
              width:1000px;
            }
    </style>
</head>
<body>
  <!-- NAVIGATION BAR -->

<nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="navbar-brand mb-0 h1 ">HU-TRMS</span></a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a href="#home" class="nav-link">Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="#replay" class="nav-link">Replay-box</a>
                    </li><li class="nav-item">
                        <a href="homepage.php" class="nav-link">Contact</a>
                    </li>
                    <li>
                      <a class="nav-link" href="#"><span class="nav-profile-name"><?php $p=$_SESSION['id']; echo $p ?></span>
          </a>
                    </li>

                </ul>                
            </div>
        <a href="logout.php" type="button"><button class="btn btn-primary ms-auto">Logout</button></a>

        </div>
    </nav>
  <!-- NAVIGATION BAR -->
<section id="home">


<div class="container">
<!-- FORM -->
<form class="row g-3" method="POST" action="demo2.php">

    <div class="col-md-3">
        <label for="inputState" class="form-label">For:</label>
        <select id="inputState" class="form-select" name="col">
            <option selected>CCI</option>
            <option>COA</option>
            <option>COL</option>
            <option>CSS</option>
            <option>CHBS</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Department:</label>
        <input type="text" name="dep" class="form-control" id="input1" placeholder="department" name="department" required>
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Date:</label><br>
        <input type="Date" name="date"><script type="text/javascript">var now=new Date();document.write("  "+now) </script></input>
    </div>

    <div class="mb-2 col-md-3">
        <label for="formGroupExampleInput" class="form-label">Destination Place:</label>
        <input type="text" class="form-control" name="des"id="formGroupExampleInput" placeholder="destination">
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Type of car:</label>
        <select id="inputState" name="tcar"class="form-select">
            <option selected>Type of car</option>
            <option>Rava-4</option>
            <option>Service bus</option>
            <option>Pickup</option>
        </select>
    </div>

    <div>
    <div class="col-md-6 mb-1 form-group">
        <label for="inputState" class="form-label">Reason:</label>
        <textarea class="form-control" rows="5" name="rea"placeholder="Leave a Reason here" id="floatingTextarea" required></textarea>
        <label for="floatingTextarea"></label>
    </div>
    </div>

  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label" required>Name:</label>
    <input type="text" class="form-control" name="vu1" id="inputAddress" placeholder="user one">
  </div>
  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label">Vehicle Users name 2:</label>
    <input type="text" class="form-control" name="vu2" id="inputAddress" placeholder="user two">
  </div>  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label">Vehicle Users name 3:</label>
    <input type="text" class="form-control" name="vu3"id="inputAddress" placeholder="user three">
  </div>  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label">Vehicle Users name 4:</label>
    <input type="text" class="form-control" name="vu4" id="inputAddress" placeholder="user four">
  </div>  
  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label">Vehicle Users name 5:</label>
    <input type="text" class="form-control"  name="vu5" id="inputAddress" placeholder="user five">
  </div>
  <div class="col-12 col-md-4">
    <label for="inputAddress" class="form-label">Vehicle Users name 6:</label>
    <input type="text" class="form-control"  name="vu6" id="inputAddress" placeholder="user six">
  </div>

  <div class="col-3">
    <label for="inputAddress2" class="form-label" required>Start of trip:</label>
    <input type="date" class="form-control" name="std"id="inputAddress2" >
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label" required>Hour:</label>
    <input type="datetime" class="form-control" name="sth"id="inputCity">
  </div>

  <div class="col-3">
    <label for="inputAddress2" class="form-label" required>Return day:</label>
    <input type="date" class="form-control" name="end" id="inputAddress2" >
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label" required>Hour:</label>
    <input type="datetime" class="form-control" name="enh"id="inputCity">
  </div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary mb-5">Submit</button>
  </div>
</form>
<!-- FORM -->
<?php
  $p=$_SESSION['id'];
?>
<!-- RECORDS IN TABLE FORM -->
<?php
  $p=$_SESSION['id'];
include ('config.php');
?>
<div id="replay">
        <h3 class="container">Recordes:</h3>
        <table class="table  px-5" style="display:inline">
    <thead>
      <tr >
        <th class="px-5">Date</th>
        <th class="px-5">Name</th>
        <th class="px-5">For</th>
        <th class="px-5">Destination</th>
        <th class="px-5">Status</th>
      </tr>
    </thead>
    <tbody>
<?php
include ('config.php');

$p=$_SESSION['id'];
$sql1="SELECT requestdate,name,for_collage,destination,status,staffid FROM `requestform` where staffid='$p'";
$result=mysqli_query($connection,$sql1);


if($result){

while($row=mysqli_fetch_assoc($result)){
  $name=$row['name'];
  $date=$row['requestdate'];
  $for=$row['for_collage'];
  $destination=$row['destination'];
  $status=$row['status'];

  echo'
  <tr class="px-5">
    <td class="px-5">'.$date.'</td>
    <td class="px-5">'.$name.'</td>
    <td class="px-5">'.$for.'</td>
    <td class="px-5">'.$destination.'</td>
    <td class="px-5"><button class="btn btn-warning btn-lg disabled">'.$status.'</button></td>
    
  </tr>
  ';
    }
  }
  ?>
</tbody>
</table>
<!-- RECORDS IN TABLE FORM -->
</div>
        

</div>

</section>

</body>
</html>