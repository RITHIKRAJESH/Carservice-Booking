
<?php
include "header.php";
$Sid=$_GET["Sid"];
include "dbconnect.php";
$sql="select * from addservice where Sid=$Sid";
//echo $sql;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<section>
 <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-15 col-lg-9 half p-6 py-8 pl-lg-8 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="color:blueviolet;">UPDATE</span>

                <form action="#" method="POST" class="addservice" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-15">
                        <div class="col-md-9">
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder="Logo HERE" value='<?php echo $row["logo"]?>' name="logo" required="">
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SERVICE NAME HERE" value='<?php echo $row["sname"]?>' name="sname" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="SERVICE COST HERE" value='<?php echo $row["scost"]?>' name="scost" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Description HERE" value='<?php echo $row["description"]?>' name="description" required=""></textarea>
                                </div>
                            </div>

                           <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Update" name="Submit">

                                </div>
                            </div>

                            
                        </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?php
if(isset($_POST["Submit"]))
{
 $sname=$_POST["sname"];
 $scost=$_POST["scost"];
 $description=$_POST["description"];
 $target_dir = "../uploads/";
//to get the name of file to store to database
$filename=basename($_FILES["logo"]["name"]);
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
    echo "The file ". $filename . " has been uploaded.";
 include "dbconnect.php";
 
    $sql ="UPDATE addservice SET logo='$filename',sname='$sname', scost='$scost',description='$description'  WHERE Sid=$Sid";
   // echo $sql;
       $result = mysqli_query($con,$sql);
       if($result)
       {
       	 echo "<script>alert('Successfully updated')</script>";
            
       }
    
    }
    }
     ?>
                        <?php
                        include "footer.php";
                         ?>
