<?php

include ('config.php');
session_start();


if(isset($_POST['subm'])){
    $name=$_POST['name'];
    $collage=$_POST['collage'];
    $staffid=$_POST['id'];
    $password=$_POST['password'];

    $sql="SELECT * FROM staff WHERE first_name='$name' && passwor='$password'";
    $result=mysqli_query($connection,$sql);

    $count=mysqli_num_rows($result);
    if($count==1){
               
                $_SESSION['user']=$name;
                $_SESSION['id']=$staffid;
                header("Location: request.php");
            }else{
                echo "Account name and password doesn't match";
            }


        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<style>
.form-container{
    position: absolute;
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    top:110px;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 25px -15px rgba(0, 0, 0, 0.3);
}
.form-container .title{
    color: #000;
    font-size: 25px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 25px;
}
.form-container .title:after{
    content: '';
    background-color: #00A9EF;
    height: 3px;
    width: 60px;
    margin: 10px 0 0;
    display: block;
    clear: both;
}
.form-container .sub-title{
    color: #333;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 20px;
}
.form-container .form-horizontal{ font-size: 0; }
.form-container .form-horizontal .form-group{
    color: #333;
    width: 50%;
    padding: 0 8px;
    margin: 0 0 15px;
    display: inline-block;
}
.form-container .form-horizontal .form-group:nth-child(4){ margin-bottom: 30px; }
.form-container .form-horizontal .form-group label{
    font-size: 17px;
    font-weight: 600;
}
.form-container .form-horizontal .form-control{
    color: #888;
    background: #fff;
    font-weight: 400;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 12px;
    border-radius: 10px;
    border: 2px solid #e7e7e7;
    box-shadow: none;
}
.form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #dcdcdc; }
.form-container .form-horizontal .check-terms{
    padding: 0 8px;
    margin: 0 0 25px;
}
.form-container .form-horizontal .check-terms .check-label{
    color: #333;
    font-size: 14px;
    font-weight: 500;
    font-style: italic;
    vertical-align: top;
    display: inline-block;
}
.form-container .form-horizontal .check-terms .checkbox{
    height: 17px;
    width: 17px;
    min-height: auto;
    margin: 2px 8px 0 0;
    border: 2px solid #d9d9d9;
    border-radius: 2px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .check-terms .checkbox:before{
    content: '';
    height: 5px;
    width: 9px;
    border-bottom: 2px solid #00A9EF;
    border-left: 2px solid #00A9EF;
    transform: rotate(-45deg);
    position: absolute;
    left: 2px;
    top: 2.5px;
    transition: all 0.3s ease;
}
.form-container .form-horizontal .check-terms .checkbox:checked:before{ opacity: 1; }
.form-container .form-horizontal .check-terms .checkbox:not(:checked):before{ opacity: 0; }
.form-container .form-horizontal .check-terms .checkbox:focus{ outline: none; }
.form-container .signin-link{
    color: #333;
    font-size: 14px;
    width: calc(100% - 190px);
    margin-right: 30px;
    display: inline-block;
    vertical-align: top;
}
.form-container .signin-link a{
    color: #00A9EF;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: #00A9EF;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 160px;
    padding: 8px 15px 9px;
    border-radius: 10px;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    text-shadow: 0 0 5px rgba(0,0,0,0.5);
    box-shadow: 3px 3px rgba(0,0,0,0.15),5px 5px rgba(0,0,0,0.1);
    outline: none;
}
@media only screen and (max-width:479px){
    .form-container .form-horizontal .form-group{ width: 100%; }
    .form-container .signin-link{
        width: 100%;
        margin: 0 10px 15px;
    }
}

</style>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="navbar-brand mb-0 h2 ">HU-TRMS</span></a>
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
                        <a href="Homepage.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="Homepage.php" class="nav-link">Service</a>
                    </li><li class="nav-item">
                        <a href="Homepage.php" class="nav-link">Contact</a>
                    </li>
                </ul>                
            </div>
        </div>
    </nav>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Login</h3>
                    <form class="form-horizontal" method="POST" action="">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text"name="name"  class="form-control" placeholder="first Name">
                        </div>
                        <div class="form-group">
                        <label for="inputState" class="form-label">Collage:</label>
        <select id="inputState" class="form-select">
            <option selected>CCI</option>
            <option>COA</option>
            <option>COL</option>
            <option>CSS</option>
            <option>CHBS</option>
        </select>
        </div>                        
                        <div class="form-group">
                            <label>Staff ID</label>
                            <input type="text"  class="form-control" name="id" placeholder="your ID">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div>
                        <button class="btn btn-primary m-4 signup" name="subm">Signin</button>
                        </div>

                        <span class="signin-link">If Your are new here Click here to <a href="staffregister.php">Register</a></span>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>