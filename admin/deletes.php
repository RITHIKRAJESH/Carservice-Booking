<?php
                    
                    $Sid=$_GET["Sid"];
                    

                    include "dbconnect.php";
                    $sql="delete from addservice where Sid=$Sid";
                    
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                      
                       echo '<meta http-equiv="refresh" content="0; manageservice.php">';
                    }

  ?>