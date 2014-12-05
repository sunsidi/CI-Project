<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $category?></title>

 <?php $event_info =$this->_ci_cached_vars;?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/mosaic.css" type="text/css" media="screen">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container">
<div class="row" style="margin:30px;">
  <p class="event"><img src="<?php echo $PATH_IMG?>groups_icon.png"/> <strong>Groups </strong></p>
  <div class="container" style="margin-top: 30px;">
  <div class="col-md-offset-2 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>hotspots.png); background-size: 200px 280px; border-radius:5px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>party_image.png); background-size: 200px 280px;border-radius:5px; margin-left: 8px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>dance_image.png); background-size: 200px 280px;border-radius:5px;margin-left: 8px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>icebreakers_image.png); background-size: 200px 280px;border-radius:5px;margin-left: 8px;"></div>
  </div>
  <div class="container" style="margin-top: 15px;">
    <div class="col-md-offset-2 col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>hotspots.png); background-size: 200px 280px;border-radius:5px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>party_image.png); background-size: 200px 280px;border-radius:5px;margin-left: 8px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>dance_image.png); background-size: 200px 280px;border-radius:5px;margin-left: 8px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12" style="position: relative;width: 200px; height: 280px; background:linear-gradient(rgba(70,107,121,0.5), rgba(70,107,121,0.5)),
	    url(<?php echo $PATH_IMG?>icebreakers_image.png); background-size: 200px 280px;border-radius:5px;margin-left: 8px;"></div>
  <div class="col-md-2 col-sm-6 col-xs-12"></div>
  </div>
</div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="<?php echo $PATH_BOOTSTRAP?>js/mosaic.1.0.1.js"></script>
  <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>jquery.cookie.js"></script>
</body>
</html> 