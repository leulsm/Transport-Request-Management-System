<?php
include('config.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from cc where coid=$id";
    $result=mysqli_query($connection,$sql);

    if($result){
        echo "DATA IS SUCCESSFULY DELETED";
    }else{
        echo "DATA IS IS NOT SUCCESSFULY DELETED";
        die(mysqli_error($connection));
    }

}
header("Location:blank.php");
?>