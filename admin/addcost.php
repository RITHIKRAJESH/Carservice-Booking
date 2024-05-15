<?php
include "header.php";
 ?>

<section>
 <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                <span class="subheading" style="color:blueviolet;">Additional Cost</span>

                <form action="#" method="POST" class="addbrand">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Additional cost" name="addcost" required="">
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
    $addcost=$_POST["addcost"];
   
 
 
    include "dbconnect.php";
   
    $sql="insert into booking(addcost) values('$addcost')";
    $result=mysqli_query($con,$sql);
  
     if($result)
     {
         echo "<script>alert('Successfully inserted')</script>";
     }
}
    
 
?>
 <?php
include "footer.php";
 ?>