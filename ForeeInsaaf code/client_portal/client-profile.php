<?php
   session_start();
   include('../db/connection.php');
   if(isset($_SESSION['user'])){
      $user_email = $_SESSION['user']['user_id'];
   }else{
      $user_email = $_GET['id'];
   }

        $select_query = "SELECT * FROM `user` WHERE `user_id` ='$user_email'";
        $result = mysqli_query($connection,$select_query);
         $rows =mysqli_fetch_array($result);
         $query ="SELECT * FROM `user_experience`";
         $res =mysqli_query($connection,$query);
         $row =mysqli_fetch_array($res);
   
         $query_1 ="SELECT * FROM `education`";
         $re =mysqli_query($connection,$query_1);
         $ro =mysqli_fetch_array($re);
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Foree Insaaf</title>
      <?php include('inc/links.php');?>
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
   <body>
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
                              <li class="breadcrumb-item" aria-current="page">Client Profile</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="profile profile-freelance">
                        <div class="profile-box">
                           <div class="provider-widget">
                              <div class="pro-info-left">
                                 <div class="provider-img "><img src="../uploads/<?php echo $rows['image']; ?>" style="width:100%;height:100%;border-radius:100%;" class="img-fluid" alt="User"></div>
                                 <div class="profile-info" style='display:flex;flex-direction:column;align-items:center;justify-content:center'>
                                    <h2 class="profile-title"><?php echo $rows['name']; ?></h2>
                                    <p class="profile-position" style="margin:0px;"><?php if($rows['category']==""){ echo "Client"; }else{ echo $rows['category'];} ?></p>
                                 
                                    
                                 </div>
                              </div>
                              <?php
                              if(isset($_SESSION['user'])){
                                 ?>
                                    <div class="pro-info-right profile-inf">
                                       <a class="btn profile-edit-btn" href="client-profile-settings.php">Edit Profile</a><br> 
                                    </div>
                                 <?php
                                 
                              }else{
                                 
                              }
                              
                              ?>
                            
                           </div>
                        </div>
               
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8 col-md-12">
                     <div class="pro-view">
                        <nav class="provider-tabs mb-4">
                           <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                              <li class="nav-item">
                                 <a class="nav-link" href="#overview">
                                    <img src="assets/img/icon/tab-icon-01.png" height="25" alt="User Image">
                                    <p class="bg-red">Overview</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="manage-cases.php">
                                    <img src="assets/img/icon/tab-icon-02.png" height="25" alt="User Image">
                                    <p class="bg-blue">Projects</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#experience">
                                    <img src="assets/img/icon/tab-icon-03.png" height="25" alt="User Image">
                                    <p class="bg-violet">Experience</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#education">
                                    <img src="assets/img/icon/tab-icon-04.png" height="25" alt="User Image">
                                    <p class="bg-yellow">Education</p>
                                 </a>
                              </li>
                            
                              <li class="nav-item">
                                 <a class="nav-link" href="edi-profile-images.php">
                                 <i class='fa fa-camera' style="font-size:25px;color:#159C5B;"></i>
                                    <p class="bg-green">Prifile Image</p>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                        <div class="pro-post widget-box" id="overview">
                           <h3 class="pro-title">Overview</h3>
                           <div class="pro-content">
<?php echo $rows['description']; ?>
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box" id="experience">
                           <h3 class="pro-title">Experience</h3>
                           <div class="pro-content">
                              <table id="example" border="2" class="table table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>S.No</th>
                                       <th>Title</th>
                                       <th>Company</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $count =0;
                                          if($row){
                                           while ($row=mysqli_fetch_array($res)) {
                                               ?>
                                    <tr>
                                       <td><?php echo ++$count?></td>
                                       <td><?php echo $row['title'];?></td>
                                       <td><?php echo $row['company']?></td>
                                       <td><?php echo $row['start_date']?></td>
                                       <td><?php echo $row['end_date']?></td>
                                    </tr>
                                    <?php
                                       }
                                       }else{
                                       ?> 
                                    <tr>
                                       <td>No record Found</td>
                                    </tr>
                                    <?php
                                       }
                                       
                                        ?>    
                                 </tbody>
                              </table>
                           
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box" id="education">
                           <h3 class="pro-title">Educational Details</h3>
                           <div class="pro-content">
                              <table id="example" border="2" class="table table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>S.No</th>
                                       <th>Degree</th>
                                       <th>University</th>
                                       <th>Start Year</th>
                                       <th>End Year</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $count =0;
                                          if($ro){
                                           while ($ro=mysqli_fetch_array($re)) {
                                               ?>
                                    <tr>
                                       <td><?php echo ++$count?></td>
                                       <td><?php echo $ro['degree'];?></td>
                                       <td><?php echo $ro['university']?></td>
                                       <td><?php echo $ro['start_date']?></td>
                                       <td><?php echo $ro['end_date']?></td>
                                    </tr>
                                    <?php
                                       }
                                       }else{
                                       ?> 
                                    <tr>
                                       <td>No record Found</td>
                                    </tr>
                                    <?php
                                       }
                                       
                                        ?>    
                                 </tbody>
                              </table>
                              <!-- 
                                 <div class="widget-list mb-0">
                                 <ul class="clearfix">
                                 <li>
                                 <h4>Bachelor of Science in Game Programming & Development</h4>
                                 <h5>Hampshire University January 12, 2015 - January 19, 2019</h5>
                                 <p>Graphic Designing artworks through making plans and utilizing the helpful analysis of companions, educators, and bosses to improve those plans. Careful discipline brings about promising results, and the capacity to acknowledge and gain from analysis from peers and even the purchaser everywhere is pivotal for accomplishment in this field.</p>
                                 </li>
                                 <li>
                                 <h4>Master in Gaming STudi Design</h4>
                                 <h5>Techline July 9, 2018 - March 18, 2021</h5>
                                 <p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
                                 </li>
                                 </ul>
                                 </div> -->
                           </div>
                        </div>
                      
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">
             
          
                     <div class="pro-post widget-box about-widget">
                        <h4 class="pro-title mb-0">ABOUT ME</h4>
                        <ul class="latest-posts pro-content">
                           <li>
                              <p>Email</p>
                              <h6><?php echo $rows['email']; ?></h6>
                           </li>
                           <li>
                              <p>Gender</p>
                              <h6><?php echo $rows['gender']; ?></h6>
                           </li>
                           <li>
                              <p>Location</p>
                              <h6><?php echo $rows['country'].'/'.$rows['city']; ?></h6>
                           </li>
                        </ul>
                     </div>
              
                     <div class="pro-post widget-box post-widget">
                        <h3 class="pro-title">Profile Link</h3>
                        <div class="pro-content">
                           <div class="form-group profile-group mb-0">
                              <div class="input-group">
                                 <input type="text" class="form-control" value="https://www.Foree Insaaf.com/developer/daren/12454687">
                                 <div class="input-group-append">
                                    <button class="btn btn-success sub-btn" type="submit"><i class="fa fa-clone"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php include("../lawyer_portal/inc/footer.php") ?>
      </div>
      <?php include("inc/footer_links.php"); ?>
   </body>
</html>