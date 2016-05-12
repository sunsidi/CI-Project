<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Showroom</title>



<link href="<? echo $PATH_PROFILE?>cssbootstrap.css" rel="stylesheet">

<link href="<? echo $PATH_PROFILE?>cssbootstrap.min.css" rel="stylesheet">

<link href="<? echo $PATH_PROFILE?>cssbootstrap-theme.css" rel="stylesheet">

<link href="<? echo $PATH_PROFILE?>cssbootstrap-theme.min.css" rel="stylesheet">

<link href="<? echo $PATH_PROFILE?>cssmain.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/<? echo $PATH_PROFILE?>cssfont-awesome.min.css" rel="stylesheet">

</head>



<body>

<?php $this->load->view('header');?>



<!--content

==============================================-->

<div class="container">

	<div class="row" style="margin-top:50px;">



		<div class="col-md-8 col-md-offset-2">

        	<div class="col-md-2">

            

            	<!--Profile Image-->

        		<img src="<?php echo $PATH_IMG?>testimage.png" style="position:absolute; z-index:2; width:150px; height:150px; border-radius:150px; margin-top:-50px; border:2px solid #5A2381"/>

               </div>

    		<div class="col-md-6" style="background:#662E91; color:white;padding-bottom:2px; padding-top:2px;">

            

            <!--Name of user-->

        	<h2 style="text-align:center;">Name</h2>

        	</div>

        	<div class="col-md-4" style="background:#27AAE2; color:white; border-top-right-radius:5px;">

            <!--Reputation number-->

        	<h2>Reputation <span class="badge" style="color:#27AAE2; background:white;font-size:20px;vertical-align:middle; border-radius:50%; padding:8px 5px; width:35px;height:35px; text-align:center;">10</span></h2>

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

                        Quote

                        </p>

               		 </div>

                	<div class="row">  

                    	<!--Personal Info-->          	

						<div class="col-md-6">

    						<div class="panel panel-default">

        						<div class="panel-body">

                                	

                                    <!--Edit profile button-->

                                    <div style="text-align:center;">

                                    <button type="button" class="btn-lg" style="background:#1F638B; color:white;">Edit Profile</button>

                                    </div>

                                    

            						<p class="info"><span class="glyphicon glyphicon-user"></span> Gender</p>

                					<p class="info"><i class="fa fa-heart-o"></i> Status</p>

                					<p class="info"><i class="fa fa-calendar"></i> Birthday</p>

                					<p class="info"><i class="fa fa-map-marker"></i> Location</p>

                					<p class="info"><i class="fa fa-graduation-cap"></i> Education</p>

                					<p class="info"><i class="fa fa-envelope"></i> Email</p>

                					<p class="info"><i class="fa fa-phone"></i> Phone</p>

                					<p class="info"><span class="glyphicon glyphicon-link"></span> Links</p>

                                    

            					</div>

        					</div>

    					</div>

                        <!--Message-->

    					<div class="col-md-6">

    						<div class="panel panel-default">

        						<div class="panel-body">

                                	<div class="row">

                                    	<!--Message User

                                        <a href="#"><button type="button" class="btn btn-lg btn-block blue-button"><i class="fa fa-envelope"></i> Message "user"</button></a>-->

                                    </div>

                                    

                                    <div class="row" style="padding-top:10px;">  

                                    <!--Add to Friends                             		

                                        <a href="#"><button type="button" class="btn btn-lg btn-block blue-button"><span class="glyphicon glyphicon-user"></span> Add to Friends List</button></a>-->

                                        

                                     <!--Message Inbox button-->

                                     <a href="#"><button type="button" class="btn btn-lg btn-block blue-button"><i class="fa fa-envelope"></i> Check Inbox</button></a>

                                        

                                        

                                    </div>

                                    <!--Chatbox-->

                                    <div class="row" style="padding-top:15px;">

                                    	<p style="text-align:center; font-size:25px;">Chatbox</p>

                                    </div>

                                    <div class="row left-inner-addon" style="padding-top:10px;">

                                    	

                                        <textarea class="form-control" rows="1" placeholder="write something" style="resize:none";></textarea>

                                    </div>

                                    

                                    <div class="row" style="padding-top:10px;text-align:center;">

                                    	<!--Post comment button-->

                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;">Post Comment</button></a>

                                        <!--Upload image to comment-->

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

									

                                    <div class="row" style="text-align:center; padding:10px;">

                                    

                                    <!--View more wrevs-->

                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;">View more</button></a>

                                    <!--Link to form that creates a wrev-->

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

                    			 

                 									   	<!--Palette/Favorites-->          	

						<div class="col-md-6">

    						<div class="panel panel-default">

        						<div class="panel-body">

            						<h3 style="text-align:center;"><span class="badge" style="color:white; background:#27AAE2;font-size:20px; border-radius:150px; padding:10px;width:40px;height:40px;">5</span> Items on Palette</h3>

                                    <div class="row">

                                    	<div class="col-md-12">

                                        	<div class="panel panel-default" style="background:#70A9D6; border-radius:10px;">

                                            

                                            	<div class="panel-body">

                                                	<img src="<?php echo $PATH_IMG?>palette-uparrow.png" class="arrows"/>

                                                    

                                                    <div class="panel panel-default" style="border-radius:15px;">

                                         				<div class="panel-body" style="padding-bottom:0px;">

                                                        	

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

                                    

                                   <div class="row" style="text-align:center;">

                                      	<button type="button" class="btn btn-lg" style="background:#1F638B; color:white;">Edit Palette</button>

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

                                    

                                    <div class="row" style="text-align:center;">

                                    <!--Show more friends-->

                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;">Show More</button></a>

                                     <a href="#"><button type="button" class="btn btn-lg" style="background:#1F638B; color:white; font-size:20px;">Edit Friends</button></a>

                                    </div>

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

									<div class="row" style="text-align:center;">

                                    <!--Allows users to view all of user's groups-->

                                    <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px; padding:5px;">View more</button></a>

                                    <!--Button that creates a group-->

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

                                    

                                    <div class="row" style="padding-top:10px; text-align:center;">

                                    	

                                        <!--Allows to see all user's pictures and videos-->

                                        <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:20px;">Browse all</button></a>

                                        <!-- Upload image/video-->

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