<?php
 $book_id=$_GET["book_id"];
   include "dbconnect.php";
   $sql="select * from login,booking where booking.userid=login.userid and booking.book_id=$book_id ";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result);
   $email=$row["email"];
  $sql ="UPDATE booking SET status='Rejected' WHERE book_id=$book_id";
    echo $sql;
       $result = mysqli_query($con,$sql);
       if($result)
       {
       	 echo "<script>alert('Rejeted the booking')</script>";
           header("location:emailer1.php?email=$email"); 
       }
    
   
       ?>
       