<?php
   session_start();
    include('../db/connection.php');
     $select_query = "SELECT * FROM `user` WHERE `user_id`='".$_SESSION['user']['user_id']."'";
     $result = mysqli_query($connection,$select_query);
     if($result){

     }else{
      echo mysqli_error($connection);
     }
      $rows=mysqli_fetch_assoc($result);
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
      <?php include('inc/links.php'); ?>
      <style>
                .dropdown-toggle::after {
                    color:#fff;
                }
                .name{
                    color: #fff;
                }
                .sticky .name, .dropdown-toggle::after{
                    color:#000;
                }
                @media (min-width: 600px) {
                  .img{
                      margin-left:20px;
                    width:50px;
                    height:50;
                    border-radius:3px;
                }
                .ok{
                    margin-left:60px;
                    margin-top:-40px;
                }
                }
                 @media (min-width: 320px) and (max-width: 320px) {
                  .img{
                    width:50px;
                    height:50;
                    border-radius:3px;
                }
                .ok{
                    margin-left:60px;
                    margin-top:-40px;
                }
                }
               
            </style>
   </head>
   <body class="dashboard-page">
      <div class="main-wrapper">
         <?php include('inc/header.php'); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard.php"><img src="../assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Settings</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content content-page" style="transform: none; min-height: 210.7px;">
   <div class="container-fluid" style="transform: none;">
      <div class="row" style="transform: none;">
         <div class="col-xl-3 col-md-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
             <?php include("inc/sidebar.php") ?>
               <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                  <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                     <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 381px; height: 4084px;"></div>
                  </div>
                  <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                     <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-md-8">
            <div class="pro-pos">
               <nav class="user-tabs mb-4">
                  <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                     <li class="nav-item">
                        <a class="nav-link active" href="client-profile-settings.php">Basic Settings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Change Password</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="edi-profile-images.php">Change Profile Image</a>
                     </li>
                  </ul>
               </nav>
               <div class="setting-content">
                  <form action="project_process.php" method="post" enctype="multipart/form-data">
                     <div class="card">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Profile Basics </h3>
                        </div>
                        <div class="pro-body">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label>Name</label>
                                 <input type="text" name="name" value="<?php echo $rows['name']; ?>" class="form-control">
                              </div>
                              <div class="form-group col-md-6">
                                 <label>Email Address</label>
                                 <input type="email" name="email" disabled value="<?php echo $rows['email']; ?>" class="form-control">
                              </div>
                           
                              <div class="form-group col-md-6">
                                 <label>Contact Number</label>
                                 <input type="text" name="number" value="<?php if(isset($rows['number'])){ echo $rows['number']; }?>" class="form-control">
                              </div>
                              <div class="form-group col-md-6">
                                 <label>Gender</label>
                                 <select name="gender" class="form-control select">
                                    <option value="male" <?php if($rows['gender']=="male"){ echo "selected";} ?> >Male</option>
                                    <option value="female" <?php if($rows['gender']=="female"){ echo "selected";} ?>>Female</option>
                                 </select>
                              </div>
                       
                           </div>
                        
                        </div> 
                     </div> 
                     <div class="card">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Location</h3>
                        </div>
                        <div class="pro-body">
                           <div class="row">
                          
                              <div class="form-group col-md-6">
                                 <label>Country</label>
                                 <input type="text" name="country" value="<?php echo $rows['country']; ?>" class="form-control">
                              </div>
                           
                               <div class="form-group col-md-6">
                                 <label>City</label>
                                 <input type="text" name="city" value="<?php echo $rows['city']; ?>" class="form-control">
                              </div>

                              <div class="form-group col-md-12">
                                 <label>City</label>
                                 <input type="text" name="address" value="<?php echo $rows['office_address']; ?>" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Overview</h3>
                        </div>
                        <div class="pro-body">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <textarea name="description" class="form-control" rows="5"><?php if(isset($rows['description'])==""){ echo "";}else{ echo $rows['description'];};
                                  ?></textarea>
                              </div>
                                <div class="card text-end">
                        <div class="pro-body">
                 
                           <input type="submit" name="update_data" class="btn btn-primary click-btn btn-plan" value="Update">
                        </div>
                     </div>
                   
                     </form>
                
                     </div>
                     <div class="card">
                     <form action="project_process.php" method="POST">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Experience</h3>
                        
                        </div>
                        <div class="pro-body">
                           <div class="exp-info">
                              <div class="row exp-cont">
                                 <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                     <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['user_id'];} ?>">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Company name</label>
                                    <input type="text" name="company" class="form-control">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Start date</label>
                                    <input type="date" name="start_date" class="form-control datetimepicker" placeholder="Select Date">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>End Date</label>
                                    <input type="date" name="end_date" class="form-control datetimepicker" placeholder="Select Date">
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label class="custom_check">
                                    <input type="checkbox" name="rem_password" value="rem_password">
                                    <span class="checkmark"></span> I'm currently working here
                                    </label>
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label>Summary</label>
                                    <textarea name="summary" class="form-control" rows="5"></textarea>
                                 </div>
                              </div>
                                <div class="card text-end">
                        <div class="pro-body">
                         
                           <input type="submit" name="add_skill" class="btn btn-primary click-btn btn-plan" value="Add Skill">
                        </div>
                     </div>
                           </div>
                        </div>
                     </form>
                     </div>
                     <div class="card">
                        <form action="project_process.php" method="POST">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Educational Details</h3>
                          
                        </div>
                        <div class="pro-body">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label>Degree Title</label>
                                 <input type="text" name="degree" class="form-control">
                                  <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['user_id'];} ?>">
                              </div>
                              <div class="form-group col-md-6">
                                 <label>University/College</label>
                                 <select name="university" class="form-control select">
                                    <option value="0">Select University/College </option>
                                    <option value="Sindh">University of sindh</option>
                                    <option value="punjab">University</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label>Start year</label>
                                 <input type="date" name="start_year" class="form-control datetimepicker">
                              </div>
                              <div class="form-group col-md-6">
                                 <label>End year</label>
                                 <input type="date" name="end_year" class="form-control datetimepicker">
                              </div>
                              <div class="form-group col-md-12">
                                 <label>Summary</label>
                                 <textarea name="summary_desc" class="form-control" rows="5"></textarea>
                              </div>

                           </div>
                        <div class="card text-end">
                        <div class="pro-body">
                      
                           <input type="submit" name="add_detail" class="btn btn-primary click-btn btn-plan" value="Add Details">
                        </div>
                     </div>
                        </div>
                       
                     </div>
             
                    
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    
      </div>
      </div>
      </form>
      </div>
      <?php include("../lawyer_portal/inc/footer.php"); ?>
      </div>
      <?php include('inc/footer_links.php'); ?>
   </body>
</html>