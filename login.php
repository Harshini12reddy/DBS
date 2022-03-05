<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Wealth Manager | Banking</title>
<?php include('./header.php'); ?>
<?php
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /background: #007bff;/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:#a9f1df;
	}
	#login-right{
		position: absolute;
		right:0;
		width:45%;
		height:92%;
		background:#a9f1df;
		display: flex;
		align-items: center;
		background-position: center;
		background-image:url(garud.png);
		background-size:550px 550px;
		background-repeat:no-repeat;
		padding-right:55px;
		padding-left:60px;
		padding-top:25px;
		background-origin:padding-box;

	}
	#login-left{
	background-image:url(logo.png);
	position: absolute;
	left:0;
	width:55%;
	height:92%;
	background-color:#a9f1df;
    align-items: center;
    background-position: center center;
    background-repeat:   no-repeat;
    background-position: center;
    background-size: 900px;
  	}
	#login-right .card{
		margin: auto
	}
	.form-control
	{
		border:3px solid;
	}
	.alert-info
	{
		background-color:#a9f1df;
	}
	.li
	{
		display:inline;
		padding-left:20px;
	}
	.navbar-dark
	{
		background-color:black;
		color:white;
	}
	H1,H6
	{
		font-family: 'Montserrat', sans-serif;
		font-weight:bolder;
	}
	.card
	{
		background-color:#a7bbc7;
		border-radius:25px;
		opacity: 92% ;
	}
</style>
<body>
<div class="wrapper">
<nav class="navbar navbar-dark">
<ul class="navbar-nav">
		<li class="nav-item">
		<a class="nav-link" data-widget="pushmenu" href="/" role="button">
			<i class="fas fa-home "></i>Home
		</a>
		</li>
</ul>
</nav>
</div>
  <main id="main" class=" alert-info">
  		<div id="login-left">
		  <span class="appointmentlogo"></span>
  		</div>
  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body ">
  					<form id="login-form" >
              <H1 style="text-shadow: 0 0 5px skyblue, 0 0 5px darkgreen;"><center><u>DBS</u></center></H1>
              <H6 style="text-align:center;"><super>Banking System<super></H6>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-info ">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>


  </main>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.changes({
			url:'changes.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 2){
					location.href ='schedule.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or Password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>
</html>
