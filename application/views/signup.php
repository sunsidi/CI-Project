<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Sign Up</title>
 <link href="<?php echo $PATH_PROFILE?>css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row text-center">
       <a href="#" data-toggle="modal" data-target="#basicModal"><img src="<?php echo $PATH_IMG?>joinnow_button.png"></a>
     </div>
</div>

  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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


   <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/dropdown.js"></script>
</body>
</html>
