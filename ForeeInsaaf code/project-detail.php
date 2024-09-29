<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
      <?php include("inc/links.php"); ?>
   </head>
   <body>
   <?php include("inc/loader.php") ?>

   <div class="main-wrapper">
         <?php include("inc/header.php") ?>
         <style>
                .main-nav li a{
                    color:#333 !important;
                }
                .navbar-brand h1{
                    color:#333 !important;
                }
                .sign-reg{
                    background:rgba(0,0,0,0) !important;
                }
                .header{
                    background:#fff;
                }
            </style>   
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php"><img src="assets/img/home-icon.svg" alt> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">PROJECT DETAILS</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php 
         $Q="Select *, project.country as project_country, project.city as project_city from user inner join project on user.user_id=project.user_id where project.project_id='".$_GET['id']."'";
        $res=mysqli_query($connection,$Q);

        $result=mysqli_fetch_assoc($res);
        if($result){
          
        }else{
            echo mysqli_error($connection);
        }
         ?>

         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-12">
                     <div class="developer-box project-box-view">
                        <h2><?php echo $result['project_name'] ?></h2>
                        <!-- <h3><a href="company-profile.html"><?php echo $result['name'] ?></a> <i class="fas fa-check-circle"></i></h3> -->
                        <ul class="develope-list-rate project-rate align-items-center">
                           <li><i class="fas fa-clock"></i>Posted on <?php echo $result['created_at'] ?> </li>
                           <?php 
                           if($result['status']==0){
                            ?>
                                <li class="full-time text-center">Open</li>
                            <?php
                           }
                           if($result['status']==1){
                            ?>
                                <li class="full-time tect-center bg-danger">Closed</li>
                            <?php
                           }
                           ?>

                          
                        </ul>
                        <div class="proposal-box">
                        <?php if(isset($_SESSION['user']) ){
                                                if($_SESSION['user']['role']==1){
                                                    $QQ="SELECT * FROM `proposels` WHERE `project_id` ='".$_GET['id']."'";
                                                    $rr=mysqli_query($connection,$QQ);
                                                    if(mysqli_num_rows($rr)>0){
                                                         ?>
                                                        <a href="#" class="btn proposal-btn btn-primary">View Proposals <i class="fas fa-long-arrow-alt-right"></i> </a>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <a  href="#file" class="btn proposal-btn btn-primary" data-id='<?php echo $_GET['id']; ?>' id="send_proposel">Send Proposal <i class="fas fa-long-arrow-alt-right"></i> </a>
    
       
                                                       <?php
                                                    }
                                                   
                                                  
                                                }else{
                                                    ?>
                                                    <a href="#" class="btn proposal-btn btn-primary">View Proposals <i class="fas fa-long-arrow-alt-right"></i> </a>
                                                    <?php
                                                }
                                               

                                             }else{
                                                ?>
                                               <a href="login.php" class="btn proposal-btn btn-primary">Send Proposal <i class="fas fa-long-arrow-alt-right"></i> </a>

                                                <?php
                                             } ?>
                        </div>
                     </div>
                     <div class="pro-view project-details-view">
                        <div class="post-widget">
                           <div class="pro-content">
                              <div class="row">
                                 <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex">
                                    <div class="pro-post job-type d-flex align-items-center">
                                       <div class="pro-post-head">
                                          <p>Case Type </p>
                                          <h6><?php echo $result['case_type'] ?></h6>
                                       </div>
                                       <div class="post-job-icon blue-color">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-15.svg">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex">
                                    <div class="pro-post job-type d-flex align-items-center">
                                       <div class="pro-post-head">
                                          <p>Location</p>
                                          <h6><?php echo $result['project_city'].", ".$result['project_country']; ?></h6>
                                       </div>
                                       <div class="post-job-icon orange-color">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-14.svg">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex">
                                    <div class="pro-post job-type d-flex align-items-center">
                                       <div class="pro-post-head">
                                          <p>Proposals</p>
                                          <h6>15 Received</h6>
                                       </div>
                                       <div class="post-job-icon pink-color">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-13.svg">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex">
                                    <div class="pro-post job-type d-flex align-items-center">
                                       <div class="pro-post-head">
                                          <p>Court type</p>
                                          <h6><?php echo $result['project_type'] ?></h6>
                                       </div>
                                       <div class="post-job-icon green-color">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-12.svg">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
             
                        <div class="pro-post widget-box">
                           <h3 class="pro-title">Project Details</h3>
                           <div class="pro-content">
                              <p><?php echo $result['project_desc'] ?> </p>
                           </div>
                        </div>
                     
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
                     <div class="freelance-widget widget-author mt-2 pro-post">
                        <div class="freelance-content">
                           <div class="author-heading">
                              <div class="profile-img" style="overflow:hidden;">
                                 <a href="company-profile.html">
                                    <?php
                                    if(empty($result['image'])){
                                        ?>
                                             <img src="assets/img/company/img-1.png" width="150px" height="150px" alt="author">
                                        <?php
                                    }else{
                                        ?>
                                            <img src="uploads/<?php echo $result['image'] ?>"  width="100px" height="100px" alt="author">
                                        <?php
                                    }
                                    
                                    ?>
                                
                                 <span class="project-verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                              </div>
                              <div class="profile-name">
                                 <div class="author-location"><a href="company-profile.html"><?php echo $result['name'] ?></a></div>
                              </div>
                              <div class="freelance-info">
                                 <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i><?php echo $result['city'].", ".$result['country']; ?></div>
                              </div>
                              <!-- <button type="button" class="btn btn-lg btn-primary rounded-pill mb-3"><i class="fab fa-whatsapp me-2"></i>Follow</button> -->
                          
                              <div class="pro-member mt-5">
                                 <div class="row align-items-center">
                                    <div class="col">
                                       <h6 class="text-start mb-0">
                                          Member Since
                                       </h6>
                                    </div>
                                    <div class="col-auto">
                                       <span><?php echo $result['register_time'] ?></span>
                                    </div>
                                 </div>
                                 <hr class="my-3">
                                 <div class="row align-items-center">
                                    <div class="col">
                                       <h6 class=" text-start mb-0">
                                          Total Jobs
                                       </h6>
                                    </div>
                                    <div class="col-auto">
                                       <span><?php $Q="SELECT count(*) as total From project where project_id='".$_GET['id']."'";
                                            $res=mysqli_query($connection,$Q);
                                            $total=mysqli_fetch_assoc($res);
                                            echo $total['total'];
                                            ?>
                                            </span>
                                    </div>
                                 </div>
                               
                              </div>
                           </div>
                        </div>
                     </div>
           
                     <div class="pro-post widget-box post-widget link-project">
                        <h3 class="pro-title">Profile Link</h3>
                        <div class="pro-content pt-0">
                           <div class="form-group profile-group mb-0">
                              <div class="input-group">
                                 <input type="text" class="form-control" value="https://www.Fori Insaaf.com/developer/daren/12454687">
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
         <?php include("client_portal/inc/footer.php"); ?>
       


      </div>
      <div class="modal fade custom-modal" id="hire">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-modal">
               <div class="modal-header">
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="text-center pt-0 mb-4">
                     <img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
                     <h5 class="modal-title">Discuss your project with David</h5>
                  </div>
                  <form action="https://Fori Insaaf.dreamguystech.com/template/dashboard.html">
                     <div class="modal-info">
                        <div class="row">
                           <div class="col-12 col-md-12">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="First name & Lastname">
                              </div>
                              <div class="form-group">
                                 <input type="email" name="name" class="form-control" placeholder="Email Address">
                              </div>
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Phone Number">
                              </div>
                              <div class="form-group">
                                 <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                              </div>
                              <div class="form-group row">
                                 <div class="col-12 col-md-4 pr-0">
                                    <label class="file-upload">
                                    Add Attachment <input type="file" />
                                    </label>
                                 </div>
                                 <div class="col-12 col-md-8">
                                    <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                    <p>Max file size: 50 MB</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="file">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">SEND PROPOSALS</h4>
                  <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
               </div>
               <div class="modal-body">
                  <div class="modal-info">
                     <form action="register_process.php" method="post" id="form_proposel">
                        <div class="feedback-form">
                           <div class="row">
                              <div class="col-md-6 form-group">
                                <input type="text" name="id" hidden id="p_id">
                                 <input type="number" class="form-control" required name="h_price" placeholder="Your Price Per Hearing">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="number" class="form-control" required name="hearing_qty"  placeholder="Estimated Hearings">
                              </div>
                              <div class="col-md-12 form-group">
                                 <textarea rows="5" class="form-control" required name="cover" placeholder="Cover Letter"></textarea>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="proposal-features">
                           <div class="proposal-widget proposal-success">
                              <label class="custom_check">
                              <input type="checkbox" name="select_time"><span class="checkmark"></span>
                              <span class="proposal-text">Stick this Proposal to the Top</span>
                              <span class="proposal-text float-end">$12.00</span>
                              </label>
                              <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                           </div>
                           <div class="proposal-widget proposal-light">
                              <label class="custom_check">
                              <input type="checkbox" name="select_time"><span class="checkmark"></span>
                              <span class="proposal-text">$ Make Sealed Proposal</span>
                              <span class="proposal-text float-end">$7.00</span>
                              </label>
                              <p>The sealed proposal will be sent to the project author only it will not be visible publically.</p>
                           </div>
                           <div class="proposal-widget proposal-danger">
                              <label class="custom_check">
                              <input type="checkbox" name="select_time"><span class="checkmark"></span>
                              <span class="proposal-text">$ Make Sealed Proposal</span>
                              <span class="proposal-text float-end">$15.00</span>
                              </label>
                              <p>The featured proposal will have a distinctive color and popped up between other proposals to get the author's attention.</p>
                           </div>
                        </div> -->
                        <div class="row">
                           <div class="col-md-12 submit-section">
                              <label class="custom_check">
                              <input type="checkbox" required name="select_time">
                              <span class="checkmark"></span> I agree to the Terms And Conditions
                              </label>
                           </div>
                           <div class="col-md-12 submit-section text-end">
                              <button class="btn btn-primary submit-btn" id="submit" name="send_proposel" type="submit">SUBMIT PROPOSAL</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("inc/footer_links.php"); ?>
      <script>

$(document).ready(function(){
    $('#file').modal('hide');
    $('#send_proposel').on('click',function(e){
         e.preventDefault();
        var id= $(this).data('id');
      //   alert(id);
        $('#p_id').val(id);
        $('#file').modal('show');
    });

});
</script>
   </body>
</html>