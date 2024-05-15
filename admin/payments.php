<?php

   include "header.php";

    include "dbconnect.php";
    
    
    $sql="select user.fullname,user.phone,booking.*,booking.scost+addcost as total,sname,bname from booking,user,addservice,addbrand where booking.userid=user.userid and booking.service=addservice.Sid and booking.brand=addbrand.b_id and status!='Rejected'";
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con);
    
?>
 
 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Booking Table</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NO</th>
                                      
                                      <th scope="col">Name</th>
                                       <th scope="col">Phone</th>
                                       <th scope="col">Service</th>
                                       <th scope="col">BRAND</th>
                                       <th scope="col">Address</th>
                                      <th scope="col">Total</th>
                                      <th scope="col">Status</th>
                                       <div class="form-group row">
                                    
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result))
        {
            $i++;
        ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['fullname'] ?></td>
               <td><?php echo $rows['phone'] ?></td>
               <td><?php echo $rows['sname'] ?></td>
               <td><?php echo $rows['bname'] ?></td>
               <td><?php echo $rows['address'] ?></td>
               <td> <?php echo $rows['total'] ?> </td>
               <td><?php echo $rows['Payment']?></td>
                
               
            </tr>
            
        <?php
        }
        ?>
                                    
                                  </tbody>
                            </table>
                        </div>
                      </div>
        
    
    
    











          
            <?php
            include "footer.php";
        ?>