<?php
 $book_id=$_GET["book_id"];
   include "dbconnect.php";
   $sql="select * from login,booking where booking.userid=login.userid and booking.book_id=$book_id ";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result);
   $email=$row["email"];
  $sql ="UPDATE booking SET status='deleted' WHERE book_id=$book_id";
    echo $sql;
       $result = mysqli_query($con,$sql);
       if($result)
       {
       	 echo "<script>alert('deleted the booking')</script>";
           header("location:index.php"); 
       }
    
   
       ?>
       