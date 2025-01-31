<?php
include "header.php";
?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-7 d-flex">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Get in touch</h3>
										<form method="POST" id="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" name="name" id="name" required="" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<input type="email" class="form-control" name="email" id="email" required="" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="text" class="form-control" name="subject" id="subject" required="" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<textarea name="message" class="form-control" id="message" cols="30" rows="7" required="" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary" name="submit">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
										<h3 class="mb-4 mt-md-4">Contact us</h3>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Address:</span>Palarivattom juntion,palarivattom,cochin,kerala</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone:</span> <a href="tel://1234567920">+91 8714215283</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:cstorque2@gmail.com">cstorque2@gmail.com</a></p>
						          </div>
					          </div>
					        	
				          </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div id="map" class="map"></div>
					</div>
				</div>
    	</div>
    </section>
    
    <?php
if(isset($_POST["submit"]))
{
 $name=$_POST["name"];
 $email=$_POST["email"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];
  include "dbconnect.php";
 $sql="insert into contact(name,email,subject,message) values('$name','$email','$subject','$message')";
     $result=mysqli_query($con,$sql);
     if($result)
     {
         echo "<script>alert('Successfully inserted')</script>";
     }
 }

 
 ?>


    <?php
include "footer.php";
?>