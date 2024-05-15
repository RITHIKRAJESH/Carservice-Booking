<?php
session_start();
$book_id=$_GET["book_id"];
$total=$_GET["total"];
include "../dbconnect.php";
//$sql="select booking.scost+addcost as total from booking where booking.userid=userid";
        //$result=mysqli_query($con,$sql);
        //if($row=mysqli_fetch_array($result))
          // $book_id=$row["book_id"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
  
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="#">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" input mode="numeric" pattern="[0-9\s{13,19}" autocomplete="cc-number" minlength="16" maxlength="16" class="form-control" placeholder="Valid Card Number" required=""/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control"   placeholder="MM / YY" required="" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" maxlength="3" minlength="3" placeholder="CVC" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" required="" />
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>PAYMENT AMOUNT</label>
                                    <input type="text" name="total" class="form-control" placeholder="Card Owner Names"  value="<?php echo $total; ?>" />
                                    <input type="hidden" name="book_id" class="form-control" placeholder="Card Owner Names"  value="<?php echo $book_id; ?>" />
                                    
                                </div>
                            </div>
                        </div>

                   
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" name="submit1" class="btn btn-warning btn-lg btn-block">Process payment</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="#" method="POST">
                 <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" name="submit2" class="btn btn-warning btn-lg btn-block">COD</button>
                        </div>
                    </div>
                </div>
                 </form>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>

 
    
<?php
if(isset($_POST["submit1"]))
{
$book_id=$_POST["book_id"];
$total=$_POST["total"];
$userid=$_SESSION["userid"];
include "../dbconnect.php";
$sql="UPDATE booking set Payment='Paid' where book_id=$book_id";
    echo $sql;
    $result=mysqli_query($con,$sql);
 if($result)
    echo "<script>alert('Payment Successfull Thank you.')</script>";
echo '<meta http-equiv="refresh" content="0;../index.php">';

}

if(isset($_POST["submit2"]))
{
    include "../dbconnect.php";
    $sql="UPDATE booking set Payment='COD' where book_id=$book_id";
        echo $sql;
        $result=mysqli_query($con,$sql);
echo "<script>alert('Make your Payment ready during delivery.')</script>";
echo '<meta http-equiv="refresh" content="0;../index.php">';

}

?>

