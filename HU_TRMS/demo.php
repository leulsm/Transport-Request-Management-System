<?php
include("config.php");

if(isset($_POST['submi'])){
    $name=$_POST['cname'];
    $abrr=$_POST['cabbrivation'];
    $pass=$_POST['cpassword'];
  
  
    $sql="INSERT INTO cc VALUES('','$name','$pass','$abrr')";
    // $result=mysqli_query($connection,$sql);
  if ($connection->query($sql) === TRUE) {
      echo "<P>record inserted successfully<P>";
  } else {
      echo "<p style=".$left.">Error: " .$sql. "<br>" .$connection->error."</p>";
  }
  }else{
    echo"faild to insert";
  }

  header("Location: blank.php");
?>