<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php ?>
    <title>Bootstrap 3.1.0 - Modal Demo</title>

    <link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo $PATH_PROFILE?>css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>


  <div style="text-align:center;">
          <a href="#" data-toggle="modal" data-target="#basicModal">
              <button type="button" class="btn-lg" style="background:#1F638B; color:white;">Edit Profile</button>
          </a>
      </div>



 <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="height: 900px;">
      

    <div class="panel" style="border-color: #714E8A; width: 599px; height: 900px;">
    
      <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
        <p style="font-size: 250%; color: white;text-align: justify; margin-left: 100px;">
          Welcome to
        </p>
        <img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1;margin-top: -85px; margin-left: 55%;"/>
        
      </div>
      
    <div class="panel-body" style="text-align:center;font-size:20px;">
                      <?php echo form_open_multipart(base_url().'main/update_profile');?>
                      
                       <div style="text-align:left;">
                    <label>Status</label>
                    <input type="radio" style="margin-left:40px;" name="relationship" value="S"> Single
                    <input type="radio" name="relationship" value="M"> Married
                    <input type="radio" name="relationship" value="W"> Widowed
                    <input type="radio" name="relationship" value="D"> Divorced
                    <input type="radio" name="relationship" value="C"> In a relationship

                    </div>

                      
                         <form class="form-horizontal" role="form">
                         <label class="col-sm-2 control-label">Location</label>
                         <div class="col-sm-10">
                           <input name = 'location' type="text" class="form-control" placeholder="Location" required style="margin-top: 2%;">
                         </div>
                    
                        <label class="col-sm-2 control-label">Education</label>
                        <div class="col-sm-10">
                         <input name = 'school' type="text" class="form-control" placeholder="Education"  required style="margin-top: 2%;">
                         </div>
                    
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input name = 'email' type="text" class="form-control" placeholder="Email" required style="margin-top: 2%;">
                        </div>
                   
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10"> 
                         <input name = 'phone' type="text" class="form-control" placeholder="Phone" required style="margin-top: 2%;">
                         </div>
                    
                        <label class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <input name = 'user_reference' type="text" class="form-control" placeholder="Links" required style="margin-top: 2%;">
                        </div>
                    
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                        <input name = 'fullname' type="text" class="form-control" placeholder="name" required style="margin-top: 2%;">
                        </div>
                    
                        <label class="col-sm-2 control-label">Quote</label>
                        <div class="col-sm-10">
                        <input name = 'tagline' type="text" class="form-control" placeholder="quote" required style="margin-top: 2%;">
                        </div>

                      
      
                    <div class="image-upload">
                   
                        <label for="file-input">
                        
                            <img src="<?php echo $PATH_IMG?>camera_icon.png"  style="min-width:100%; max-width:100%;">
                        
                        </label>
                            <label for ="file-upload">
                         <button type="submit" class="btn btn-lg" style="background:#47AFEA; color:white;">Upload Main Photo</button>

                            </label>


                        
                        <input id="file-input" name = "userfile" type = "file"/>
                        <input id="file-upload" type = "submit" >
                        </form>
                
                    </div>
                
                    <style>

                    .image-upload > input
                    {
                        display: none;
                    }
                   </style>
                
                                        
                    
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