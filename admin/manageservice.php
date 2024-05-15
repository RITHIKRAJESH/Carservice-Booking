<?php
    include "header.php";
?>
<?php
    include "dbconnect.php";
    $sql="select * from addservice";
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
                                <h5 class="card-title m-b-0">SERVICES</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NO</th>

                                      <th scope="col">Logo</th>
                                      <th scope="col">ServiceName</th>
                                       <th scope="col">ServiCost</th>
                                       <th scope="col">Description</th>
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
               <td><img src="../uploads/<?php echo $rows['logo'] ?>"></td>
               <td><?php echo $rows['sname'] ?></td>
               <td><?php echo $rows['scost'] ?></td>
               <td><?php echo $rows['description'] ?></td>
            </td><td><a href='update.php?Sid=<?php echo $rows["Sid"];?>'><button type="button" class="btn btn-cyan btn-sm">Edit</button><a href='deletes.php?Sid=<?php echo $rows["Sid"];?>'><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td></tr>            
            
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