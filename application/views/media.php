<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>The Stories We Tell | Wrevel - Discover Your World, Host & Experience Events</title>
<meta name="description" content="Our goal is to make your life a lot more exciting and easier. Take a few minutes to check out some of our films that can give you an idea on how we can help you.">
<meta name="keywords" content="media, videos, hotspots, new wrevel, meetups, explore">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
 src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        p{line-height: 120%;}
    </style>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container" style="margin-top:60px;">
    <div class="row row-centered" style="padding-bottom: 50px;">
        <div style="height:259px;background-image:url('<?php echo $PATH_IMG?>stories_backgroundimage.png');">
            <!--<img src="<?php echo $PATH_IMG?>stories_backgroundimage.png">-->
            <div class="col-md-3 col-md-offset-2" style="color:white;padding-top:1%;text-align:justify;padding-left:20px; padding-right:20px;">
                <h3 style="font-family: GillSans;">The Stories We Tell</h3>
                <p style="font-size: 17px;margin-top:-8px;">Our goal is to make your life a lot more exciting and easier. Take a few minutes to check out some of our films that can give you an idea on how we can help you.</p>
                <a class="btn btn-media" style="font-size:16px;" href="<?php echo base_url()."main/mywrevs"?>">Click here to start living.</a>
            </div>
        </div>
        <div class="col-md-10 col-centered col-sm-11 col-xs-11" style="margin-top:25px;">
            <!--<h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><img class="w_logo" src="<?php echo $PATH_IMG?>w1.png"/>Media</h1>-->
            <div class="col-md-3 col-sm-6">
                <a href="#" data-toggle="modal" data-target="#video1"><img class="img-responsive video" src="<?php echo $PATH_IMG?>newwrevel_thumbnail.png"/></a>
                <div class="modal fade" id="video1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content" style="background: black;">
                                    <div class="modal-header" style="border:none;">
                    <a href="javascript:;" onClick="toggleVideo('hide');" style="float: right;"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                                    </div>
                            <div class="modal-body">	
                                    <iframe style="width:100%;" height="315" src="//www.youtube.com/embed/ekb_yJ874kA" frameborder="0" allowfullscreen style="z-index:3;"></iframe>
                            </div>
          
                            </div>
                    </div>
                </div>
                <h4 style="font-family: GillSans;">The New Wrevel</h4>
                <p class="video_description">Six innovative features, a sleek new interface and much more. Welcome to the new Wrevel.</p>
            </div>
            
            <div class="col-md-3 col-sm-6 ">
                <a href="#" data-toggle="modal" data-target="#video2"><img class="img-responsive video" src="<?php echo $PATH_IMG?>meetups_thumbnail.png"/></a>
                <div class="modal fade" id="video2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content" style="background: black;">
                                    <div class="modal-header" style="border:none;">
                    <a href="javascript:;" onClick="toggleVideo('hide');" style="float: right;"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                                    </div>
                            <div class="modal-body">	
                                    <iframe style="width:100%;" height="315" src="//www.youtube.com/embed/J8cZ_CDWlI0" frameborder="0" allowfullscreen style="z-index:3;"></iframe>
                            </div>
          
                            </div>
                    </div>
                </div>
                
                <h4 style="font-family: GillSans;">Meet Ups</h4>
                <p class="video_description">Sometimes, it's better to not be so unique. The <em>Meet Ups</em> category is your chance to find people just like you.</p>
            </div>
            
            <div class="col-md-3 col-sm-6 ">
                <a href="#" data-toggle="modal" data-target="#video3"><img class="img-responsive video" src="<?php echo $PATH_IMG?>exploringyourcity_thumbnail.png"/></a>
                <div class="modal fade" id="video3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content" style="background: black;">
                                    <div class="modal-header" style="border:none;">
                    <a href="javascript:;" onClick="toggleVideo('hide');" style="float: right;"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                                    </div>
                            <div class="modal-body">	
                                    <iframe style="width:100%;" height="315" src="//www.youtube.com/embed/pE_seKX_tzo" frameborder="0" allowfullscreen style="z-index:3;"></iframe>
                            </div>
          
                            </div>
                    </div>
                </div>
                
               <h4 style="font-family: GillSans;">Exploring Your City</h4>
                <p class="video_description">You never need to look too far. The <em>Exploring Your City</em> category is your chance to appreciate the places closest to you.</p>
            </div>
            
            <div class="col-md-3 col-sm-6 ">
                <a href="#" data-toggle="modal" data-target="#video4"><img class="img-responsive video" src="<?php echo $PATH_IMG?>hotspots_thumbnail.png"/></a>
                <div class="modal fade" id="video4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content" style="background: black;">
                                    <div class="modal-header" style="border:none;">
                    <a href="javascript:;" onClick="toggleVideo('hide');" style="float: right;"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                                    </div>
                            <div class="modal-body">	
                                    <iframe style="width:100%;" height="315" src="//www.youtube.com/embed/CL28xb8x47M" frameborder="0" allowfullscreen style="z-index:3;"></iframe>
                            </div>
          
                            </div>
                    </div>
                </div>
                
                <h4 style="font-family: GillSans;">Hotspots</h4>
                <p class="video_description">There's always something happening. The <em>Hotspots</em> category is your chance to do something right now.</p>
            </div>
        </div>
    </div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    
	<!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script>-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41514976-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html> 