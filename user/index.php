<?php
include "header.php";
?>
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We are best car repair services</h2>
			            <h1 class="mb-4">Make your car last longer</h1>
			            <p><a href="services.php" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We care about your car</h2>
			            <h1 class="mb-4">It's time to come to repair your car</h1>
			            <p><a href="services.php" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
		
		<section class="intro">
			<div class="container intro-wrap">
				<div class="row no-gutters">
					<div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
						<div class="intro-box d-flex align-items-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<i class="flaticon-repair"></i>
							</div>
							<h2 class="mb-0">Are you ready? <span>Let's repair it now!</span></h2>
						</div>
						<a href="services.php" class="bg-primary btn-custom d-flex align-items-center"><span>Book an Appointment</span></a>
					</div>
				</div>
			</div>	
		</section>

    <section class="ftco-section">
	
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Our car services</h2>
          </div>
        </div>
		<div class="media-body pl-3">
		<div class="container-fluid">
		<?php
    include "dbconnect.php";
    $sql="select * from addservice";
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con);
    ?>
               
                            
                                 
                                  <tbody>
        <?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
        ?>
            <tr>
               
              <td><img src="../uploads/<?php echo $rows['logo'] ?>"></td>
			   <b><u><td><?php echo $rows['sname'] ?></td></u></b><br/>
              <td><?php echo $rows['description'] ?></td></tr><br><br>

              </tbody>
	
<?php
		}?>	
		</div>	  
</div>	  
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Autorepair</span>
		            <h2 class="mb-4">We help more than 45 years serving customer car</h2>
		            <p>We help more than 45 years serving customer car</h2>
		            <p>Automobiles need maintenance from time to time. Like
humans are required to maintain hygiene, similarly
automobiles also need to be kept clean. Automobiles
have to run on dirty roads and in a polluted environment.
They run on uneven roads with potholes and other
obstructions, and are therefore subjected to loads which
damage them. Therefore, there is a need for regular
maintenance and servicing of automobiles, which is
usually done in auto workshops or auto service stations.</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Vehicle maintenance and servicing is carried out
when the vehicle completes certain kilometres on its
normal running or when the vehicle does not give proper
performance. It is suggested that the vehicle owners
carry out regular and periodical checks on their vehicle.So we gives the best servives available today.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Our vision is to get best services to our customers.
                        We probably work all the days in a week.And we work about 11hours per day.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Customer satisfaction is our top most value.We take opinion from our customers,take changes and try to improvice after every feedbacks.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="45">0</strong>
              </div>
              <div class="text">
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2342">0</strong>
              </div>
              <div class="text">
              	<span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text">
              	<span>Award Winning</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <?php
    include "dbconnect.php";
    $sql="select * from contact";
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con);
    ?>
               
                            
                                 
                                  <tbody>
        <?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result)){
			$i++;
			echo $i.") ";
        
        ?>
            <tr>
               
			<td><?php echo $rows['email'] ?></td><br/>
			   <td><?php echo $rows['name'] ?></td><br/>
              <td><?php echo $rows['message'] ?></td></tr><br><br>

              </tbody>
	
<?php
		}?>	
		</div>	  
</div>	  
    </section>
		
		

    
    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Projects</span>
            <h2>Done Projects</h2>
          </div>
        </div>
			</div>
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Engine</span>
	              	<h2><a href="work-single.html">Engine Testing Complated</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Oil Change</span>
	              	<h2><a href="work-single.html">Change Oil Completed</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Engine</span>
	              	<h2><a href="work-single.html">Engine Diagnostics</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Tire Change</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>	
        
		
		
    <?php
	include "footer.php";
	?>