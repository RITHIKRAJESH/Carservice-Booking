<?php
 $book_id=$_GET["book_id"];
   include "dbconnect.php";
  $sql ="UPDATE booking SET status='Cancelled' WHERE book_id=$book_id";
    echo $sql;
       $result = mysqli_query($con,$sql);
       if($result)
       {
       	 echo "<script>alert('Cancelled the booking')</script>";
            
       }
    
    header("location:mybooking.php");
       ?>
       