<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrapValidator.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row text-center">
            <a href="#" data-toggle="modal" data-target="#basicModal"><img src="<?php echo $PATH_IMG?>signin.png"></a>
        </div>
    </div>

    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="height: 450px;">
      
    <div class="panel" style="border-color: #714E8A; width: 599px; height: 450px;">
    
      <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
        <p style="font-size: 250%; color: white;text-align: justify; margin-left: 100px;">
          Welcome to
        </p>
        
        <img src="<?php echo $PATH_IMG?>/wrevel_logo.png"style="width:200px;z-index:1;margin-top: -85px; margin-left: 55%;"/>
      </div>
      
    <div class="panel-body">
    	<div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		YOU ARE NOT LOGGED IN
        </div>
	
	
	
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
          <input type="submit" name = "submit" value = "Submit" class="btn btn-lg" style="background:#00aade; color:white; font-size:20px; margin-top: -60px; margin-left: 330px;"></input>
        </a>
          
          
          
          <?php echo form_close();?>
        <hr style="margin-top: -3px;">
                
        <p style="float: left; margin-top: 5px; margin-left: 150px;">
          New to Wrevel?
        </p>

        <a href="#">
          <button type="button" class="btn btn-lg" style="background:#0074b9; color:white; font-size:15px; margin-left: 50px;">Join Now</button>
        </a>
    </div>
    </div>
 
 
        </div>
      </div>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrapValidator.min.js"></script>
    <script>
$(document).ready(function() {
    $('#signin').bootstrapValidator({
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    stringLength: {
                        min: 7,
                        max: 30,
                        message: 'The password must be more than 7'
                    },
                }
            },
        },
    });
});
</script>
  </body>
</html>