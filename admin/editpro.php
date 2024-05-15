<?php
session_start();
$userid=$_SESSION["userid"];
include "header.php";
  include "dbconnect.php";
  
  $sql="SELECT * from user where userid='$userid'";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
   
      ?>

     <!-- Contact Form Begin -->
     <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_form_title">
                        <h2>Edit Profile</h2>
                    </div>
                </div>
            </div>
            <form action="#" method="POST">
                <div class="row">
                
                    <div class="col-lg-12 col-md-12">
                        <input type="text" value="<?php echo $row['fullname']; ?>" required="" name="fullname">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="email"  readonly value="<?php echo $row['email']; ?>" placeholder="Your email" required="" name="email">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text"  value="<?php echo $row['phone']; ?>" placeholder="Your phone" required="" name="phone">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <textarea placeholder="Your address"  required="" name="address"><?php echo $row['address']; ?></textarea>
                    </div> 
                    <div class="col-lg-12 col-md-12">
                        <input type="submit" name="submit" value="Update" class="btn btn-cyan btn-sm">
                    </div>
                    
                </div>
            </form>
        <?php
        }
        ?>
        </div>
    </div>
    <?php
if(isset($_POST["submit"]))
{
 $fullname=$_POST["fullname"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];

 $userid=$_SESSION["userid"];
 include "dbconnect.php";
  $sql="update user set fullname='$fullname', email='$email', address='$address', phone='$phone' where userid='$userid'";
     $result=mysqli_query($con,$sql);
     
     if($result)
     {
         echo "<script>alert('Successfully updated')</script>";
         echo '<meta http-equiv="refresh" content="0;profile.php">';
     }
}



 ?>
<?php
include "footer.php";
?>