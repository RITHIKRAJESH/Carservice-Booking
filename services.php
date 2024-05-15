<?php
 include "header.php";
 ?>
    <html>
    <body>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
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
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Oil change</h3>
                <p>CHANGES THE OIL.CHECKS ALL GEAR AND BRAKE OILS.A COMPLETE OIL SERVICE.</p>
                </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tyre"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tire Change</h3>
                <p>CHANGES THE TYRE.CHECKING AND REPAIRING PUNCTURES IN TYRES.REVELTING OF TYRES IS ALSO AVILABLE.</p>
                 </div>
            </div> 

          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-battery"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Batteries</h3>
                <p>CHECKS THE BATTERY VOLTAGE.CHARGES THE BATTERY.CHECKS ALL BATTERY CONNECTIONS.</p>
                 </div>
            </div> 
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-engine"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Engine Repair</h3>
                <p>ENSURES COMPLETE ENGINE DIAGNOSIS USING MACHINES.HELPS YOU FIND AND SOLVE THE ENGINE TROUBLES.</p>
                 </div>
            </div>    
          </div>

          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tow-truck"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tow Truck</h3>
                <p>CALL-US ON IMMEDIATE NEEDS FOR TOW-TRUCK SERVICE.OUR EMPLOYEES WILL COME IN WITHIN 30MIN.</p>
                 </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Car WASH</h3>
                <p>WASHES AND CLEANS YOUR CARS INTERIOR AND EXTERIOR NEETLY.POLISHING IS ALSO AVAILABLE AND IS DONE ACCORDING TO THE NEED OF CUSTOMER.</p>
                  </div>
            </div>       
          </div>
        </div>
        </div>
        
			<div class="row mt-4 mt-md-5 justify-content-between">
		
        	<div class="col-md-7 ftco-animate">
			<h5 class="font-weight-bold">Service Cost</h5>
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
               
              
			   <b><u><td><?php echo $rows['sname'] ?></u></b>-
              <?php echo $rows['scost'] ?></td></tr><br>

              </tbody>
	
<?php
		}?>	
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<h5 class="font-weight-bold">Our Advantages</h5>
        		<ul class="services-2">
        			<li><span class="fa fa-check"></span>Free Diagnostics &amp; Brake Check</li>
        			<li><span class="fa fa-check"></span>Certified Repair Service</li>
        			<li><span class="fa fa-check"></span>Repair Estimates</li>
        			<li><span class="fa fa-check"></span>Auto Repair Shops Serving Customer</li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section>
    
    
    
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="login.php" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">-Select services-</option>
                            
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
									<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">-Select Brand-</option>
                           
	                      </select>
	                    </div>
			              </div>
			    				</div>
								
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="vehicle model Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="vehicle model year">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Booking Date">
		            		</div>
			    				</div>
								</div>
                								
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="ADDRESS"></textarea>
			            </div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="COMPLAINT"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			          <input type="submit" value="Book" class="btn btn-dark py-3 px-4">
					
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
  include "footer.php";
  ?>