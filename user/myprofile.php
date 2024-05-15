<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
  include "dbconnect.php";
  
  $sql="SELECT * from user where userid='$userid'";
  $result=mysqli_query($con,$sql);
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
                                <h5 class="card-title m-b-0">MY PROFILE</h5>
                            </div>
                            <table class="table">
                                  
        <?php
        
        while($rows=mysqli_fetch_assoc($result)){
            
        ?>
            <tr>
               
                <td>name   : <?php echo $rows['fullname'] ?></td></tr>
               <tr><td>emailid:<?php echo $rows['email'] ?></td></tr>
               <tr><td>phone  :<?php echo $rows['phone'] ?></td></tr>
               <tr><td>address:<?php echo $rows['address'] ?></td></tr>
             
         <tr>   </td><td><a href='editmypro.php?userid=<?php echo $rows["userid"];?>'><button type="button" class="btn btn-success btn-sm">Edit</button></a></td>
         <td><a href='changepassword.php?userid=<?php echo $rows["userid"];?>'><button type="button" class="btn btn-success btn-sm">Change password</button></a></td></tr>            
            
        <?php
        }
        ?>
   </tbody>
</table>
</div>
</body>
</html>
        
        </div>
    </div>
   
<?php
include "footer.php";
?>