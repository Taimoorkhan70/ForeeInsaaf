<?php
   session_start();
   include('../db/connection.php');
   if(isset($_SESSION['user'])){
   // $user = $_SESSION['user']['role'];
     $user = $_SESSION['user']['email'];
     $select_query = "SELECT * FROM `user` WHERE `email`='$user'";
     $result =mysqli_query($connection,$select_query);
     $rows=mysqli_fetch_array($result);
   
   
   // die();
   
   
   }
   
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>KofeJob</title>
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
                              <li class="breadcrumb-item"><a href="index.php"><img src="assets/img/home-icon.svg" alt> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Developer details</li>
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
                  <div class="col-lg-8 col-md-12">
                     <div class="developer-box head-develop">
                        <div class="developer-profile-img">
                           <img src="assets/img/profile-bg.jpg" alt class="img-fluid">
                           <div class="img-profile">
                              <img src="../uploads/<?php echo $rows['image'] ;?>" alt class="img-fluid">
                           </div>
                        </div>
                        <h2><?php echo $rows['name']; ?> <i class="fas fa-check-circle"></i></h2>
                        <p> <?php if($rows['category']==''){ echo "iOS Expert + Node Dev";}else{ echo $rows['category'];} ?><span>Full time</span></p>
                        <ul class="develope-list-rate">
                           <li>
                              <div class="rating">
                                 <span class="average-rating">4.6 </span>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                              </div>
                           </li>
                           <li>Member Since,Aug 5, 2018</li>
                           <li class="bl-0"><img src="assets/img/flags/pl.png" alt height="16"><?php echo $rows['country']; ?></li>
                        </ul>
                        <div class="proposal-box">
                           <div class="proposal-value">
                              <h4>$20.00</h4>
                              <span>( Per Hour )</span>
                           </div>
                           <a data-bs-toggle="modal" href="#hire" class="btn favourites-btn btn-primary favour-border">Favourite <i class="fas fa-heart"></i></a>
                           <a data-bs-toggle="modal" href="#file" class="btn proposal-btn btn-primary">Send Invite </a>
                        </div>
                        <ul class="feed-back-detail">
                           <li>Recommended<span>89%</span></li>
                           <li>Completed Projects<span>22</span></li>
                           <li>Clients<span>48</span></li>
                           <li>Ongoing Projects<span>2</span></li>
                           <li>Feedbacks<span>5</span></li>
                           <li>Rehired<span>12</span></li>
                        </ul>
                     </div>
                     <div class="pro-view develop-view">
                        <nav class="provider-tabs mb-4 abouts-view">
                           <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                              <li class="nav-item">
                                 <a class="nav-link active-about" href="#overview">
                                    <img src="assets/img/icon/tab-icon-21.svg" alt="User Image">
                                    <p class="bg-red">Overview</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#project">
                                    <img src="assets/img/icon/tab-icon-16.svg" alt="User Image">
                                    <p class="bg-blue">Projects</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#experience">
                                    <img src="assets/img/icon/tab-icon-17.svg" alt="User Image">
                                    <p class="bg-violet">Experience</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#education">
                                    <img src="assets/img/icon/tab-icon-18.svg" alt="User Image">
                                    <p class="bg-yellow">Education</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#skill">
                                    <img src="assets/img/icon/tab-icon-19.svg" alt="User Image">
                                    <p class="bg-pink">Skills</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#feedback">
                                    <img src="assets/img/icon/tab-icon-20.svg" alt="User Image">
                                    <p class="bg-green">Feedbacks</p>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                        <div class="pro-post widget-box" id="overview">
                           <h3 class="pro-title">Overview</h3>
                           <div class="pro-content">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p>
                              <div class="mt-4">
                                 <h4 class="widget-title">My services include:</h4>
                                 <ul class="pro-list">
                                    <li>Cross-platform games</li>
                                    <li>Game concept and level designing</li>
                                    <li>Multiplayer integration</li>
                                    <li>Re-skin</li>
                                    <li>Ads and in-app purchase (Maximize your Revenue)</li>
                                    <li>Game Optimisations</li>
                                    <li>2D/3D Animation</li>
                                 </ul>
                              </div>
                              <p>Graphic DesigningSocial Network IntegrationVirtual Reality (VR)Augmented Reality (AR)Game con promotional graphics and video app store and Playstore publishing </p>
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box project-gallery" id="project">
                           <h3 class="pro-title">PROJECTS</h3>
                           <div class="pro-content">
                              <div class="row">
                                 <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="project-widget">
                                       <div class="pro-image">
                                          <a href="assets/img/project-8.jpg" data-fancybox="gallery2">
                                          <img class="img-fluid" alt="User Image" src="assets/img/project-8.jpg">
                                          </a>
                                       </div>
                                       <div class="project-footer">
                                          <div class="d-flex align-items-center">
                                             <div class="pro-detail">
                                                <h3 class="pro-name">
                                                   Education
                                                </h3>
                                                <p class="pro-designation">Web design</p>
                                             </div>
                                             <div class="view-image">
                                                <a href="project.html"><i class="fas fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="project-widget">
                                       <div class="pro-image">
                                          <a href="assets/img/project-9.jpg" data-fancybox="gallery2">
                                          <img class="img-fluid" alt="User Image" src="assets/img/project-9.jpg">
                                          </a>
                                       </div>
                                       <div class="project-footer">
                                          <div class="d-flex align-items-center">
                                             <div class="pro-detail">
                                                <h3 class="pro-name">
                                                   Photoshoot
                                                </h3>
                                                <p class="pro-designation">Web design</p>
                                             </div>
                                             <div class="view-image">
                                                <a href="project.html"><i class="fas fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="project-widget">
                                       <div class="pro-image">
                                          <a href="assets/img/project-10.jpg" data-fancybox="gallery2">
                                          <img class="img-fluid" alt="User Image" src="assets/img/project-10.jpg">
                                          </a>
                                       </div>
                                       <div class="project-footer">
                                          <div class="d-flex align-items-center">
                                             <div class="pro-detail">
                                                <h3 class="pro-name">
                                                   Electrical
                                                </h3>
                                                <p class="pro-designation">Web design</p>
                                             </div>
                                             <div class="view-image">
                                                <a href="project.html"><i class="fas fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="project-widget">
                                       <div class="pro-image">
                                          <a href="assets/img/project-11.jpg" data-fancybox="gallery2">
                                          <img class="img-fluid" alt="User Image" src="assets/img/project-11.jpg">
                                          </a>
                                       </div>
                                       <div class="project-footer">
                                          <div class="d-flex align-items-center">
                                             <div class="pro-detail">
                                                <h3 class="pro-name">
                                                   Project name
                                                </h3>
                                                <p class="pro-designation">Web design</p>
                                             </div>
                                             <div class="view-image">
                                                <a href="project.html"><i class="fas fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <a href="project.html" class="btn more-btn">View more </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box develop-experiance" id="experience">
                           <h3 class="pro-title">Experience</h3>
                           <div class="pro-content">
                              <div class="row">
                                 <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="experiance-list">
                                       <div class="experiance-logo d-flex align-items-center justify-content-center">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-10.png">
                                       </div>
                                       <h4>Logo Designer</h4>
                                       <h5>Techline <br> July 9, 2018 - March 18, 2021</h5>
                                       <p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="experiance-list">
                                       <div class="experiance-logo d-flex align-items-center justify-content-center">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-10.png">
                                       </div>
                                       <h4>UI Designer</h4>
                                       <h5>Techline <br> May 10, 2020 - March 10, 2022</h5>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="experiance-list">
                                       <div class="experiance-logo d-flex align-items-center justify-content-center">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-10.png">
                                       </div>
                                       <h4>UX Designer</h4>
                                       <h5>Techline <br> Sep 10, 2018 - Jan 18, 2020</h5>
                                       <p>Lorem ipsum dolor sit amet ,nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box" id="education">
                           <h3 class="pro-title">Educational Details</h3>
                           <div class="pro-content">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 d-flex">
                                    <div class="experiance-list">
                                       <div class="experiance-logo logo-bg d-flex align-items-center justify-content-center">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-11.png">
                                       </div>
                                       <h4>Bachelor of Science in Game Programming & Development</h4>
                                       <h5>Hampshire University January 12, 2015 - January 19, 2019</h5>
                                       <p>Graphic Designing artworks through making plans and utilizing the helpful analysis of companions, educators, and bosses to improve those plans. Careful discipline brings about promising results, and the capacity to acknowledge and gain from analysis from peers and even the purchaser everywhere is pivotal for accomplishment in this field.</p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 d-flex">
                                    <div class="experiance-list">
                                       <div class="experiance-logo logo-bg d-flex align-items-center justify-content-center">
                                          <img class="img-fluid" alt src="assets/img/icon/icon-11.png">
                                       </div>
                                       <h4>Master in Gaming STudi Design</h4>
                                       <h5>Techline July 9, 2018 - March 18, 2021</h5>
                                       <p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pro-post project-widget widget-box technical-skill" id="skill">
                           <h3 class="pro-title">Technical Skills</h3>
                           <div class="pro-content">
                              <div class="tags">
                                 <span class="badge badge-pill badge-skills">+ Web Design</span>
                                 <span class="badge badge-pill badge-skills">+ UI Design</span>
                                 <span class="badge badge-pill badge-skills">+ Node Js</span>
                                 <span class="badge badge-pill badge-skills">+ Javascript</span>
                              </div>
                           </div>
                        </div>
                        <div class="pro-post author-widget clearfix develop-feedback" id="feedback">
                           <div class="widget-title-box clearfix d-flex">
                              <h3 class="pro-title mb-0">Feedbacks</h3>
                              <a href="review.html" class="feedback-view">View All</a>
                           </div>
                           <div class="about-author">
                              <div class="about-author-img">
                                 <div class="author-img-wrap">
                                    <a href="company-profile.html"><img class="img-fluid" alt src="assets/img/img-03.jpg"></a>
                                 </div>
                              </div>
                              <div class="author-details">
                                 <a href="company-profile.html" class="blog-author-name">Logo Designer</a>
                                 <h6>Techline July 9, 2018 - March 18, 2021</h6>
                                 <p class="mb-0">I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
                              </div>
                           </div>
                           <div class="about-author">
                              <div class="about-author-img">
                                 <div class="author-img-wrap">
                                    <a href="company-profile.html"><img class="img-fluid" alt src="assets/img/img-02.jpg"></a>
                                 </div>
                              </div>
                              <div class="author-details">
                                 <a href="company-profile.html" class="blog-author-name">Web Designer</a>
                                 <h6>Techline July 9, 2018 - March 18, 2021</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
                              </div>
                           </div>
                           <div class="about-author">
                              <div class="about-author-img">
                                 <div class="author-img-wrap">
                                    <a href="company-profile.html"><img class="img-fluid" alt src="assets/img/img-03.jpg"></a>
                                 </div>
                              </div>
                              <div class="author-details">
                                 <a href="company-profile.html" class="blog-author-name">UX Designer</a>
                                 <h6>Techline July 9, 2018 - March 18, 2021</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
                              </div>
                           </div>
                           <div class="about-author">
                              <div class="about-author-img">
                                 <div class="author-img-wrap">
                                    <a href="company-profile.html"><img class="img-fluid" alt src="assets/img/img-04.jpg"></a>
                                 </div>
                              </div>
                              <div class="author-details">
                                 <a href="company-profile.html" class="blog-author-name">Php Developer</a>
                                 <h6>Techline July 9, 2018 - March 18, 2021</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar developer-view">
                     <div class="pro-post widget-box about-widget about-field">
                        <h4 class="pro-title ">About Me</h4>
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td>Email</td>
                                 <td><?php echo $rows['email'];?></td>
                              </tr>
                              <tr>
                                 <td>Category</td>
                                 <td><?php if($rows['category']==''){ echo 'LLB';}else{ echo $rows['category'];} ?></td>
                              </tr>
                              <tr>
                                 <td>Location</td>
                                 <td><?php echo $rows['country'];?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="pro-post widget-box language-widget">
                        <h4 class="pro-title mb-0">Language Skills</h4>
                        <ul class="latest-posts pro-content">
                           <li>
                              <p>English</p>
                              <div class="progress progress-md mb-0">
                                 <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           <li>
                              <p>Russian</p>
                              <div class="progress progress-md mb-0">
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           <li>
                              <p>German</p>
                              <div class="progress progress-md mb-0">
                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="pro-post widget-box follow-widget">
                        <ul class="follow-posts pro-post">
                           <li>
                              <p>Following</p>
                              <h6>49</h6>
                           </li>
                           <li>
                              <p>Followers</p>
                              <h6>422</h6>
                           </li>
                        </ul>
                        <div class="text-center">
                           <a href="#" class="btn follow-btn">+ Follow</a>
                        </div>
                     </div>
                     <div class="pro-post category-widget link-box">
                        <div class="widget-title-box">
                           <h4 class="pro-title">Social Links</h4>
                        </div>
                        <ul class="latest-posts pro-content mb-3">
                           <li><a href="#">http://www.facebook.com/john...</a></li>
                           <li><a href="#">http://www.Twitter.com/john...</a></li>
                           <li><a href="#">Http://www.googleplus.com/john... </a></li>
                           <li><a href="#"> Http://www.behance.com/john...</a></li>
                           <li><a href="#"> Http://www.pinterest.com/john...</a></li>
                        </ul>
                     </div>
                     <div class="pro-post widget-box post-widget profile-link">
                        <h3 class="pro-title">Profile Link</h3>
                        <div class="pro-content">
                           <div class="form-group profile-group mb-0">
                              <div class="input-group">
                                 <input type="text" class="form-control" value="https://www.kofejob.com/developer/daren/12454687">
                                 <div class="input-group-append">
                                    <button class="btn btn-success sub-btn" type="submit"><i class="fa fa-clone"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pro-post widget-box social-widget develop-social-link">
                        <div class="profile-head">
                           <h4 class="pro-title">SOCIAL LINKS</h4>
                        </div>
                        <ul class="social-link-profile">
                           <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                           <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php include("../lawyer_portal/inc/footer.php"); ?>
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
                  <form action="https://kofejob.dreamguystech.com/template/dashboard.html">
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
                     <form action="https://kofejob.dreamguystech.com/template/freelancer-project-proposals.html">
                        <div class="feedback-form">
                           <div class="row">
                              <div class="col-md-6 form-group">
                                 <input type="text" class="form-control" placeholder="Your Price">
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="email" class="form-control" placeholder="Estimated Hours">
                              </div>
                              <div class="col-md-12 form-group">
                                 <textarea rows="5" class="form-control" placeholder="Cover Letter"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="proposal-features">
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
                        </div>
                        <div class="row">
                           <div class="col-md-12 submit-section">
                              <label class="custom_check">
                              <input type="checkbox" name="select_time">
                              <span class="checkmark"></span> I agree to the Terms And Conditions
                              </label>
                           </div>
                           <div class="col-md-12 submit-section text-end">
                              <button class="btn btn-primary submit-btn" type="submit">SUBMIT PROPOSAL</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('inc/footer_links.php'); ?>
   </body>
</html>