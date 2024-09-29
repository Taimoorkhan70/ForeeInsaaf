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
                     <a class="nav-link" href="client-profile-settings.php">Basic Settings</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="change-password.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="edi-profile-images.php">Change Profile Image</a>
                  </li>
               </ul>
               </nav>
               <div class="setting-content">
                  <form action="project_process.php" method="post" enctype="multipart/form-data">
                     <div class="card">
                        <div class="pro-head">
                           <h3 class="pro-title without-border mb-0">Update Profile Image</h3>
                        </div>
                        <div class="pro-body">
                           <div class="row">
                            <?php if(isset($_GET['status']) && $_GET['status']=='error'){
                                ?>
<div class="col-md-12">
                                    <div class="alert alert-danger">
                                                only (JPG,JPEG and PNG) allowed!
                                    </div>
                                </div>
                                <?php
                            } ?>
                                
                              <div class="form-group col-md-3">
                          
                                 <img src="../uploads/<?php echo $rows['image']; ?>" width="150px" height="150px" style="border-radius:50%;border:3px solid #FE4A23;" alt="">
                              </div>
                           
                               <div class="form-group col-md-9">
                                 <label>Upload New Profile Image</label>
                                 <input type="file" name="image" class="form-control">
                                 <div class="row">
                                 <div class="form-group col-md-12 mt-3 text-end">
                          
                                    <input type="submit" name="update_profile_image" class="btn btn-primary click-btn btn-plan" value="Update">

                                </div>
                                 </div>
                              </div>
                 
                              
                           </div>
                        </div>
                     </div>
                
                   
                     </form>
                
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