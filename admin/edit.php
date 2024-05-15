<?php
include "header.php";
?>
<?php
$Sid=$_GET["Sid"];
include "dbconnect.php";
$sql="select * from addservice where Sid=$Sid";
echo $sql;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<section>
 <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="color:blueviolet;">ADD SERVICE</span>

                <form action="#" method="POST" class="addservice">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SERVICE NAME HERE" name="sname" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SERVICE COST HERE" name="scost" required="">
                                </div>
                            </div>
                           <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="UPDATE" name="submit">

                                </div>
                            </div>

                            
                        </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php
if(isset($_POST["submit"]))
{
 $sname=$_POST["sname"];
 $scost=$_POST["scost"];
 
 
 
 $sql="UPDATE addservice SET sname='$sname',scost='$scost')";
 $result=mysqli_query($con,$sql);
  
     if($result)
     {
         echo "<script>alert('Successfully updated')</script>";
     }

    
 }

 ?>s
 <?php
include "footer.php";
?>