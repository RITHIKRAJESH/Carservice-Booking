<?php
                    
                    $userid=$_GET["userid"];
                    include "../dbconnect.php";
                    $sql="delete from login where userid=$userid";
                    $result=mysqli_query($con,$sql);
                    $sql="delete from user where userid=$userid";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                      echo "<script>alert('Deleted the user with id=$userid')</script>";
                       echo '<meta http-equiv="refresh" content="0;user.php">';
                    }

  ?>