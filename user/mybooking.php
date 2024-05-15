<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
?>
<?php
    include "dbconnect.php";
    
    $sql="select user.fullname,user.phone,booking.*,sname,bname from booking,user,addservice,addbrand where booking.userid=user.userid and booking.service=addservice.Sid and booking.brand=addbrand.b_id and booking.userid=$userid and status!='Rejected'";
    
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con);
?>
<section class=" ftco-section ftco-no-pt ftco-no-pb img" style="bgcolor:white;">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-mid">
    			
    				<span class="heading">My Booking</span>
    				<table class="table">
              <thead>
            <tr>
            <td scope="col">Id</td>
              <td scope="col">Service</td>
              <td scope="col">Booking date</td>
             
              <td scope="col">Status</td>
              <td scope="col">Payment</td>
              <td scope="col">Action</td>
              <td></td>
            </tr>
</thead>
<tbody>
<?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
        ?>
        <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['sname'] ?></td>
               <td><?php echo $rows['bdate'] ?></td>
               <td><?php echo $rows['status'] ?></td>
               <td><?php echo $rows['Payment'] ?></td>
               <td><a href='payment.php?book_id=<?php echo $rows["book_id"];?>'><button class="btn btn-primary">Bill</button><a href='cancel.php?book_id=<?php echo $rows["book_id"];?>'><button class="btn btn-secondary">Cancel</button></a></td>
            
        </tr>
</tbody>
<?php
}
?>
           </table> 
    			</div>
    		</div>
    	</div>
    </section>
 
<?php 
include "footer.php";
?>