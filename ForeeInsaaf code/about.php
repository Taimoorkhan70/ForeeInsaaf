<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
        <title>About Us | Fori Insaf</title>
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
            </style>
            <div class="bread-crumb-bar">
                <div class="container">
                    <div class="row align-items-center inner-banner">
                        <div class="col-md-12 col-12 text-center">
                            <div class="breadcrumb-list">
                                <nav aria-label="breadcrumb" class="page-breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php"><img src="assets/img/home-icon.svg" alt="Post Author" /> Home</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="about-content">
                                <h2>About <span class="orange-text">Fori Insaf</span></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi, sapiente ex debitis quis dolorum unde, neque quibusdam eveniet nobis enim porro repudiandae nesciunt
                                    quidem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni delectus soluta adipisci beatae ullam quisquam, quia recusandae rem assumenda, praesentium porro sequi eaque doloremque tenetur incidunt
                                    officiis explicabo optio perferendis.
                                </p>
                                <a href="project.php" class="btn learn-btn">LEARN MORE</a>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-5">
                            <div class="about-img">
                                <img class="img-fluid" src="assets/img/about.png" alt="Post Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section job-counter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter">
                                <h2>800+</h2>
                                <h4>Jobs Posted</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <h2>80+</h2>
                                <h4>Companies</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <h2>900+</h2>
                                <h4>Developers</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                                <h2>90+</h2>
                                <h4>Development Services</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section testimonial-section review">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header text-center">
                                <div class="section-line"></div>
                                <h2 class="header-title">Top Reviews</h2>
                                <p>High Performing Developers To Your</p>
                            </div>
                        </div>
                    </div>
                    <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider">
                        <div class="review-blog">
                            <div class="review-top d-flex align-items-center">
                                <div class="review-img">
                                    <a href="review.php"><img class="img-fluid" src="assets/img/review/review-01.jpg" alt="Post Image" /></a>
                                </div>
                                <div class="review-info">
                                    <h3>Davis Payerf</h3>
                                    <h5>CEO</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="average-rating">4.7</span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                            </div>
                        </div>

                        <div class="review-blog">
                            <div class="review-top d-flex align-items-center">
                                <div class="review-img">
                                    <a href="review.php"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image" /></a>
                                </div>
                                <div class="review-info">
                                    <h3>Davis Payerf</h3>
                                    <h5>PROJECT LEAD</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="average-rating">4.8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                            </div>
                        </div>

                        <div class="review-blog">
                            <div class="review-top d-flex align-items-center">
                                <div class="review-img">
                                    <a href="review.php"><img class="img-fluid" src="assets/img/review/review-03.jpg" alt="Post Image" /></a>
                                </div>
                                <div class="review-info">
                                    <h3>Davis Payerf</h3>
                                    <h5>TEAM LEAD</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="average-rating">5.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                            </div>
                        </div>

                        <div class="review-blog">
                            <div class="review-top d-flex align-items-center">
                                <div class="review-img">
                                    <a href="review.php"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image" /></a>
                                </div>
                                <div class="review-info">
                                    <h3>Davis Payerf</h3>
                                    <h5>PROJECT LEAD</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="average-rating">3.2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section agency">
                <div class="container-fluid">
                    <div class="row align-items-center black-bg">
                        <div class="col-md-6 agency-box">
                            <img src="assets/img/about-01.jpg" alt class="img-fluid" />
                        </div>
                        <div class="col-md-6 agency-box black-bg">
                            <div class="agency-content">
                                <h2>Used by over <span class="orange-text">1500</span> of World Leading Agencies work</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                <a href="project.php" class="btn learn-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section expert">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h5>SINCE THE START</h5>
                            <h2>What are the benefits of applying job Online?</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat, mattis nibh
                                aliquam dui, nibh faucibus aenean.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                            <div class="btn-item">
                                <a class="btn get-btn" href="login.php">Get Started</a>
                                <a class="btn courses-btn" href="project.php">ViEW SERVICES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("inc/footer.php"); ?>
        </div>

        <?php include("inc/footer_links.php"); ?>
    </body>

</html>
