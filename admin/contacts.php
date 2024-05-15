<?php
session_start();
    include "header.php";
    include "dbconnect.php";
    $sql="select * from contact";
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con);
?>
<html>
 <body>
 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">FEEDBACKS</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NO</th>
                                      
                                      <th scope="col">Name</th>
                                       
                                      
                                      <th scope="col">Email</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Message</th>
                                       
                                      
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
              
               <td><?php echo $rows['name'] ?></td>
               <td><?php echo $rows['email']?></td>
               <td><?php echo $rows['subject'] ?></td>
               <td><?php echo $rows['message'] ?></td>
             </tr>
            
        <?php
        }
        ?>
   </tbody>
</table>
</div>
</body>
</html>
  <?php
            include "footer.php";
        ?>