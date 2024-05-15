<?php
session_start();
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
			   <b><u><td><?php echo $rows['sname'] ?></u></td></b><br>
              <td><?php echo $rows['description'] ?></td></tr><br>

              </tbody>
	
<?php
		}?>	
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
    

    
    
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_11.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				
    				<form action="#" method="POST" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="service" class="form-control">
	                      	<option >-Select services-</option>
							  
							  <?php
                           include "dbconnect.php";
                           $sql="select  *  from addservice";
                          $result=mysqli_query($con,$sql);
                          while($row=mysqli_fetch_array($result))
                           {
                          echo "<option value='$row[Sid]'>$row[sname]</option>";
                          
						}
                           ?>
						   
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
	                      <select name="brand" class="form-control">
	                      	<option >-Select Brand-</option>
							  <?php
                           include "dbconnect.php";
                           $sql="select  *  from addbrand";
                          $result=mysqli_query($con,$sql);
                          while($row=mysqli_fetch_array($result))
                           {
                          echo "<option value=$row[b_id]>$row[bname]</option>";
                           }
                           ?>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="model" class="form-control" placeholder="vehicle model Name" required="">
			            </div>
						</div>			
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select id="year" name="year" class="form-control">
    <option>-vehicle model year-</option>
    
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>
						</div>
						</div>
						</div>

							
								
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"></div>
			            	Booking date:<input type="date" name="bdate" min="<?= date('Y-m-d'); ?>" >
		            		</div>
			    				</div>
						</div>
               								
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="address"  cols="30" rows="7" class="form-control" placeholder="ADDRESS" required=""></textarea>
			            </div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
			              <textarea name="complaint" cols="30" rows="7" class="form-control" placeholder="COMPLAINT"></textarea>
			            </div>
								</div>
								
							
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Book" name="submit" class="btn btn-dark py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
	<?php
  include "footer.php";
  ?>
<?php
if(isset($_POST["submit"]))
{
 $service=$_POST["service"];
 $brand=$_POST["brand"];
 $model=$_POST["model"];
 $year=$_POST["year"];
 $bdate=$_POST["bdate"];
  $address=$_POST["address"];
 $complaint=$_POST["complaint"];
 include "dbconnect.php";
  $userid=$_SESSION["userid"];
  $sql="select * from addservice where Sid=$service";
  echo $sql;

  $result=mysqli_query($con,$sql);
  $scost=0;
  while($row=mysqli_fetch_array($result))
  {
	  $scost=$row["scost"];
}
  $sql="insert into booking (service,userid,scost,brand,model,year,bdate,address,complaint) values('$service','$userid','$scost','$brand','$model','$year','$bdate','$address','$complaint')";
  echo $sql;   
  $result=mysqli_query($con,$sql);
     

     if($result)
     {
         echo "<script>alert('Successfully booked wait for confirmation')</script>";
     }
 }


 ?>

  

  