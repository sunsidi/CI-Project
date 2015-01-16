<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Showroom</title>

<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<!--header
===========================================-->

<nav class="navbar navbar-custom navbar-static-top" style="width: 100%;height: 68px; background-color:#4b5aa5;">
    <div class="navbar-header">
        <div class="col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
            <a class="navbar-brand navbar-collapse collapse" href="#"><img src="<?php echo base_url()."uploads/".$image_key?>"
                                                style="width:64px; height:64px; border-radius: 150px;
                                                -webkit-border-radius: 150px;
                                                -moz-border-radius: 150px; position: relative;
                                                margin-top:-22%; margin-left:10%; border:2px solid #662E91;"/>
                                    <p style="color: white; margin-top:-70%; margin-left:120%;"><?php echo $fullname ?></p>
            </a>
        </div>
    </div>
  

        <div class="col-md-offset-4 col-sm-offset-4 col-xs-offset-3">
          <a class="navbar-brand" href="#"><img src="<?php echo $PATH_IMG?>wrevel_logo.png"
                                                style="width:200px; display:block; margin-top:-3%;"/></a>
        </div>


    <div class="navbar-collapse collapse">
    <div class="col-md-offset-9 col-sm-offset-9">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group" style="margin-top: 4%;">
        <input name = "user" type="text" class="form-control" name = "input" placeholder="Search">
       </a>
          
          

      </div>
    </form>

    </div>
    </div>

</nav>

<!--end of header-->

<!--tabs
===========================================-->
    <div class="center-block">
        <div class="col-md-offset-4 col-sm-offset-3 col-xs-offset-2">
            <div class="btn-group btn-group-lg">
                <a href="<?php echo base_url()."main/mywrevs"?>"><button type="button" class="btn tab" style="font-size:30px;">mywrevs</button></a>
                <a href="<? echo $PATH_PROFILE?>hub.html"><button type="button" class="btn tab" style="font-size:30px;">the hub</button></a>
                <a href="<? echo base_url()?>showroom/profile"><button type="button" class="btn tab active" style="font-size:30px;">showroom</button></a>
            </div>
        </div>
    </div>



<!--end of tabs-->

<!--content
==============================================-->
<div class="container">
    <div class="row" style="margin-top:50px;">

        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-2">
                <img src="<?php echo base_url()."uploads/".$image_key?>" style="position:absolute; z-index:2; width:150px; height:150px; border-radius:150px; margin-top:-50px; border:2px solid #5A2381"/>
               </div>
            <div class="col-md-6" style="background:#662E91; color:white;padding-bottom:2px; padding-top:2px;">
            <h2 style="text-align:center;"><?php echo $fullname ?></h2>
            </div>
            <div class="col-md-4" style="background:#27AAE2; color:white; border-top-right-radius:5px;">
            <h2>Reputation <span class="badge" style="color:#27AAE2; background:white;font-size:20px;vertical-align:middle; border-radius:50%; padding:8px 5px; width:35px;height:35px; text-align:center;"><?php echo $reputation ?></span></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">       
                <div class="panel-body background">
                    <!--Quote-->
                    <div class="row">
                        <p class="col-md-8 col-md-offset-2" style="background:#00A79D; color:white; font-size:18px; border-radius:5px;padding:15px 20px;">
                        <?php echo $tagline ?>
                        </p>
                     </div>
                    <div class="row">  
                        <!--Personal Info-->            
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <p class="info"><span class="glyphicon glyphicon-user"></span> Gender: <?php echo $gender ?></p>
                                    <p class="info"><i class="fa fa-heart-o"></i> Status: <?php echo $relationship ?> </p>
                                    <p class="info"><i class="fa fa-calendar"></i> Birthday: <?php echo $birthday ?> </p>
                                    <p class="info"><i class="fa fa-map-marker"></i> Location: <?php echo $location ?></p>
                                    <p class="info"><i class="fa fa-graduation-cap"></i> Education: <?php echo $school ?></p>
                                    <p class="info"><i class="fa fa-envelope"></i> Email: <?php echo $email ?></p>
                                    <p class="info"><i class="fa fa-phone"></i> Phone: <?php echo $phone ?></p>
                                    <p class="info"><span class="glyphicon glyphicon-link"></span> Links: <a href="<?php echo $user_reference ?>"> <?php echo $user_reference ?></a></p>

                                        <!--Edit profile button-->

                                  
                                    
 



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
                         <button type="submit" class="btn btn-lg" style="background:#47AFEA; color:white;">Submit Changes</button>

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

                                </div>
                            </div>
                        </div>
                        <!--Message-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <!--Message User-->
                                    <div class="row">
                                        <a href="#"><button type="button" class="btn btn-lg btn-block blue-button"><i class="fa fa-envelope"></i> Message "user"</button></a>
                                    </div>
                                    <!--Add to Friends-->
                                    <div class="row" style="padding-top:10px;">                                     
                                        <a href="#"><button type="button" class="btn btn-lg btn-block blue-button"><span class="glyphicon glyphicon-user"></span> Add to Friends List</button></a>
                                    </div>
                                    <!--Chatbox-->
                                    <div class="row" style="padding-top:15px;">
                                        <p style="text-align:center; font-size:25px;">Chatbox</p>
                                    </div>
                                    <div class="row left-inner-addon" style="padding-top:10px;">
                                        <!--<span class="glyphicon glyphicon-comment"></span>-->
                                        <!--<input type="text" class="form-control" placeholder="write something">-->
                                        <textarea class="form-control" rows="1" placeholder="write something" style="resize:none";></textarea>
                                    </div>
                                    <div class="row" style="padding-top:10px;margin-left:auto;margin-right:auto;">
                                        <!--<a href="#" class="blue-button post">Post Comment</a> <a href="#" class="blue-button upload"><span class="glyphicon glyphicon-camera"></span></a>-->
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;">Post Comment</button></a>
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;"><span class="glyphicon glyphicon-camera"></span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">  
                        <!--Wrevs-->            
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <ul class="nav nav-pills wrev-tabs">
                                        <li class="active"><a href="#">Past Wrevs</a></li>
                                        <li><a href="#">Attending Wrevs</a></li>
                                        <li><a href="#">MyWrevs</a></li>
                                    </ul>
                                    
                                    <div class="row" style="margin-left:auto;margin-right:auto; padding:10px;">
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;">View more</button></a>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#63308F; color:white; font-size:20px; padding:5px;">Create a Wrev</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="panel panel-default" style="background:#DBE4EB;">
                                <div class="panel-body">
                                    <img src="<?php echo $PATH_IMG?>uparrow.png" class="arrows"/>
                                    <img src="<?php echo $PATH_IMG?>downarrow.png" class="arrows"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <!--Palette-->              
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 style="text-align:center;"><span class="badge" style="color:white; background:#27AAE2;font-size:20px; border-radius:150px; padding:10px;width:40px;height:40px;">5</span> Items on Palette</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default" style="background:#70A9D6; border-radius:10px;">
                                                <div class="panel-body">
                                                    <img src="images/palette-uparrow.png" class="arrows"/>
                                                    <div class="panel panel-default" style="border-radius:15px;">
                                                        <div class="panel-body" style="padding-bottom:0px;">
                                                            <!--
                                                            <div class="row">
                                                                <div class="col-md-8" style="background:#2E5A7C;">
                                                                    <p style="color:white; font-size:15px; padding-top:5px;"><i class="fa fa-calendar"></i> Date</p>
                                                                </div>
                                                                <div class="col-md-4" style="background:#D5DEE5;">
                                                                    <p style="text-align:right; font-size:15px; padding-top:5px;"> # <i class="fa fa-heart-o"></i> | <i class="fa fa-share-square-o"></i></p>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                        <div class="panel-footer">
                                                            <p style="color:white; font-size:15px; padding-top:5px;"><i class="fa fa-calendar"></i> Date</p>
                                                            <p style="text-align:right; font-size:15px; padding-top:5px;"> # <i class="fa fa-heart-o"></i> | <i class="fa fa-share-square-o"></i></p>
                                                        </div>
                                                    </div>           
                                                    <img src="<?php echo $PATH_IMG?>palette-downarrow.png" class="arrows"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Friends-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 style="text-align:center;"><span class="badge" style="color:white; background:#27AAE2;font-size:20px; border-radius:150px; padding:18px 10px;width:55px;height:55px;">9.9k</span> Friends</h3>                        
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; margin-left:auto; margin-right:auto; display:block;">Show More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <!--Groups-->           
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 style="text-align:center;">Groups</h3>
                                    
                                    <div class="row">








                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DISPLAY PICTURES -->
                                    <!-- 
                                    <?php /*   for(int i =0;i<6;i++)
                                    {
                                        //echo everything
                                        ehco "";
                                        if(i%3==2)
                                            echo "<div class="col-md-4">".
                                                    "<div class="thumbnail default">".
                                                "<img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>"
                                                "<div class="caption" style="text-align:center;">"
                                                    "<p>Party Animals</p>"
                                                    "<p>546 Members</p>"
                                                "</div>"
                                            "</div>"
                                        "</div>";



                                    } */?>
                                -->






                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="thumbnail default">
                                                <img src="<?php echo $PATH_IMG?>party.jpg" style="border-radius:150%; width:100px; height:100px;"/>
                                                <div class="caption" style="text-align:center;">
                                                    <p>Party Animals</p>
                                                    <p>546 Members</p>
                                                </div>
                                            </div>
                                        </div>







                                    </div>
                                    <div class="row" style="margin-left:auto;margin-right:auto;">
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;">View more</button></a>
                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#00A79E; color:white; font-size:20px; padding:5px;">Create a Group</button></a></div>
                                    </div>
                            </div>
                        </div>
                        <!--Photos and Videos-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-justified wrev-tabs" style="font-size:24px;">
                                        <li class="active"><a href="#">Photos</a></li>
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                    
                                    <div class="row" style="padding-top:10px;margin-left:auto;margin-right:auto;">
                                        <!--<a href="#" class="blue-button post">Post Comment</a> <a href="#" class="blue-button upload"><span class="glyphicon glyphicon-camera"></span></a>-->
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;">Browse all</button></a>
                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;"><span class="glyphicon glyphicon-camera"></span></button></a>
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

<!--end of content-->

<!--footer
==================================================-->
    <div id="footer navbar-fixed-bottom">
        <div class="container links" style="text-align:center;">
            <p class="text-muted">
            <a href="http://wrevel.com/aboutus/" class="bottom-link">About Us</a>
            <a href="http://wrevel.com/privacy/" class="bottom-link">Privacy </a>
            <a href="http://wrevel.com/terms/" class="bottom-link">Terms </a>  
            <a href="http://www.tumblr.wrevel.com/blog/" class="bottom-link">Blog </a>
            <a href="http://www.wrevel.com/press/" class="bottom-link">Press </a>
            <a href="http://www.wrevel.com/careers/" class="bottom-link">Careers </a>
            <a href="http://wrevenues.wrevel.com/" class="bottom-link">Wrevenues </a>
            <a href="http://www.wrevel.com/index/contact/" class="bottom-link">Contact Us </a>
            <a href="http://www.wrevel.com/faq/" class="bottom-link">FAQ </a>
            <a href="http://www.wrevel.com/nation/" class="bottom-link">Nation</a>
            <a href="http://www.wrevel.com/partners/" class="bottom-link">Partners </a>
            
            <p class="copy_right">&copy; Wrevel, Inc. All Rights Reserved, 2013</p>
            </p>
        </div>
      
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script> 
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_PROFILE?>js/dropdown.js"></script>


</body>
</html> 
