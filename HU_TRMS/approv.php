<?php
include('config.php');
if(isset($_GET['approvid'])){
    $id=$_GET['approvid'];
    $app='Approved';
    $sql="update requestform set status='$app' where rid='$id'";
    $result=mysqli_query($connection,$sql);

    if($result){
        header("Location:collagepage.php");
    }else{
        echo "DATA IS IS NOT SUCCESSFULY DELETED";
        die(mysqli_error($connection));
    }
}

?>