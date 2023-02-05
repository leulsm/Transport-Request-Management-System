<?php
include_once("sessioncol.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<title></title>
    <style>
            body::before{
                display: block;
                content:'';
                height:160px;
            }
        </style>
</head>
<body>
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
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li>
                      <a class="nav-link" href="#"><span class="nav-profile-name"><?php $p=$_SESSION['col']; echo $p ?></span>
          </a>
                    </li>

                </ul>                
            </div>
        <a href="logoutc.php" type="button"><button class="btn btn-primary ms-auto">Logout</button></a>

        </div>
    </nav>
    <div class="d-flex container">
        <table class="table  px-2">
    <thead>
      <tr ><th class="px-2">R.id</th>
        <th class="px-2">Date</th>
        <th class="px-2">ID</th>
        <th class="px-2">From</th>
        <th class="px-2">Department</th>
        <th class="px-2">Destination</th>
        <th class="px-2">Car type</th>
        <th class="px-2">For</th>
        <th class="px-2">Reason</th>
      </tr>
    </thead>
    <tbody>
<?php
include ('config.php');

$sql1="SELECT requestdate,name,for_collage,department,reason,cartype,destination,status,staffid,rid FROM `requestform` where for_collage='$p'";
$result=mysqli_query($connection,$sql1);


if($result){

while($row=mysqli_fetch_assoc($result)){
    $Rid=$row['rid'];
  $Date=$row['requestdate'];
  $ID=$row['staffid'];

  $From=$row['name'];
  $Department=$row['department'];
  $Destination=$row['destination'];
  $Cartype=$row['cartype'];
  $For=$row['for_collage'];
  $Reason=$row['reason'];

  echo'
  <tr class="px-2">
  <td class="px-2">'.$Rid.'</td>
    <td class="px-2">'.$Date.'</td>
    <td class="px-2">'.$ID.'</td>
    <td class="px-2">'.$From.'</td>
    <td class="px-2">'.$Department.'</td>
    <td class="px-2">'.$Destination.'</td>
    <td class="px-2">'.$Cartype.'</td>
    <td class="px-2">'.$For.'</td>
    <td class="px-2">'.$Reason.'</td> 
    <td><button class="btn" style="background-color:#6df16d"><a href="approv.php?approvid='.$Rid.'" class="text-light">Approve</a></button></td>
    <td><button class="btn btn-danger"><a href="decline.php?declineid='.$Rid.'" class="text-light">Decline</a></button></td>
    <td><button class="btn btn-warning"><a href="wait.php?waitid='.$Rid.'" class="text-light">Wait</a></button></td>
  </tr>
  ';
    }
  }
  ?>
</tbody>
</table>
</div>
</body>
</html>