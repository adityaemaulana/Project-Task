<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/Login.css">
    <link async href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple" rel="stylesheet" type="text/css"/>

  </head>
  <body>
        <div class="form mb-5">
                    <div class="font-effect-shadow-multiple">  
                      <h1>DanusKuy </h1>
                    </div>
                    <?php
                      $success_msg = $this->session->flashdata('success_msg');
                      $error_msg= $this->session->flashdata('error_msg');

                      if($success_msg){
                    ?>
                        <div class="alert alert-success">
                          <?php echo $success_msg; ?>
                        </div>
                      <?php
                           }
                              if($error_msg){
                              ?>
                              <div class="alert alert-danger">
                                <?php echo $error_msg; ?>
                              </div>
                              <?php
                            }
                        ?>
                        <div id="login">       
                            <form role ="form" action="<?php echo site_url('user/login_user'); ?>" method="post">
                                  <div class="field-wrap">
                                    <label>
                                      Email Address<span class="req">*</span>
                                    </label>
                                    <input class="form-control input-login" name="user_email" type="email" autofocus>
                                  </div>
                            
                                  <div class="field-wrap">
                                    <label>
                                      Password<span class="req">*</span>
                                    </label>
                                     <input class="form-control input-login" name="user_password" type="password">
                                  </div>
                            
                                  <p class="forgot"><a href="#">Forgot Password?</a></p>
                            <button class="button button-block mb-3"/>Log In</button>
                            </form>

                        </div> <!-- login -->
                    <div class="footer">
                      <div class="pl-4">
                          <p class="text-justify">
                            <a class="footer-brand"><b>danusYuk</b></a> adalah platform untuk membantu penggalangan dana usaha untuk event-event di sekitar anda secara online
                          </p>
                      </div>
                        <p class="pl-4">
                          <b>Copyright 2018 &copy; PT. Bantu Yuk All Rights Reserved</b>
                        </p>
                                                
                    </div><!-- tab-content -->
                </div> <!-- /form -->
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script  src="<?php echo base_url() ?>/assets/js/Login.js"></script>
  </body>
</html>
