 <?php
include "header.php";
 ?>
 <section>
 <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="color:blueviolet;">ADD SERVICE</span>

                <form action="#" method="POST" class="addservice" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder="SERVICE NAME HERE" name="logo" required="">
                                </div>
                            </div>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Description Here" name="description" required=""></textarea>
                                </div>
                            </div>
                           <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="ADD" name="add">

                                </div>
                            </div>

                            
                        </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php
if(isset($_POST["add"]))
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
 $sql="select * from addservice where sname='$sname'";
 $result=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($result))
    echo "<script>alert('service exist')</script>";
    else
 {
 $sql="insert into addservice(logo,sname,scost,description) values('$filename','$sname','$scost','$description')";
 $result=mysqli_query($con,$sql);
  
     if($result)
     {
         echo "<script>alert('Successfully inserted')</script>";
     }

  }  
 }
}

 ?>




                        <?php
                        include "footer.php";
                         ?>