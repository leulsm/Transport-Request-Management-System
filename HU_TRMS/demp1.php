<?php

include ('config.php');
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $collage=$_POST['c'];
  $staff_id=$_POST['si'];
  $password=$_POST['pass'];
  $phone=$_POST['phone'];
  


  $sql="INSERT INTO staff VALUES('$staff_id','$fname','$mname','$lname','$collage','$phone','$password')";
  // $result=mysqli_query($connection,$sql);
if ($connection->query($sql) === TRUE) {
    echo "<P>record inserted successfully<P>";
} else {
    echo "<p style=".$left.">Error: " .$sql. "<br>" .$connection->error."</p>";
}
}else{
  echo"faild to insert";
}
header("Location:staffregister.php");
?>