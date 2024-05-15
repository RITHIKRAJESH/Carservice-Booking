
<?php
//include "header.php";
 ?>
<?php
 $book_id=$_GET["book_id"];
   
?>
<form method="POST" action="#">
<div class="form-group">
  <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
  <input type="text" class="form-control" placeholder="Additional cost" name="addcost">
  <input type=submit name=submit value="Proceed to Payment">
</div>
</form>



       
                               
      <?php
    if(isset($_POST["submit"]))
   {
    $addcost=$_POST["addcost"];
    $book_id=$_POST["book_id"];
   include "dbconnect.php";
    $sql ="UPDATE booking SET status='Ready',addcost='$addcost'  WHERE book_id=$book_id";
    echo $sql;
       $result = mysqli_query($con,$sql);
       if($result)
       {
         echo "<script>alert('Ready to deliver')</script>";
          header("location:payment.php?book_id=$book_id");
            
       }
        //header("location:booking.php");

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