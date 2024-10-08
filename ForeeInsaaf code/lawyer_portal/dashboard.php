<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
      <?php include("inc/links.php"); ?>
      <style>
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
                 @media (min-width: 320px) and (max-width: 480px) {
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
       
      <?php include("inc/header.php"); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Freelancer</li>
                              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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
                     <div class="dashboard-sec">
                        <div class="row">
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Completed Jobs</div>
                                    <div class="dash-widget-count">30</div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="freelancer-completed-projects.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Task Completed</div>
                                    <div class="dash-widget-count">5</div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="freelancer-completed-projects.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Reviews</div>
                                    <div class="dash-widget-count">25</div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="freelancer-review.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-8 d-flex">
                              <div class="card flex-fill">
                                 <div class="pro-head">
                                    <h5 class="card-title mb-0">Your Profile View</h5>
                                    <div class="month-detail">
                                       <select class="form-control">
                                          <option value="0">Last 6 months</option>
                                          <option value="1">Last 2 months</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="pro-body">
                                    <div id="chartprofile"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 d-flex">
                              <div class="flex-fill card">
                                 <div class="pro-head b-0">
                                    <h5 class="card-title mb-0">Static Analytics</h5>
                                 </div>
                                 <div class="pro-body">
                                    <div id="chartradial"></div>
                                    <ul class="static-list">
                                       <li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
                                       <li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
                                       <li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
                                       <li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-6 d-flex">
                              <div class="card flex-fill">
                                 <div class="pro-head">
                                    <h2>Membership Plan Details</h2>
                                    <div><i class="fas fa-check-circle verified orange-text fa-2x"></i></div>
                                 </div>
                                 <div class="pro-body">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <div class="plan-details">
                                             <h4>The Ultima</h4>
                                             <div class="yr-amt">Anually Price</div>
                                             <h3>$1200</h3>
                                             <div class="yr-duration">Duration: One Year</div>
                                             <div class="expiry">Expiry: 24 JAN 2022</div>
                                             <a href="freelancer-membership.html" class="btn btn-primary btn-plan">Change Plan</a>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <div class="plan-feature">
                                             <ul>
                                                <li>12 Project Credits</li>
                                                <li>10 Allowed Services</li>
                                                <li>20 Days visibility</li>
                                                <li>5 Featured Services</li>
                                                <li>20 Days visibility</li>
                                                <li>30 Days Package Expiry</li>
                                                <li>Profile Featured</li>
                                             </ul>
                                             <a href="freelancer-membership.html">View Details</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6 d-flex">
                              <div class="card flex-fill">
                                 <div class="pro-head">
                                    <h2>Ongoing Projects</h2>
                                    <a href="freelancer-ongoing-projects.html" class="btn fund-btn">View All</a>
                                 </div>
                                 <div class="pro-body p-0">
                                    <div class="on-project">
                                       <h5>Web Scraping</h5>
                                       <p>I need some data to be scraped from various social media....</p>
                                       <div class="pro-info">
                                          <ul class="list-details">
                                             <li>
                                                <div class="slot">
                                                   <p>Job Type</p>
                                                   <h5>Hourly</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Project Price</p>
                                                   <h5>$120</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Location</p>
                                                   <h5>3 Received</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Expiry</p>
                                                   <h5>4 Days Left</h5>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="on-project">
                                       <h5>New Service</h5>
                                       <p>I need some data to be scraped from various social media....</p>
                                       <div class="pro-info">
                                          <ul class="list-details">
                                             <li>
                                                <div class="slot">
                                                   <p>Job Type</p>
                                                   <h5>Hourly</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Project Price</p>
                                                   <h5>$90</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Location</p>
                                                   <h5>3 Received</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Expiry</p>
                                                   <h5>5 Days Left</h5>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="on-project">
                                       <h5>Website Layout changes</h5>
                                       <p>I need some data to be scraped from various social media....</p>
                                       <div class="pro-info">
                                          <ul class="list-details">
                                             <li>
                                                <div class="slot">
                                                   <p>Job Type</p>
                                                   <h5>Hourly</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Project Price</p>
                                                   <h5>$70</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Location</p>
                                                   <h5>3 Received</h5>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="slot">
                                                   <p>Expiry</p>
                                                   <h5>7 Days Left</h5>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="card mb-4">
                                 <div class="pro-head">
                                    <h2>Past Earnings</h2>
                                    <a href="freelancer-payment.html" class="btn fund-btn">View All</a>
                                 </div>
                                 <div class="pro-body p-0">
                                    <div class="earn-feature">
                                       <div class="row align-items-center">
                                          <div class="col-lg-7 col-md-6">
                                             <div class="earn-info">
                                                <p>I want some customization and installation on wordpress</p>
                                                <div class="date">October 5, 2021</div>
                                             </div>
                                          </div>
                                          <div class="col-lg-5 col-md-6">
                                             <div class="earn-img">
                                                <span><img src="assets/img/user/avatar-1.jpg" alt="logo" class="img-fluid avatar-md rounded-circle"> George Wells</span>
                                                <div class="price">$90</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="earn-feature">
                                       <div class="row align-items-center">
                                          <div class="col-lg-7 col-md-6">
                                             <div class="earn-info">
                                                <p>I want simple Joomla 4 component development </p>
                                                <div class="date">October 12, 2021</div>
                                             </div>
                                          </div>
                                          <div class="col-lg-5 col-md-6">
                                             <div class="earn-img">
                                                <span><img src="assets/img/user/avatar-2.jpg" alt="logo" class="img-fluid avatar-md rounded-circle"> Timothy Smith</span>
                                                <div class="price">$150</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="earn-feature">
                                       <div class="row align-items-center">
                                          <div class="col-lg-7 col-md-6">
                                             <div class="earn-info">
                                                <p>I want migrate Wordpress website </p>
                                                <div class="date">October 15, 2021</div>
                                             </div>
                                          </div>
                                          <div class="col-lg-5 col-md-6">
                                             <div class="earn-img">
                                                <span><img src="assets/img/user/avatar-3.jpg" alt="logo" class="img-fluid avatar-md rounded-circle"> Janet Paden</span>
                                                <div class="price">$70</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="earn-feature">
                                       <div class="row align-items-center">
                                          <div class="col-lg-7 col-md-6">
                                             <div class="earn-info">
                                                <p>I want Landing Page Redesign / Sales Page Redesign</p>
                                                <div class="date">October 20, 2021</div>
                                             </div>
                                          </div>
                                          <div class="col-lg-5 col-md-6">
                                             <div class="earn-img">
                                                <span><img src="assets/img/user/avatar-4.jpg" alt="logo" class="img-fluid avatar-md rounded-circle"> James Douglas</span>
                                                <div class="price">$120</div>
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
         </div>
         <?php include("inc/footer.php"); ?>
      </div>
      <?php include("inc/footer_links.php"); ?>
   </body>
</html>