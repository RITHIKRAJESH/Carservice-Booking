<?php
                    
                    $b_id=$_GET["b_id"];
                    

                    include "dbconnect.php";
                    $sql="delete from addbrand where b_id=$b_id";
                    
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                      
                       echo '<meta http-equiv="refresh" content="0; managebrands.php">';
                    }

  ?>