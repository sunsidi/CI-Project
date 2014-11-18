<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php ?>
    <title>Bootstrap 3.1.0 - Modal Demo</title>
     <link href="<?php echo $PATH_BOOTSTRAP?>css/main.css">

    <link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo $PATH_PROFILE?>css/bootstrap.min.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



  </head>
  <body>
  <div>
   
    <div class="container">
        <div class="row text-center">
            <a href="#" data-toggle="modal" data-target="#basicModal"><img src="<?php echo $PATH_IMG?>signin.png"></a>
        </div>
    </div>
<div class="container">
    <div class="row text-center">
       <a href="#" data-toggle="modal" data-target="#basically2"><button class="btn btn-lg" style="background:#63308F; color:white;">Create a Wrev</button></a>
     </div>
</div>
    
    
    
    
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="height: 400px;">
      
    <div class="panel" style="border-color: #714E8A; width: 599px; height: 400px;">
    
      <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
        <p style="font-size: 250%; color: white;text-align: justify; margin-left: 100px;">
          Welcome to
        </p>

        <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1;margin-top: -85px; margin-left: 55%;"/>
      </div>
      
    <div class="panel-body">
     
     
     
        <?php echo form_open(base_url().'main/login_validation');?>
     
        <input name = 'email' type="email" class="form-control" placeholder="Email address" required="" autofocus="">
          
          
        <input name = 'password' type="password" class="form-control" placeholder="Password" required="" style="margin-top: 2%;">
        
        <p style="">
          <a href="#" style="float: left; margin-top: 9px;">
            Forgot password?
          </a>
                
          <label class="checkbox" style="float: right;">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
                
        </p>
            

        <a href="#">
          <img src="<?php echo $PATH_IMG?>FB_CN.png" style="z-index: 1;width: 150px; margin-top: 50px; margin-left: -50px">
        </a>
        
        <p style="margin-top: -30px; text-align: center;">
          or
        </p>
        
        <a href="#">
          <input type="submit" name = "submit" value = "Submit"class="btn btn-lg" style="background:#00aade; color:white; font-size:20px; margin-top: -60px; margin-left: 330px;"></input>
        </a>
          
          
          
          <?php echo form_close();?>
          
          
          
          
        <hr style="margin-top: 5%;">
                
        <p style="float: left; margin-top: -5px; margin-left: 100px;">
          New to Wrevel?
        </p>
          <a href="#" data-toggle="modal" data-target="#basically">
          <img src="<?php echo $PATH_IMG?>joinnow.png" style="z-index: 1;width: 100px; margin-top:-60px; margin-left: 60%;">
        </a>
   

    </div>
    </div>
      
 
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="basically" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="panel" style="width: 599px;">
    
            <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
              <p style="font-size: 250%; color: white;text-align: justify; margin-left: 100px;">
                  Sign Up for
              </p>
        
              <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1;margin-top: -85px; margin-left: 55%;"/>
            </div>
                
                <div class="panel-body" style="text-align:center; font-size:20px;">
                  <hr>
                    <?php echo form_open(base_url().'main/registration_validation');?>
                   <!-- <form> -->
            
              <!--</form> -->
                    <input name= 'username' type="text" class="form-control" placeholder="Username" required style="margin-top: 2%;">
                    
                    <input name= 'full_name' type="text" class="form-control" placeholder="First and Last Name"  required style="margin-top: 2%;">
                    
                    <input name = 'email' type="text" class="form-control" placeholder="Email" required style="margin-top: 2%;">
                    
                    <input name = 'password' type="password" class="form-control" placeholder="Password" required style="margin-top: 2%;">
                    
                    <input name = 'cpassword' type="password" class="form-control" placeholder="Re-enter Password" required style="margin-top: 2%;">
                    
                    </br>

                    <label>
                <input name = "agreement" type="checkbox" style="margin:30px 0;"> I agree with the terms of use
            </label>
                    </br>
                    <button type="submit" class="btn btn-lg" style="background:#1C75BC; color:white;">Join now </button>
                    <?php echo form_close();?>
                </div>
            </div>
            
            
        </div>
      </div>
  </div>      
  <div class="modal fade" id="basically2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  
          <?php echo $test_html ?>
           
  </div> 

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/dropdown.js"></script>
    <p><? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js</p>
  </body>
</html>
