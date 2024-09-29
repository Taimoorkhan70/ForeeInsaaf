<?php
   session_start();
    include('../db/connection.php');
   

     $query = "SELECT * FROM `project` WHERE `user_id`='".$_SESSION['user']['user_id']."'";
     $run = mysqli_query($connection,$query);
      
     
      // $post['project_id'];
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaf</title>
<?php include("inc/links.php"); ?>
   </head>
   <body class="dashboard-page">
      <div class="main-wrapper">
      <?php  $projects="active"; include("inc/header.php"); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="dashboard.php"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Projects</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-md-4 theiaStickySidebar">
                  <?php include("inc/sidebar.php"); ?>
                  </div>
                  <div class="col-xl-9 col-md-8">
                     <div class="page-title">
                        <div class="row">
                           <div class="col-md-6">
                              <h3>Manage Projects</h3>
                              <h2 class="text-danger"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></h2>
                           </div>
                           <div class="col-md-6 text-end">
                              <a href="post-case.php" class="btn btn-primary back-btn mb-4">Post a Case</a>
                           </div>
                        </div>
                     </div>
                     <nav class="user-tabs project-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                           <li class="nav-item">
                              <a class="nav-link active" href="manage-cases.php">All Cases</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="#">Pending Projects</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" href="ongoing-cases.php">Ongoing Cases</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="completed-cases.php">Completed Cases</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="cancelled-cases.php">Cancelled Cases</a>
                           </li>
                        </ul>
                     </nav>
                     <?php
             if(mysqli_num_rows($run)>0){
                while($post=mysqli_fetch_assoc($run)){
                    ?>
                    <div class="my-projects-list">
                        <div class="row">
                        <div class="col-lg-10 flex-wrap">
                            <div class="projects-card flex-fill">
                                <div class="card-body">
                                    <div class="projects-details align-items-center">
                                    <div class="project-info">
                                        <span><?php echo $rows['email']; ?></span>
                                        <h2><?php echo $post['project_name']; ?></h2>
                                        <div class="customer-info">
                                            <ul class="list-details">
                                                <li>
                                                <div class="slot">
                                                    <p>Case type</p>
                                                    <h5><?php echo $post['case_type']; ?></h5>
                                                </div>
                                                </li>
                                                <li>
                                                <div class="slot">
                                                    <p>Location</p>
                                                    <h5><img src="assets/img/en.png" height="13" alt="Lang"> <?php echo $post['country'] ?></h5>
                                                </div>
                                                </li>
                                                <li>
                                                <div class="slot">
                                                    <p>Date</p>
                                                    <h5><?php echo $post['created_at']; ?></h5>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="project-hire-info">
                                        <div class="content-divider"></div>
                                        <div class="projects-amount">
                                            <!-- <h3>$500.00</h3> -->
                                            <!-- <h5>in 12 Days</h5> -->
                                        </div>
                                        <div class="content-divider"></div>
                                        <div class="projects-action text-center">
                                            <a href="case-proposels.php?id=<?php echo $post['project_id']; ?>" class="projects-btn">View Proposals </a>
                                            <!-- <a href="#" class="hired-detail">Hired on 19 JUN 2021</a> -->
                                            <form class="mt-2" action="post-case.php" method="POST" onsubmit="return confirm('Edit this Project?')">
                                                <input type="hidden" name="project_id" value="<?php echo $post['project_id']?>">
                                                <input type="submit" name="edit_project" value="Edit" class="projects-btn">
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex flex-wrap">
                            <div class="projects-card flex-fill">
                                <div class="card-body p-2">
                                    
                                    <div class="prj-proposal-count text-center hired">
                                        <?php 
                                        if($post['status']==0){
                                            ?>
                                                <h3 style="color:green">On Going</h3>
                                            <?php 
                                        }
                                        if($post['created_at']==1){
                                            ?>
                                                <h3>Hired</h3>
                                                <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                                <p class="mb-0">Hannah Finn</p>                   
                                            <?php
                                        }
                                        
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php
        
                }
             }else{
                ?>
                <div class="my-projects-list">
                    <div class="row">
                    <div class="col-lg-12 flex-wrap">
                        <div class="projects-card flex-fill">
                            <div class="card-body">
                                <div class="projects-details align-items-center">
                                <div class="project-info w-100">
                                  
                                    <h2 class="text-center">No Cases Available</h2>
                                   
                                </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
                <?php
             }
                           
                            ?>
             
                  </div>
               </div>
            </div>
         </div>
         <?php include("../lawyer_portal/inc/footer.php"); ?>
      </div>
      <?php include("inc/footer_links.php"); ?>
   </body>
</html>