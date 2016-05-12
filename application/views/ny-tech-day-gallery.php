<!DOCTYPE HTML>
<!--
/*
 * Bootstrap Image Gallery Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Wrevel Photo Gallery On Tech-day</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="<? echo $PATH_BOOTSTRAP?>css/demo.css">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<?php $this->load->view('header');?>
<div class="container" style="padding-bottom:50px;">
  
   <div class="row row-centered">	 
   	<div style="height:219px;background-image:url('<?php echo $PATH_IMG?>techday_gallery_smaller.jpg');text-align:left;position:relative;">
   	 <p style="font-size:27px;color:white; position:absolute; bottom:20px; left:18%;font-weight:bold;">Wrevel @ NY Techday 2015</p>	
   	</div>	 
    <!-- The container for the list of example images -->
   
    <div id="links" style="margin-top:20px;"></div>
    <br>
   </div> 
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="background:black;">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="color:white;"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer" style="border:none;">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer');?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap-image-gallery.js"></script>
<script src="<? echo $PATH_BOOTSTRAP?>js/demo.js"></script>
</body> 
</html>