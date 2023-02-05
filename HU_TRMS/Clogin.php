<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
	*{
  		margin: 0;
  		padding: 0;
  		box-sizing: border-box;
 		}
	html{
		font-size: 10px;
    	font-family: sans-serif;
    	}
	#body{
		position: relative;
		margin-top: 70px;
		height: 700px;	
		}
	#body{
		display: inline-flex;
		position: relative;
		height: 570px;
		}
    #header{
    	min-height: 8vh;
        width: 100%;
        left: 0;
        top: 0;
        position: absolute; 
      	background-color: #04AA6D;
      	color: bisque;
      	transition: .3s ease background-color;
        }
	#header:hover{
		color: white;
		background-color: white;
		transition: .3s ease;
		transition: 0.4s ease-out;
	}
	#header h1{
		margin-top: 10px;
		margin-left: 15px;
		font-size: 35px;
	}
	#header h1 span{
		color: cornsilk;
	}
	#header h2{
		position: relative;
		margin-top: -25px;
		margin-left: 330px;
		color: #04AA6D;
		font-size: 40px;
	}
	/* DONE-with_header */

   .leftside{
		width: 300px;
		height: 570px;
		background-color: rgb(192, 236, 192);
		z-index: 1;
	}
	.leftside .onebutton{
		border-style: none;
		font-size: 15px;
		margin-top: 10px;
		margin-left: 10px;
		display: block;
		width: 137px;
		padding: 8px;
		background-color: cornsilk;
		transition: .3s;
	}
	.leftside .onebutton:hover{
		width: 200px;
		background-color: #04AA6D;
		border-top-right-radius: 10px;	
	}
	.sidebutton {
		border-style: none;
		font-size: 15px;
		margin-top: 10px;
		margin-left: 10px;
		display: block;
		width: 137px;
		padding: 8px;
		background-color: cornsilk;
		transition: .3s;
	}
	.sidebutton:hover{
		width: 200px;
		background-color: #04AA6D;	
	}
	button .spanhide{
		display: none;
	}

	/* button span:hover{
		display: none;
	} */
	.headcollage{
		position: relative;
		padding: 15px;
		height: 30px;
		display: inline-block;

	}
	.headcollage p{
		color: #04AA6D;
		flex: left;
		font-size: 29px;
		border-bottom: 3px solid rgb(192, 236, 192);
		margin-bottom: 50px;
		padding: 13px 0;

	}
	.form h1{
		flex: left;
		font-size: 40px;
		border-bottom: 6px solid #04AA6D;
		margin-bottom: 50px;
		padding: 13px 0;
	}
	.collagelogin{
		width: 280px;
		position: relative;
		top: 50px;
		color: #04AA6D;
		opacity: 0;

	}
	.inputtext{
		width: 100%;
		overflow: hidden;
		font-size: 20px;
		padding: 8px 0;
		margin: 8px 0;
		border-bottom: 1px solid #04AA6D;
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
		background: #04AA6D;
		border: none;
		color: #fff;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		margin: 12px 0;
	}
	.btn:hover{
		background: white;
		color: #04AA6D;
		border: 2px solid #04AA6D;
		border-radius: 5px;
	} 
	.logincontain{
		position: absolute;
		display:flex;
		width:800px;
		height: inherit;
		right:350px;
		padding:1px;
		border: 2px solid #04AA6D;
		border-radius:5px;
		top: 10px;
		left: 310px;

		
	}
</style>
</head>
<body>

<section id="header">
	<div class="container">
		<div class="brand">
     		<h1><span>HU</span>TRMS.</h1>
        	<h2>HU Transport Request Management System.</h2>
        	<hr align="center" width="1180px" >
		</div>
	</div>
</section>

<section id="body">
	<div class="leftside">
		<h1 style="color: #04AA6D; margin-left: 10px; padding-top: 10px; margin-bottom: 30px; font-size: 20px;">our Collage's</h1>
		<button class="onebutton"onclick="not()" style="width:70px"><i class="fa fa-tasks" style="font-size:26px; color:rgb(192, 236, 192); "></i></button>
		<table class=".$table.$tablesu.$tablestr.">
			<tbody>
	<?php
		include("config.php");

			$spanhide="spanhide";
			$clogin="collagelogin";
			$POST="POST";
			$nam="name";
			$pass="password";
			$inputtext="inputtext";
			$btn="btn";
			$button="button";
			$sign="sign in";
			$chek="collid";
			$text="text";
			$form="form";
			$headcollage="headcollage";
			$table="table";
			$tablesu="table-success";
			$tablestr="table-striped";
			$sidebutton="sidebutton";
			$logincontain="logincontain";


		$sql="SELECT * FROM `cc`";
		$sql1="SELECT cname,cabb FROM `cc`";
		$result=mysqli_query($connection,$sql);
		$result1=mysqli_query($connection,$sql1);
		$inc=1;
		$com=0;

		if($result){
			while($row=mysqli_fetch_assoc($result) and $com<=$inc){

				$name=$row['cname'];
				$abbrivation=$row['cabb'];
				$inc=$row['coid'];
				
		
				echo "
					<tr>
				    	<td><button class=".$sidebutton."><span>".$abbrivation."</span><span class=".$spanhide."  onclick=".$abbrivation."()>".$name."</span></button></td>
					</tr>

					";

					echo "$inc";
					$com=$com+1;
			}
		}
		echo "<div class=".$logincontain.">";
			if($result1){

			while($row1=mysqli_fetch_assoc($result1)){
				$name=$row1['cname'];
				$abbrivation=$row1['cabb'];
				echo "
					<div id=".$abbrivation." class=".$clogin.">
						<div class=".$headcollage."><p>COLLAGE OF ".$abbrivation."</p></div>
						<div class=".$form.">
							<h1>log in</h1>

							<form method=".$POST.">
								<div class=".$inputtext.">
									<input type=".$text." name=".$nam."  >
								</div>
								<div class=".$inputtext.">
									<input type=".$pass." name=".$pass."  >
								</div>
								<input class=".$btn." type=".$button." name=".$button." value=".$sign.">
							</form>
						
						</div>
					</div>
					";


			}
			}
			echo '
			<script> var '.$clogin.'=document.getElementById("'.$abbrivation.'");

				function '.$abbrivation.'() {
					'.$clogin.'.style.opacity="1";
				} </script>';

		echo "</div>";
	?>	
		
	</div>
</section>


</body>
</html>