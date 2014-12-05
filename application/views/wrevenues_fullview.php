<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Wrevenues</title>
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
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div class="container" style="padding-bottom:50px;">
	<div class="row" style="margin-top:50px;">
		<h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><a href="<?php echo base_url().'wrevenues/wrevenues_main'?>" style="color:white;"><img class="w_logo" src="<?php echo $PATH_IMG?>w1.png"/>Wrevenues</a></h1>
		<div class="col-md-8 col-md-offset-2">
			<div class="panel" style="border:none;border-radius:15px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">
				<div class="panel-header" style="font-family:GillSans;text-align:center;color:white;background:linear-gradient(rgba(70, 107, 121, 0.45), rgba(70, 107, 121, 0.45)),url(<?php echo $PATH_IMG?>balt.jpg); background-size:100%;border-top-left-radius:10px;border-top-right-radius:10px;">
					<div class="row" style="padding:2%;">
						<div class="col-sm-4">
							<h2>54 <i class="fa fa-heart-o"></i></h2>
							<a class="btn wrevenues-palette"><span class="glyphicon glyphicon-list-alt"></span></a>
							<a class="btn wrevenues-share"><i class="fa fa-share-square-o"></i></a>
							<!--<p><i class="fa fa-clock-o" style="width:50px;"></i> Open Mon, Tues, Wed, Thurs, Fri, Sat, and Sun</p>-->
						</div>
						<div class="col-sm-4" style="padding-top:3%;">
							<a class="btn wrevenues-name">Balthazar Restaurant</a>
							
							<h4 style="font-size:19px;" id="pricingInfo" data-html="true" data-content="$ - Free to $10 </br> $$ - $11 to 25 </br> $$$ - $26 to 49 </br> $$$$ - $50 to higher" data-trigger="hover" data-placement="bottom"><img src="<?php echo $PATH_IMG?>dollarbills_icon.png"/> $$$$ </h4>
						</div>
						<div class="col-sm-4">
							<div>
							<a href="#" data-toggle="modal" data-target="#editwrevenue" class="btn edit-wrevenue">Edit Wrevenue</a>
							
							<div class="modal fade" id="editwrevenue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content" style="background:#C2D2DC;">
										<div class="modal-header" style="background-color: #628DA3;padding:10px;">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                                            <p style="font-size: 26px; color: white;text-align: center;"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Edit Wrevenue</p>
                                        </div>
										<div class="modal-body">
											<!--<form class="form-horizontal" role="form">-->
												<div class="form-group row">
													<label class="col-sm-3">Name:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Description:</label>
													<div class="col-sm-8">
														<textarea class="form-control" rows="3"></textarea>
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Location:</label>
													<div class="col-sm-8">
														<textarea class="form-control" rows="3"></textarea>
													</div>	
												</div>
												
												<div class="form-group row">
													<label class="col-sm-3">Phone:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Email:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Website:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Facebook:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Twitter:</label>
													<div class="col-sm-8">
														<input class="form-control">
													</div>	
												</div>
												<div class="form-group row">
												<label class="col-sm-3">price:</label>
												<div class="col-sm-4">
													<select class="form-control">
														<option value="" selected="selected"></option>
														<option value="$">$</option>
														<option value="$$">$$</option>
														<option value="$$$">$$$</option>
														<option value="$$$$">$$$$</option>
													</select>
												</div>
											</div>
												
											<!--</form>-->
											<div class="row" style="text-align:right;">
												<button class="btn" type="submit" style="background:#478ABC;color:white;">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							</div>
							<div style="margin-top:7px;">
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<i class="fa fa-star fa-2x"></i>
							<span style="font-size:20px;">(#)</span>
							</div>
							<a href="#" data-toggle="modal" data-target="#review" class="btn review-btn">Write a Review</a>
							
							<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content" style="background:#C2D2DC;">
										<div class="modal-header" style="background-color: #628DA3;padding:10px;">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                                            <p style="font-size: 26px; color: white;text-align: center;"><i class="fa fa-pencil-square-o" style="font-size:30px;"></i> Write Your Review</p>
                                        </div>
										<div class="modal-body" style="color:#414042;">
											<!--<form class="form-horizontal" role="form">-->
												<div class="form-group row">
													<label class="col-sm-3">Rating:</label>
													<div class="col-sm-5">
														<div class="rating">
														<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
														</div>
													</div>
													<div class="col-sm-4">
														<p>Roll over stars, </br>then click to rate.</p>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3">Your Review </br><span style="font-weight:200;">140 character limit</span></label>
													<div class="col-sm-9">
														<textarea class="form-control" rows="3" maxlength="140"></textarea>
													</div>		
												</div>
											<!--</form>-->
											<div class="row" style="text-align:right;">
												<button class="btn" type="submit" style="background:#478ABC;color:white;">Post</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
				
				<div class="panel-body background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
					<div class="row">
						<div class="col-md-6">
							<!--Shoutout-->
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>shoutout_icon.png"/> &nbsp; Shoutout:</h4>
							<div class="row" style="padding:3% 20% 0%; font-size:15px;text-align:center;">
								<img src="<?php echo $PATH_IMG?>/balt.jpg" class="shoutout-image"/>
								<p>Name</p>
								<div style="background:#F0F3F6;border-radius:8px;padding:10px;">Shoutout here</div>
								
							</div>
												
							
							<!--Description-->		
							<div class="margin-top:40px;">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>details_icon.png"/> &nbsp; Wrevenue Details:</h4>
							<div class="row" style="padding:3% 20% 0%; font-size:15px;">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								
							</div>
							</div>
							
							<!--Upcoming Wrevs-->
							<div style="margin-top:40px;">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>w_icon2.png"/> &nbsp; Upcoming Wrevs</h4>
							<div class="row" style="padding:3% 10% 0%;">
								<div class="col-md-12" style="position:relative;background-image:url(<?php echo $PATH_IMG?>balt.jpg); background-size:100%;padding:10px 0px 0px; color:white;">
									<div style="padding:0 10px 30px;">
									<p style="text-align:right;"><span class="wrevenue-attending">182</span><span class="wrevenue-attending-text">Attending</span></p>
									<div style="margin-left:auto;margin-right:auto;text-align:center;">
											<a class="btn wrevenue-wrev">Name of event</a>
											<span class="pull-right" style="position:relative;"><i class="fa fa-clock-o"></i>10:00PM</span>
									</div>
									</div>		
									<div style="background:rgba(0,0,0,0.5);postion:absolute;bottom:0;left:0;padding:5px 10px;">
										<i class="fa fa-calendar"></i> Fri Oct 2 <span class="pull-right">53 <i class="fa fa-heart-o"></i> | <a href="#"><span class="glyphicon glyphicon-list-alt"></span></a> | <a href="#"><i class="fa fa-share-square-o"></i></a></span>
									</div>
									
								</div>
								
							</div>
							</div>
							<!--Contact Info-->
							<div style="margin-top:40px;">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>primary_contact_icon.png"/> &nbsp; Contact</h4>
								<div style="padding:3% 17%">
									<p class="info"><span style="padding-right:30px;"><img src="<?php echo $PATH_IMG?>globe_icon2.png"/></span> website link here</p>
									<p class="info"><i class="fa fa-facebook" style="width:47px;margin-left:6px;"></i> facebook link here</p>
									<p class="info"><i class="fa fa-twitter" style="width:47px;margin-left:6px;"></i> twitter link here</p>
									<p class="info"><span style="padding-right:33px;"><img src="<?php echo $PATH_IMG?>phone_icon2.png"/></span> phone number</p>
									<p class="info"><span style="padding-right:28px;"><img src="<?php echo $PATH_IMG?>email_icon2.png"/></span> email address</p>
								</div>
							</div>
							
						</div>
						<div class="col-md-6">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>map_icon.png"/> &nbsp; Where is it?</h4>
							<div style="text-align:center;font-size:18px;padding:20px;line-height:60%;">
								<p>67 West St, Brooklyn, NY 10019</p>
								<p style="font-family:GillSans">Neighborhood, </p>
							</div>
							
							<div>
								Google map here
							</div>
							
							<div style="margin-top:40px;">
							<h4 style="padding-left:30px;"><img src="<?php echo $PATH_IMG?>clock_icon.png"/> &nbsp; Hours</h4>
								<div style="padding:0% 17%;font-size:18px;line-height:70%;">
									<p><em>Thursday</em> &nbsp;&nbsp 10:00PM to 3:00PM</p>
									<p><em>Friday</em> &nbsp;&nbsp 10:00PM to 3:00PM</p>
								</div>
							</div>
							<div style="margin-top:40px;text-align:center;">
							<h4><img src="<?php echo $PATH_IMG?>reviews_icon.png"/> &nbsp; Reviews</h4>
								<div style="padding-left:20%;padding-right:20%;">
								<div style="padding:0% 17%;font-size:18px;line-height:70%;background:#F6F8F9;border-radius:10px;padding:10px;">
									<div style="text-shadow: 1px 1px 3px #000000;color:white;">
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
										<i class="fa fa-star" style="font-size:25px;"></i>
									</div>
									<div style="margin-top:20px;">
										<!--Person's profile image of who posted here-->
										<img src="<?php echo $PATH_IMG?>/balt.jpg" class="shoutout-image"/>
										<p style="margin-top:10px;">Name</p>
										
										<p style="margin-top:20px;">"Review here"</p>
									</div>
								</div>
								</div>
								<a href="#" data-toggle="modal" data-target="#allreviews" class="btn morereviews" style="margin-top:10px;">More Reviews</a>
							
								<div class="modal fade" id="allreviews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content" style="background:#C2D2DC;">
										<div class="modal-header" style="background-color: #628DA3;padding:10px;">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>	
                                            <p style="font-size: 26px; color: white;text-align: center;"> <img src="<?php echo $PATH_IMG?>shoutout_iconwhite.png"/> All Reviews</p>
                                        </div>
										<div class="modal-body" style="color:#414042;">
											
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
	</div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
	<script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	<script>
	$('#pricingInfo').popover();
	</script>
</body>
</html> 