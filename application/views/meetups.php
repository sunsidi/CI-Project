<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Meetups</title>

<link href="<? echo $PATH_PROFILE?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_PROFILE?>css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="<? echo $PATH_PROFILE?>css/mosaic.css" type="text/css" media="screen">
<link href="<? echo $PATH_PROFILE?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/<? echo $PATH_PROFILE?>css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<!--header
===========================================-->

<nav class="navbar navbar-custom navbar-static-top" style="width: 100%;height: 68px; background-color:#4b5aa5;">
    <div class="navbar-header">
        <div class="col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
            <a class="navbar-brand navbar-collapse collapse" href="#"><img src="images/testimage.png"
                                                style="width:64px; height:64px; border-radius: 150px;
                                                -webkit-border-radius: 150px;
                                                -moz-border-radius: 150px; position: relative;
                                                margin-top:-22%; margin-left:10%; border:2px solid #662E91;"/>
                                    <p style="color: white; margin-top:-70%; margin-left:120%;">Name</p>
            </a>
        </div>
    </div>
  

        <div class="col-md-offset-5 col-sm-offset-5 col-xs-offset-3">
          <a class="navbar-brand" href="#"><img src="images/wrevel_logo.png"
                                                style="width:200px; display:block; margin-top:-3%;"/></a>
        </div>


    <div class="navbar-collapse collapse">
    <div class="col-md-offset-9 col-sm-offset-9">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group" style="margin-top: 4%;">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    </div>
    </div>

</nav>

<!--end of header-->

<!--tabs
===========================================-->
	<div class="row" style="text-align:center;">
			<div class="btn-group btn-group-lg">
    			<a href="mywrevs.html"><button type="button" class="btn tab" style="font-size:30px;">mywrevs</button></a>
  				<a href="hub.html"><button type="button" class="btn tab" style="font-size:30px;">the hub</button></a>
  				<a href="showroom.html"><button type="button" class="btn tab" style="font-size:30px;">showroom</button></a>
    		</div>
     </div>

<!--end of tabs-->

<!--content
==============================================-->
<div class="container">
<div class="row" style="margin:30px;">
	<p class="event"><img src="images/meet_ups_icon.png" class="wrev-image"/> <strong> Meet Ups</strong> <span class="pronounce">[bahr-s]</span></p>
	<p class="definition">where you can find an activity with no boundaries; a party; a group of people with similar interests.</p>       
      
  <div class="row"> 
    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" style="margin-top:10px;">      
    	<form class="form-inline" role="form">
  			<div class="form-group">
            	<div class="left-inner-addon">
                <span class="glyphicon glyphicon-search"></span>
    			<label class="sr-only">Search</label>
    			<input type="search" class="form-control" style="font-size:20px;" placeholder="search name of wrev"></div>
  			</div>
  			<div class="form-group">
            	<div class="left-inner-addon">
                <i class="fa fa-map-marker"></i>
    			<label class="sr-only">Location</label>
    			<input type="text" class="form-control"  style="font-size:20px;" placeholder="New York, NY"></div>
  			</div>
       
  			<div class="btn-group">
    		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="font-size:20px; padding:1px 10px;">
      		price
      		<span class="caret"></span>
    		</button>
    		<ul class="dropdown-menu">
      			<li><a href="#">Dropdown link</a></li>
      			<li><a href="#">Dropdown link</a></li>
    		</ul>
  			</div>
  		
	
  			<button type="submit" class="btn" style="background:#1C74BB; color:white; font-size:20px; padding:1px 10px;">go</button>
		</form>
    </div>  
    </div>  
    <div class="container" style="margin-bottom:50px; margin-top:20px;">
    	<div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12" style="padding-top: 30px;">
                <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;">
                            <!--Number of likes and like button-->
                            <span>14 </span><i class="fa fa-heart-o"></i> | 
                            <!--Add to Palette-->
                            <span class="glyphicon glyphicon-list-alt"></span> | 
                            <!--Share button-->
                            <i class="fa fa-share-square-o"></i> </p>
			</div>
                        <!--Location of event-->
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                        
                        <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
                        <!--Event Image-->
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;">
                                    <!--Name of event-->
                                    <strong>Name of Event</strong> 
                                    <!--Date of event-->
                                    <span class="badge date meetups-date">May 25</span></p>
                                    <!--Number of people attending-->
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
              </div>
              
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12" style="padding-top: 30px;">
              <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12" style="padding-top: 30px;">
            	<div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 1;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details" style="z-index: 2; position: absolute;">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
            <div class="col-md-3 col-sm-6  col-xs-12" style="padding-top: 30px;">
                <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
                  </div>
              </div>
                          
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12" style="padding-top: 30px;">
              <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12" style="padding-top: 30px;">
            	<div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 1;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details" style="z-index: 2; position: absolute;">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12" style="padding-top: 30px;">
                <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
                  </div>
              </div>
                          
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12" style="padding-top: 30px;">
              <div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 0;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
            <div class="col-md-3 col-md-offset-1 col-sm-6  col-xs-12" style="padding-top: 30px;">
            	<div class="mosaic-block bar2">
		    <a target="_blank" class="mosaic-overlay meetups-box" style="background-color: rgba(161,72,158,0.8);display: inline; left: 0px;">
			<div class="col-md-12" style="height: 50px; background-color: rgba(83,30,82,0.8);">
                            <p style="text-align:center; color:white; font-size:28px; margin-top:5px;"><span>14 </span><i class="fa fa-heart-o"></i> | <span class="glyphicon glyphicon-list-alt"></span> | <i class="fa fa-share-square-o"></i> </p>
			</div>
                        
                        <p class="location location-romance"><i class="fa fa-map-marker"></i> Location</p>
                         <!--Description -->
                        <p class="description">
                        Description here
                        </p>
                        
                        <!--Click to lead to individual listing page-->
                        <p class="more">Show more >></p>
		    </a>
			
			<div class="mosaic-backdrop" style="display: block;">
                                <div style="position: absolute; border-radius:7px; background-color: rgba(211,178,210,0.3); width: 325px; height: 400px; z-index: 1;"></div>
				<img src="images/party.jpg" style="max-width:100%; min-width:100%; max-height:100%; min-height:100%;">
				<div class="details" style="z-index: 2; position: absolute;">
                                    <p style="margin:10px;"><strong>Name of Event</strong> <span class="badge date meetups-date">May 25</span></p>
                                    <p style="margin:10px;"><span class="badge attending">8</span> Attending</p>
                                </div>
                        </div>
		</div>
            </div>
            
        </div>
    </div>
    <div class="row" style="margin-left:35%; padding:10px;">
            <a href="#"><button type="button" class="btn btn-lg" style="background:#1A75BF; color:white; font-size:25px; padding:5px;">View more</button></a>
            <a href="#"><button type="button" class="btn btn-lg" style="background:#63308F; color:white; font-size:25px; padding:5px;">Create a Wrev</button></a>
    </div>

</div>
</div>
<!--end of content-->

<!--footer
==================================================-->
	<div id="footer navbar-fixed-bottom">
		<div class="container links" style="text-align:center; margin-top:10%;">
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dropdown.js"></script>
     <script type="text/javascript" src="js/mosaic.1.0.1.js"></script>
    <script type="text/javascript">  
			
			jQuery(function($){
				
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
				
				$('.fade').mosaic();
				
				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});
			});
		    
  </script>
</body>
</html> 