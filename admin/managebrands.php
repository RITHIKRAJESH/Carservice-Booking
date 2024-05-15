<?php
    include "header.php";
?>
<?php
    include "dbconnect.php";
    $sql="select * from addbrand";
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
                                <h5 class="card-title m-b-0">BRANDS</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NO</th>
                                      
                                      <th scope="col">BrandName</th>
                                       
                                      <th scope="col">Action</th>
                                      
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
               
               <td><?php echo $rows['bname'] ?></td>
               
               </td><td><a href='delete.php?b_id=<?php echo $rows["b_id"];?>'><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td></tr>            
            
        <?php
        }
        ?>
        
    
      
                                  </tbody>
                            </table>
                        </div>
                      </div>
        
    
    
    

</body>
</html>
</body>
</html>
  <?php
            include "footer.php";
        ?>