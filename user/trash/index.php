<?php 
 include "../checkUserAuthentication.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trash - Debtor Book</title>
    <?php 
     include "../../externalCss.php";     
     include "../../api/db.php";
     include "../../api/User.php";
     include "../../api/Dashboard.php";
     $userId = $_SESSION["user_auth_id"];
     $user = new User($conn);     
     $userNameArr =$user->getUserNameArray($userId);
    ?>
</head>
<body>    
    <!-- sidebar -->
      <?php include("../sideBar.php"); ?>  
    <!-- Page content -->
    <div class="sidebarContent">
          <!-- navbar -->
             <?php include("../navBar.php"); ?>  
          <!-- navbar end-->
            
            <!-- main content-->
            <div class="main m-3">
                  <h1 class="gray-text"> <i class="fa fa-trash"></i> Trash</h1>                  
                  <hr/>

                  <ul clas="list-group">
                      <li class="list-group-item"> <a href="./debtorsTrash.php" class="nav-link"> <i class="fa fa-users"></i> Debtor's Trash</a>  </li>
                      <li class="list-group-item"> <a href="./transactionTrash.php" class="nav-link"> <i class="fa fa-list-alt"></i> Transaction's Trash</a>  </li>
                      <li class="list-group-item"> <a href="./reminderTrash.php" class="nav-link"> <i class="fa fa-bell"></i> Reminder's Trash</a>  </li>
                  </ul>
            </div><!--main--->
        </div>
        <!-- Page content end-->
<?php 
     include "../../externalJs.php";
?>
<script>
    // clock script
    const clock = ()=>{
        let date = new Date();
       $("#clock").html(`${date.toLocaleTimeString()}`)
    }
    setInterval(clock, 1000);
</script>
</body>
</html>