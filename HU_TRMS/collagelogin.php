<?php
	include ('config.php'); // creat connection with database
	session_start();

	if(isset($_POST['button'])){
    	$collagename=$_POST['col'];
    	$password=$_POST['pass'];


    	$sql="SELECT * FROM cc WHERE cabb='$collagename' && cpassword='$password'";
    	$result=mysqli_query($connection,$sql);

    	$count=mysqli_num_rows($result);	
    	if($count==1){       
                $_SESSION['col']=$collagename;
                $_SESSION['pass']=$password;
                header("Location: collagepage.php");
            }else{
                echo '<script>alert ("Account name and password doesnt match")</script>';
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	
	<title>collage login</title>
	<style type="text/css">
	body::before{
        display: block;
        content:'';
        height:73px;
        }
   .leftside{
		width: 300px;
		height: 570px;
		background-color: #3f4244;
	}
	.table{
	position: absolute;
		left:20px;
		top:90px;
	}
    .rightside{
		position: absolute;
		width:1035px;
		height: inherit;
		right:350px;
		padding:1px;
		border: 2px solid #0f1113;
		border-radius:5px;
		top: 75px;
		left: 310px;
    }
	#two{
		opacity:0;
	}
	.sidebutton {
		border-style: none;
		font-size: 15px;
		margin-top: 10px;
		margin-left: 10px;
		display: block;
		width: 160px;
		padding: 8px;
		background-color: #3f4244;	
		border:1px solid #0f1113;
		transition: .3s;
		color:#fff;
	}
	.sidebutton:hover{
		width: 200px;
		background-color: #0f1113;	
		color:#fff;
	}
	button .spanhide{
		display: none;
	}
	.headcollage{
		position: relative;
		padding: 15px;
		height: 130px;
		display: inline-block;
	}
	.headcollage p{
		color: #3f4244;
		flex: left;
		font-size: 29px;
		border-bottom: 3px solid #3f4244;
		margin-bottom: 50px;
		padding: 13px 0;
	}
	.form h1{
		flex: left;
		font-size: 40px;
		border-bottom: 6px solid #3f4244;
		margin-bottom: 50px;
		padding: 13px 0;
	}
	.collagelogin{
		width: 380px;
        left:170px;
		position: absolute;
		top: 50px;
		color: #3f4244;
	}
	.one{
        left:30px;
		position: absolute;
		top: 30px;
		color: #000;
	}
	.one-one{
		margin:20px;
		width: inherit;
		height: 120px;
		border-bottom: 1px solid #3f4244;
		background-color: #3f4244;
		color:white;
		border-radius: 5px;
		
	}
	.one-one p{
		padding: 20px;
	}
	.inputtext{
		width: 100%;
		overflow: hidden;
		font-size: 20px;
		padding: 8px 0;
		margin: 8px 0;
		border-bottom: 1px solid #3f4244;
	}
	.inputtext input{
		border: none;
		outline: none;
		background: none;
		color: #000;
		font-size: 18px;
		width: 80%;
		float: left;
		margin: 0 10px;
	}
	.btn{
		width: 100%;
		background: #3f4244;
		border: none;
		color: #fff;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		margin: 12px 0;
	}
	.btn:hover{
		background: white;
		color: #3f4244;
		border: 2px solid #3f4244;
		border-radius: 5px;
	} 
    .detail{
        background-color:red;
        width:300px;
        height:100px;
        padding: 10px;
    }
	.home{
		display: inline-flex;
		background-color:#42464b;
	}
	.footer{
		display: block;
		position: absolute;
		top:630px;
		width: 1350px;
	}

	.spanhide{

	display: none;
}
button:hover .spanhide{
	display: inline;

}
button:hover span{
	display: none;

}


</style>
</head>

<body>
	<!-- nav bar -->
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
                        <a href="homepage.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="homepage.php" class="nav-link">Service</a>
                    </li><li class="nav-item">
                        <a href="homepage.php" class="nav-link">Contact</a>
                    </li>
                </ul>   	            
            </div>
        </div>
    </nav>
	<!-- navbar end -->
	<!-- home -->
	<div class="home">
		<!-- leftside -->
		<div class="leftside">
			<h1 style="color:#fff; margin-left: 20px; padding-top: 10px; margin-bottom: 30px; font-size: 25px;">Collage's</h1>
			<button onclick="goback()"><i class="fa fa-tasks" style="font-size:26px; color:black; "></i></button>
			<table class=".$table.$tablesu.$tablestr.">
				<tbody>
			<?php
				include("config.php");
					$sidebutton="sidebutton";
					$go="go()";
			
					$spanhide="spanhide";

					$sql="SELECT * FROM `cc`";
					$sql1="SELECT cname,cabb FROM `cc`";
					$result=mysqli_query($connection,$sql);
					$result1=mysqli_query($connection,$sql1);
					$inc=1;
					$com=0;
					$c="C. Of";

					if($result){
						while($row=mysqli_fetch_assoc($result)){

							$name=$row['cname'];
							$abbrivation=$row['cabb'];
							$inc=$row['coid'];	
								echo "
								<tr>
									<td><button class=".$sidebutton."  onclick=".$go."><span>".$abbrivation."</span><span class=".$spanhide.">".$name."</span></button></td>
								</tr>
								";
								$com=$com+1;
						}
					}        
				?>	

			<script type="text/javascript">

			function go(){
				var x=document.getElementById("two");
				var y=document.getElementById("one");
				x.style.opacity=1;
				y.style.opacity=0;
			}
			function goback(){
				var x=document.getElementById("two");
				var y=document.getElementById("one");
				x.style.opacity=0;
				y.style.opacity=1;
			}
			</script> 
			
		</div>
		<!-- rightside -->
		<div class="rightside">
			<div id="one" class="one">
			<div class="one-one">
				<p>
				Here collages can select there own login_page and sign_in to the system.
				</p>
			</div>
			<div class="one-one">
				<p>
				Collages New page can be created by only autorized Admin.
				</p>
			</div><div class="one-one">
				<p>
				Collages can approve or decline the request from the user.
				</p>
			</div>
			</div>
			<div id="two" class="two">
				<div class="collagelogin">
					<div class="headcollage"><p>COLLAGE</p></div>
					<div class="form">
						<h1>log in</h1>

						<form method="POST" action="">
						<div class="form-group">
                        <label for="inputState" class="form-label">Collage:</label>
							<select id="inputState" name="col" class="form-select">
								<option selected>--select collage--</option>
								<option>CCI</option>
								<option>COA</option>
								<option>COL</option>
								<option>CSS</option>
								<option>CHBS</option>
							</select>
    				    </div>
							<div class="inputtext">
								<input type="password" name="pass"  placeholder="Enter password..">
							</div>

								<button class="btn" name="button">Signin</button>
						</form>	
					</div>
				</div>
		</div>
		</div>
	</div>
	<!-- footer -->
	<section class="footer">
    	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    	<div class="b-example-divider"></div>
		<div class="bg-dark text-warning">
		<div class="container ">
  			<footer class="py-3 my-4">
    			<ul class="nav justify-content-center border-bottom pb-3 mb-3">
					<li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">Home</p></a></li>
					<li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">service</p></a></li>
					<li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-white">contact</p></a></li>
    			</ul>
    			<p class="text-white text-center">&copy;2022 Mafia's Group, Inc</p>
    		</footer>
		</div>
		</div>
	</section>
	<!-- footer end -->
</body>
</html>