<?php
include "header.php";
?>
<?php
if(isset($_POST["register"]))
{
 $fullname=$_POST["fullname"];
 $phone=$_POST["phone"];
 $bdate=$_POST["bdate"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $address=$_POST["address"];
 $userid=0;
 include "dbconnect.php";
 $sql="select * from login where email='$email'";
 $result=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($result))
    echo "<script>alert('emailid exist')</script>";
 	else
 	{
 $sql="insert into login (email,password,role) values('$email','$password','User')";
 $result=mysqli_query($con,$sql);
 if($result)
 {
     $sql="select max(userid) as userid from login";
     $result=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($result))
     {
         $id=$row["userid"];
     }
     
 
     $sql="insert into user(fullname,phone,bdate,email,address,userid) values('$fullname','$phone','$bdate','$email','$address','$userid')";
     $result=mysqli_query($con,$sql);
     if($result)
     {
          echo "<script>alert('Successfully Registered')</script>";
		  //header("location:emailer.php?email=$email");
     }
 }
 }
}
 ?>


<html>
    <body>
<section class="ftco-REGISTRATION ftco-section ftco-no-pt ftco-no-pb img"
	style="background-image: url(images/bg_1.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex justify-content-end">
			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
				<span class="subheading" style="color:white">REGISTRATION</span>

				<form action="#" method="POST" class="registration">
					<div class="row">
						<div class="col-md-12">
                        
                            <div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="fullname" name="fullname" required="">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="phone" name="phone" required="" pattern="[0-9]{10}" maxlength="10" minlength="10">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<input type="date" name="bdate" required="" >
		            		</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="email" name="email" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="password" class="form-control" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" placeholder="address" name="address" required=""></textarea>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" placeholder="state" name="state" required=""></textarea>
							</div>
                           


							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="REGISTER" name="register" class="btn btn-primary">

								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
		                        Already have anaccount?<a href="login.php">Login</a>
								</div>
							</div>
						</div>
				</form>

			</div>
	</div>
</section>
</body>
</html>

<?php
 include 'footer.php';
?>

