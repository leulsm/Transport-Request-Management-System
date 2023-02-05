<?php
    include ('config.php');
    $id=$_GET['updateid'];
    $sql1="select * from `cc` where coid=$id";
    $res=mysqli_query($connection,$sql1);
    $row=mysqli_fetch_assoc($res);
    $name=$row['cname'];
    $abrr=$row['cabb'];
    $pass=$row['cpassword'];

    if(isset($_POST['submit'])){
      $name=$_POST['cname'];
      $abrr=$_POST['cabbrivation'];
      $pass=$_POST['cpassword'];

      $sql="update cc set coid=$id, cname='$name', cabb= '$abrr', cpassword='$pass' where coid=$id";

        $result=mysqli_query($connection,$sql);
    if ($result) {
        echo "<P>record Updated successfully<P>";
        header("Location:blank.php");
    } else {
        echo "<p style=".$left.">Error: " .$sql. "<br>" .$connection->error."</p>";
    }
    }else{
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>update</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="contain">
          <div id="f"class="container edit_form">
            <h3 class="m-4">Add collage</h3>
              <form method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Collage Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="name" autocomplete="off"value=<?php  echo $name ?> name="cname">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Abbrivation</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="abbrivation" autocomplete="off"value=<?php  echo $name ?> name="cabbrivation">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" autocomplete="off"value=<?php  echo $name ?> name="cpassword">
                    </div>
                  </div>
                  <button type="submit" name ="submit" class="btn  btn-lg"style="background-color: #461a97; color:#fff;">Update</button>
                </form>
            </div>
        </div>
</body>
</html>