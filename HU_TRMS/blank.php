<?php
  include_once("sessionadmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- end CSS-->

    
    <title>Admin page</title>
    <style>
        .edit{
          position: absolute;
          left:400px;
        }
        .contain{
          display:flex;
        }
        .form-group{
          padding-bottom:25px;
        }
        #f,#d{
          display:none;
        }
    </style>
</head>
<body>
    <div class="container d-flex">
    <!-- Start: sidebar -->
      <div class="sidebar position-fixed top-0 start-0 bottom-0 bg-light border-end">
          <div class="d-flex align-items-center p-2">
              <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">ADMIN</a>   
          </div>
          <hr>
          <div class="container link">
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="edit_li" ><a onclick="return viscol()">Collage's</a></li>
                <li class="edit_li"><button onclick="addcol()">Add collages</button></li>
                <li class="edit_li"><a onclick="return mangcol()">Manage collages</a></li>
              </ul>   
          </div>
          <a href="logoutadmin.php"><button class="btn my-5 container" style="background-color: #461a97; color:#fff;">logout</button></a>
      </div>
      <script>
          function addcol(){
            var x=document.getElementById('f');
            var y=document.getElementById('d');
            var Z=document.getElementById('G');


            y.style.display="none";
            Z.style.display="none";

            x.style.width="600px";
            x.style.display="inline";
            x.style.position="relative";
            x.style.top="100px";
            x.style.left="300px";
            x.style.margin="20px";
          }
          function mangcol(){
            var x=document.getElementById('f');
            var y=document.getElementById('d');
            var Z=document.getElementById('G');


            x.style.display="none";
            y.style.display="inline";
            Z.style.display="none";

          }
          function viscol(){
            var x=document.getElementById('f');
            var y=document.getElementById('d');
            var Z=document.getElementById('G');


            x.style.display="none";
            y.style.display="none";
            Z.style.display="inline";

          }
        </script>

    <!-- end: sidebar -->

    <!-- start:other sidebar-->
        <div class="contain">
          <div id="f"class="container edit_form">
            <h3 class="m-4">Add collage</h3>
              <form method="POST" action="demo.php">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Collage Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="name" name="cname">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Abbrivation</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="abbrivation" name="cabbrivation">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="cpassword">
                    </div>
                  </div>
                  <button type="submit" name ="submi"class="btn  btn-lg"style="background-color: #461a97; color:#fff;">Creat</button>
                </form>
            </div>
        </div>
    <!-- end:other sidebar-->
    <!-- end: JS -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <div id="d"class="edit mt-5">
      <h3 class="m-4">Manage collage</h3>
      <table class="table" style="display:inline">
        <thead>
          <tr >
            <th>Name</th>
            <th>Abrriv</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
    <?php
      include ('config.php');
      $sql1="SELECT cname,cabb,coid FROM `cc`";
      $result=mysqli_query($connection,$sql1);

      if($result){

      while($row=mysqli_fetch_assoc($result)){
        $name=$row['cname'];
        $abbrivation=$row['cabb'];
        $inc=$row['coid'];
        echo'
        <tr>
          <td>'.$name.'</td>
          <td>'.$abbrivation.'</td>
          <td>'.$inc.'</td>
          <td><button class="btn btn-primary"><a href="update.php?updateid='.$inc.'" class="text-light">Update</a></button></td>
          <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$inc.'" class="text-light">Delete</a></button></td>
        </tr>
        ';
          }
        }
    ?>
      </tbody>
    </table>
    </div>

    <div id="G"class="edit mt-5">
      <h3 class="m-4">collage</h3>
      <table class="table" style="display:inline">
        <thead>
          <tr >
            <th>Name</th>
            <th>Abrriv</th>
            <th>Password</th>

          </tr>
        </thead>
        <tbody>
    <?php
      include ('config.php');
      $sql1="SELECT cname,cabb,coid FROM `cc`";
      $result=mysqli_query($connection,$sql1);

      if($result){

      while($row=mysqli_fetch_assoc($result)){
        $name=$row['cname'];
        $abbrivation=$row['cabb'];
        $inc=$row['coid'];
        echo'
        <tr>
          <td>'.$name.'</td>
          <td>'.$abbrivation.'</td>
          <td>'.$inc.'</td>
        </tr>
        ';
          }
        }
    ?>
      </tbody>
    </table>
    </div>
  </div>
  <!-- end: JS -->
  <?php
    $left="left:300px;";
    include ('config.php');

    if(isset($_POST['submi'])){
      $name=$_POST['cname'];
      $pass=$_POST['cpassword'];
      $abrr=$_POST['cabbrivation'];
 

      $sql="INSERT INTO cc VALUES('','$name','$pass','$abrr')";

    if ($connection->query($sql) === TRUE) {
        echo "<P>record inserted successfully<P>";
    } else {
        echo "<p style=".$left.">Error: " .$sql. "<br>" .$connection->error."</p>";
    }
    }else{
      echo"faild to insert";
  }
  ?>
    
</body>
</html>