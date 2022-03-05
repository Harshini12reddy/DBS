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
header("location:login.html?page=home");
?>


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
</head>
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
