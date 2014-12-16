<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wrevenue Posted Success</title>

<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view('header');?>
<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel" style="background:none; border:none; box-shadow:none; color:white;">
    		<div class="panel-body">
				<div class="row">
        			<div class="col-md-6 col-sm-6" style="background:#79749E; height:75px; text-align:center; padding-top:15px; border-top-left-radius:10px;">
            			<img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:180px;z-index:1;"/>
        			</div>
         			<div class="col-md-6 col-sm-6" style="background:#6CA5CC; height:75px; text-align:center; font-size:35px; padding:15px 10px 10px 0;  border-top-right-radius:10px;">
            			<p>Wrevenue Status</p>
        			</div>
     			</div>
     			<div class="row" style="background:#E2E9EE;text-align:center; padding:50px 20px; font-size:20px; color:black; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
     				<p>Congratulations!</p>
                    <p>Your Wrevenue has been posted successfully!</p>
                  	<p><a href="#"><button class="btn" type="button" style="background:#79749E; font-size:20px; color:white;">Create another Wrevenue</button></a></p>
                    <p><a href="<?php echo base_url().'wrevenues/wrevenues_main';?>"><button class="btn" type="button" style="background:#6CA5CC; font-size:20px; color:white;">Wrevenues</button></a></p>  
    			</div>
     		</div>
         </div>
     </div>
</div>
</div>	 
<?php $this->load->view('footer');?>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>-->
    <!--<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
</body>
</html>