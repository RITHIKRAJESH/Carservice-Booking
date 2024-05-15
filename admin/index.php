<?php
   include "header.php"
?>

           

     
   <?php
               include "dbconnect.php";
                // Number of messages
                $sql = "SELECT  count(*) FROM contact";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_con = $row['count(*)'];


                  // Number of pending bookings
                $sql = "SELECT  count(*) FROM booking where `status`='confirmed'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_booking = $row['count(*)'];

                  // Number of regusers
                  $sql = "SELECT  count(*) FROM user where `role`='user'";
                  $result = mysqli_query($con,$sql);
                  $row = mysqli_fetch_assoc($result);
                  $num_of_users = $row['count(*)'];

               // Number of brands
               $sql = "SELECT  count(*) FROM addbrand";
               $result = mysqli_query($con,$sql);
               $row = mysqli_fetch_assoc($result);
               $num_of_brand = $row['count(*)'];

                // Number of vehicles
                $sql = "SELECT  count(*) FROM addservice";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_of_vehicle = $row['count(*)'];


                 // Number of reviews
                 $sql = "SELECT  count(*) FROM contact";
                 $result = mysqli_query($con,$sql);
                 $row = mysqli_fetch_assoc($result);
                 $num_of_review = $row['count(*)'];


            ?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              
              <div class="mr-5"><?php echo $num_of_users ?> Users</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="user.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>
              </div>
              <div class="mr-5"><?php echo $num_of_booking ?> Bookings</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="booking.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"><?php echo $num_of_brand ?> Brands</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="managebrands.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-automobile"></i>
              </div>
              <div class="mr-5"><?php echo $num_of_vehicle ?> Services</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="manageservice.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php echo $num_of_review ?>  Reviews</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="contacts.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

      </div>
      </div>

            <?php
    include "footer.php"
?>