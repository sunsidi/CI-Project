<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Showroom</title>

<link href="<? echo $PATH_PROFILE?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php $this->load->view('header');?>

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

                                     <div style="text-align:center;">
                                         <a href="<?php echo base_url()."main/edit_form"?>" data-toggle="modal" data-target="#basicModal">
                                                <button type="button" class="btn-lg" style="background:#1F638B; color:white;">Edit Profile</button>
                                        </a>
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
                                        <a href="<?php echo base_url()."chat/message/".$username?>"><button type="button" class="btn btn-lg btn-block blue-button"><i class="fa fa-envelope"></i> Message "user"</button></a>
                                    </div>

                                    <!-- TODO ADD COMPOSE MESSAGE FADE THING HERE!!!!! -->
                                    
                                

                                <!-- added compose message! -->

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

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script> 
</body>
</html> 