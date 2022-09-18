<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | E-Voting System</title>
 	

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
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:#f9ebea;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background: #f9ebea;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto;
background:brown;

	}
	.logo {
    margin: auto;
    font-size: 8rem;
    /*background: #00000061;*/
    /*padding: .5em 0.8em;*/
    /*border-radius: 50% 50%;*/
    color: #000000b3;
}
</style>

<body>

  <main id="main" class=" alert-info">

	

  		<div id="login-left">
		  

  			<div class="logo">
  				<h1 align="center"> Electronic - Voting System </h1>
  				<img src="voting.png" alt="..." width="100%">
  			</div>
  		</div>
  		<div id="login-right" >
			     
  			<div class="card col-md-8">
				          
  				<div class="card-body">
         <font color="white">   <h2  align="center">Login Here</h2></font>
  					<form id="login-form" >
  						<div class="form-group">
  		                                        <font color="white">Username</font>
  					<input type="text" id="username" name="username"  class="form-control " ></i>
  						</div>
  						<div class="form-group">
  							 <font color="white">Password</font>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 float-left " >Login</button></center>

  					</form>
					  
					  <div class="col-lg-12">
		<a href="http://localhost/voting/contact/">	<button class=" float-right btn-sm" ><i ></i> New user</button></a>
	</div>
	</div>	
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
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>