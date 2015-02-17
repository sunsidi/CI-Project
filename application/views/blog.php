<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog</title>
<meta name="description" content="Welcome to the Wrevel blogspace! Here we will share with you our thoughts on all things Wrevel. Stay posted!">
<meta name="keywords" content="event hosting, parties, new york city life, tickets, wrevel, online tickets, tech company, spaces, buy tickets, services, blog">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  
<?php $this->load->view('header');?>    
 

<!--content
==============================================-->
<div class="container" style="padding:0 6% 6%; margin-top:60px;">
    <center>
        <div>
            <h1 style="text-align:center;font-size:40px;font-family:GillSans;color:white;"><img src="<?php echo $PATH_IMG?>w1.png"/>Blog</h1>
        </div>
    </center>
    <!-- BASE BLOGS THAT WILL ALWAYS BE THERE -->
    <div class="row">
        <div class="col-md-6" style="margin-top:30px;">
            <a href="<?php echo base_url().'info/blog3'?>">
                <div style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo $PATH_IMG?>NYE-2015-Wrev.jpg); background-size: 100% 322px;">
                    <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(46,49,146,0.7), rgba(46,49,146,0.7));width: 100%;">
                        <p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">New Years 2015</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6" style="margin-top:30px;">
            <a href="<?php echo base_url().'info/blog1'?>">
                <div class="col-md-6" style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo $PATH_IMG?>grind.png); background-size: 100% 322px;">
                    <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(239,65,54,0.7), rgba(239,65,54,0.7));width: 100%;">
                        <p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">What's in store for Wrevel?</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6" style="margin-top:30px;">
            <a href="<?php echo base_url().'info/blog0'?>">
                <div style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo $PATH_IMG?>collageblog.png); background-size: 100% 322px;">
                    <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(46,49,146,0.7), rgba(46,49,146,0.7));width: 100%;">
                        <p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Introducing Wrevel's Project Phoenix</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="margin-top:30px;">
	    <a href="<?php echo base_url().'info/blog2'?>">
                <div style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo $PATH_IMG?>toolsstartup.png); background-size: 100% 322px;">
                    <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(14,122,76,0.7), rgba(14,122,76,0.7));width: 100%;">
                        <p style="text-align: center;padding-left: 15px;padding-right:15px;color: white; font-size: 32px;">8 Essential Tools for a Startup Entrepreneur</p>
                    </div>
                </div>
            </a>
        </div>
    <!-- END OF BASE BLOG (DON'T CLOSE DIV YET SO WE CAN ADD TO THE END.-->
    
    <!-- START OF ADMIN CREATED BLOGS -->
    <?php 
    $start = 2;
    $alt = 1;
    if(isset($blogs) && !empty($blogs)) {
        for($i = 0; $i < count($blogs); $i++) {
            if(($start == 4 && $alt == 1) || ($start == 2 && $alt == 0)) {?>
                        <div class="row">
            <?php }
            if($alt == 1) {?>
                <div class="col-md-3 col-sm-6" style="margin-top:30px;">
                    <a href="<?php echo base_url().'blog/blog_info/'.$blogs[$i]['id'];?>">
                        <div style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo base_url().'/uploads/'.$blogs[$i]['blog_filename'];?>); background-size: 100% 322px;">
                            <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(14,122,76,0.7), rgba(14,122,76,0.7));width: 100%;">
                                <p style="text-align: center;padding-left: 15px;padding-right:15px;color: white; font-size: 32px;"><?php echo $blogs[$i]['blog_title'];?></p>
                            </div>
                        </div>
                    </a>
                </div>
    <?php
            }
            else {?>
                <div class="col-md-6" style="margin-top:30px;">
                    <a href="<?php echo base_url().'blog/blog_info/'.$blogs[$i]['id'];?>">
                        <div style="position: relative;width: 100%; height: 322px; background:linear-gradient(rgba(255,255,255,0), rgba(255,255,255,0)),url(<?php echo base_url().'/uploads/'.$blogs[$i]['blog_filename'];?>); background-size: 100% 322px;">
                            <div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(46,49,146,0.7), rgba(46,49,146,0.7));width: 100%;">
                                <p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;"><?php echo $blogs[$i]['blog_title'];?></p>
                            </div>
                        </div>
                    </a>
                </div>
    <?php 
            }
            $start--;
            if($start == 0) { // done with images. Start the next line.
                if($alt == 1) { //2 big images.
                    $alt = 0;
                    $start = 2;
                }
                else if($alt == 0) { //4 small images.
                    $alt = 1;
                    $start = 4;
                }?>
                        </div>
                <?php 
            }
        }
    }?>
    </div> <!-- END OF ADMIN CREATED BLOGS -->
</div>	    
 		   
	    <!--<a href="#"><div class="col-md-3" style="position: relative;width: 275px; height: 322px; background:linear-gradient(rgba(249,237,164,0.3), rgba(249,237,164,0.3)),
	    url(<?php echo $PATH_IMG?>dance_image.png); background-size: 275px 322px;">
		<div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(249,237,164,0.7), rgba(249,237,164,0.7));width: 275px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Confessions of a Danceaholic</p>
		</div>
	    </div></a>
	    
	    <a href="#"><div class="col-md-3" style="position: relative;width: 275px; height: 322px; margin-left: 15px; background:linear-gradient(rgba(46,49,146,0.3), rgba(46,49,146,0.3)),
	    url(<?php echo $PATH_IMG?>party_image.png); background-size: 275px 322px;">
		<div style="position:absolute; bottom:0px;margin-left: -15px;background:linear-gradient(rgba(46,49,146,0.7), rgba(46,49,146,0.7));width: 275px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Brooklyn Nights</p>
		</div>
	    </div></a>
	    
	    <a href="#"><div class="col-md-6" style="position: relative;width: 565px; height: 322px; margin-left: 15px; background:linear-gradient(rgba(46,49,146,0.3), rgba(46,49,146,0.3)),
	    url(<?php echo $PATH_IMG?>girl_image.png); background-size: 565px 322px;">
		<div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(46,49,146,0.7), rgba(46,49,146,0.7));width: 565px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Weekdays at Le Souk</p>
		</div>
	    </div></a>
		    
	    <a href="#"><div class="col-md-6" style="position: relative;width: 565px; height: 322px; margin-top: 15px; background:linear-gradient(rgba(0,167,157,0.3), rgba(0,167,157,0.3)),
	    url(<?php echo $PATH_IMG?>performer_image.png); background-size: 565px 322px;">
		<div style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(0,167,157,0.7), rgba(0,167,157,0.7));width: 565px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Summer Activities in NYC 2014</p>
		</div>
	    </div></a>
	    
	    <a href="#"><div class="col-md-3" style="position: relative;width: 275px; height: 322px; margin-top: 15px; margin-left: 15px; background:linear-gradient(rgba(239,65,54,0.3), rgba(239,65,54,0.3)),
	    url(<?php echo $PATH_IMG?>rock_image.png); background-size: 275px 322px;">
		<div style="position:absolute; bottom:0px;margin-left: -15px;background:linear-gradient(rgba(239,65,54,0.7), rgba(239,65,54,0.7));width: 275px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Top 10 Summer Rock Concerts in NYC</p>
		</div>
	    </div></a>
	    
	    <a href="#"><div class="col-md-3" style="position: relative;width: 275px; height: 322px; margin-top: 15px; margin-left: 15px; background:linear-gradient(rgba(114,102,88,0.3), rgba(114,102,88,0.3)),
	    url(<?php echo $PATH_IMG?>wine_image.png); background-size: 275px 322px;">
		<div style="position:absolute; bottom:0px;margin-left: -15px;background:linear-gradient(rgba(114,102,88,0.7), rgba(114,102,88,0.7));width: 275px;">
		<p style="text-align: center;padding-left: 0px;color: white; font-size: 32px;">Best Places for a Wine Night in NYC</p>
		</div>
	    </div></a>
	    -->
    </div>
    
    <!--<a href="#"><img src="<?php echo $PATH_IMG?>click_for_more_button.png"  style="display: block; margin-left: auto;margin-right: auto;margin-bottom:25px;"/></a>-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>


</body>
</html> 