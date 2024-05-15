<?php
include "header.php";
 ?>

<section>
 <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="color:blueviolet;">ADD BRAND</span>

                <form action="#" method="POST" class="addbrand">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="BRAND NAME HERE" name="bname" required="">
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
    $bname=$_POST["bname"];
   
 
 
    include "dbconnect.php";
    $sql="select * from addbrand where bname='$bname'";
 $result=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($result))
    echo "<script>alert('brand exist')</script>";
    else
    {
    $sql="insert into addbrand(bname) values('$bname')";
    $result=mysqli_query($con,$sql);
  
     if($result)
     {
         echo "<script>alert('Successfully inserted')</script>";
     }
}
    
 }
?>
 <?php
include "footer.php";
 ?>