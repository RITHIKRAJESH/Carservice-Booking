<?php
 session_start();
 include "header.php";
 ?>
<html>
<body>
<section class="ftco-login ftco-section ftco-no-pt ftco-no-pb img"
	style="background-image: url(images/bg_2.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex justify-content-end">
			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
				<span class="subheading" >LOGIN</span>

				<form action="#" method="POST"class="login">
					<div class="row">
						<div class="col-md-12">

							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="email" name="email"required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="password" name="password" required="">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Sign in" name="signin" class="btn btn-secondary">

								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">

		                        create new account?<a href="registration.php">sign up</a>
								</div>
							</div>
						</div>
				</form>

			</div>
		</div>
	</div>
</section>
</body>
</html>
<?php
if(isset($_POST["signin"]))
{

$email=$_POST["email"];
$password=$_POST["password"];
include "dbconnect.php";
$sql="select * from login where email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
//$email=$row["email"];
if($row=mysqli_fetch_array($result))
   {
   	$_SESSION["userid"]=$row["userid"];
   	$_SESSION["email"]=$row["email"];
   	$role=$row["role"];
    echo $role;
	if($role=="Admin")
	{
		echo "<meta http-equiv='refresh' content='1;url=admin/'>";
	}
	else
	if($role=="User")
	{
		echo "<meta http-equiv='refresh' content='1;url=user/'>";
		
	}
   }
   else
   	echo "<script>alert('incorrect credentials')</script>";

}

?>


?>
<?php
	include "footer.php";
	?>