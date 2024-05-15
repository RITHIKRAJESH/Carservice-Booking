<?php
session_start();
$userid=$_SESSION["userid"];
$book_id=$_GET["book_id"];
   include "header.php";
   
 include "dbconnect.php";
 $sql="select * from user where userid=$userid";
 $result=mysqli_query($con,$sql);
 $name="";
 $address="";
 while($row=mysqli_fetch_array($result))
 {
     $name=$row["fullname"];
     $address=$row["address"];

 }
 $sql="select sname,booking.scost,booking.*,booking.scost+addcost as total from booking,addservice where service=Sid and booking.userid=$userid and status!='Rejected'and Payment!='Paid' and status!='note'";
  //echo $sql;

   $result=mysqli_query($con,$sql);
    echo mysqli_error($con);

?>
  <html>
<head>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
<title>div print</title>
</head>


<body>


<div id="div_print">  

<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">TORQUE Car Service</b></h3>
                                            <p class="text-muted m-l-5">palarivattom,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/>NH47,
                                                <br/>Kochi - 364002</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                              <?php echo $name;?><br>
                                              <?php echo $address;?>
                                            
                                            <p class="m-t-30"><b>Invoice Date :</b> <?php
 
 print date('D, d M Y');
 
?></p>
                                            
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class>id</th>
                                                    <th>Service</th>
                                                     <th class>Service Cost</th>
                                                     <th class>Additional</th>
                                                     <th class>Total</th>
                                                     <th class>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
        $i=0;
        $total=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
            $total=$rows['total'];
        ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['sname'] ?></td>
               <td><?php echo $rows['scost'] ?></td>
               <td> <?php echo $rows['addcost'] ?> </td>
               <td> <?php echo $rows['total'] ?> </td>
               <td> <?php echo $rows['Payment'] ?> </td>
              </tr>
            
          
                                            


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <hr>
                                        <h3><b>Total :<?php echo $rows['total'] ?></b></h3>
                                    </div>
      <?php
        }
        ?> 
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button><a href="payment/index.php?total=<?php echo $total;?>&book_id=<?php echo $book_id;?>">pay</a></button>
                                        <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

    </div>


</body>


</html>
















            
           <?php
    include "footer.php"
?>