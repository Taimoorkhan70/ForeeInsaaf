<div class="settings-widget">
   <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
      <a href="lawyer-profile.php"><img alt="profile image" src="../uploads/<?php echo $rows['image']; ?>" class="avatar-lg rounded-circle"></a>
      <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
         <p class="mb-2">Welcome,</p>
         <a href="lawyer-profile.php">
            <h3 class="mb-0"><?php echo $rows['name']; ?></h3>
         </a>
         <p class="mb-0"><?php echo $rows['email']; ?></p>
      </div>
   </div>
   <div class="settings-menu">
      <ul>
         <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php echo $home; ?>">
            <i class="material-icons">verified_user</i> Dashboard
            </a>
         </li>
         <li class="nav-item">
            <a href="lawyer-proposels.php" class="nav-link <?php echo $projects; ?>">
            <i class="material-icons">check</i>Proposels
            </a>
         </li>

         <li class="nav-item">
            <a href="../logout.php" class="nav-link">
            <i class="material-icons">power_settings_new</i> Logout
            </a>
         </li>
      </ul>
   </div>
</div>