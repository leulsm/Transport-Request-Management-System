<?php
session_start();
  $p=$_SESSION['id'];

include ("config.php");

if(isset($_POST['submit'])){
  $collage=$_POST['col'];
  $department=$_POST['dep'];
  $date=$_POST['date'];
  $destination=$_POST['des'];
  $typeOfCar=$_POST['tcar'];
  $reason=$_POST['rea'];
  $vuser1=$_POST['vu1'];
  $vuser2=$_POST['vu2'];
  $vuser3=$_POST['vu3'];
  $vuser4=$_POST['vu4'];
  $vuser5=$_POST['vu5'];
  $vuser6=$_POST['vu6'];
  $startDay=$_POST['std'];
  $startHour=$_POST['sth'];
  $endDay=$_POST['end'];
  $endHour=$_POST['enh'];
  $status="padding";

echo $p;

  $sql="INSERT INTO requestform VALUES('$vuser1','$vuser2','$vuser3','$vuser4','$vuser5','$vuser6','$collage','$department','$destination','$reason','$typeOfCar','$date','$startDay','$startHour','$endDay','$endHour','$status','$p','')";
  // $result=mysqli_query($connection,$sql);
if ($connection->query($sql) === TRUE) {
    echo "<P>record inserted successfully<P>";
} else {
    echo "<p>Error: " .$sql. "<br>" .$connection->error."</p>";
}
}else{
  echo"faild to insert";
}
header("Location:request.php");

?>
