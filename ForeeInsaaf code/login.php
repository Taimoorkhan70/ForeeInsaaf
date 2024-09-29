<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
    <?php include("inc/links.php") ?>

   </head>
   <body class="account-page">
      <div class="main-wrapper">
<?php include("inc/header.php"); ?>
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
                .account-page .footer {
        display: block;
    }
    .img{
        width:50px;
        height:50;
        border-radius:2px;
    }
            </style>
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="account-content">
                        <div class="align-items-center justify-content-center">
                           <div class="login-right">
                              <div class="login-header text-center">
                                 <a href="index.php"><img class="img" src="assets/img/logo1.png" alt="logo" class="img-fluid"></a>
                                 <h3>Welcome Back</h3>
                                 <p>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
                                 <p class="text-danger"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg']; } ?></p>
                              </div>
                              <form action="register_process.php" method="POST">
                                 <div class="form-group form-focus">
                                    <input type="text" name="email" class="form-control floating">
                                    <label class="focus-label">Email</label>
                                 </div>
                                 <div class="form-group form-focus">
                                    <input type="password" name="password" class="form-control floating">
                                    <label class="focus-label">Password</label>
                                 </div>
                                 <div class="form-group">
                                    <label class="custom_check">
                                    <input type="checkbox" name="rem_password">
                                    <span class="checkmark"></span> Remember password
                                    </label>
                                 </div>
                                 <button class="btn btn-primary btn-block btn-lg login-btn" name="login" type="submit" >Login</button>
                               
                                 <div class="row">
                                    <div class="col-6 text-start">
                                       <a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
                                    </div>
                                    <div class="col-6 text-end dont-have">New to Fori Insaaf? <a href="register.php">Click here</a></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php include("inc/footer.php") ?>
      </div>
 <?php include("inc/footer_links.php") ?>
   </body>
</html>