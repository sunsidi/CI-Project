<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Careers - Open Positions</title>
<meta name="description" content="Looking for a way to get into the startup community? Apply for a job with Wrevel, and begin your next adventure!">
<meta name="keywords" content="Tech jobs, Startup jobs, employment, ticketing platform, careers, tech startup, brooklyn jobs, brooklyn startup, internship, startup, e-commerce">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
  <div class="container" style="padding-bottom:100px;">
	<div class="row" style="margin-top:20px;">
		<div class="col-md-10 col-md-offset-1" style="text-align:center;">
			<h1 style="text-align:center;font-size:40px;font-family:GillSans;color:white;"><img src="<?php echo $PATH_IMG?>w1.png"/>Careers</h1>
			<div class="row" style="margin-top:50px;">
				<div class="col-md-5">
					<div class="panel" style="border:none; border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3); box-shadow:4px 4px 4px rgba(0, 0, 0, .3);background:#F3F7FA;">
						<div class="panel-heading" style="background:#6A8BA8;padding:20px;">
							<h1 class="panel-title" style="color:white; font-size:23px;font-family:GillSans;">Engineering/Web Development <img src="<?php echo $PATH_IMG?>tool_icon.png" class="pull-right"></h1>
						</div>
						<div class="panel-body" style="font-size:20px;padding:30px;">
							We are looking for talented and skilled individuals who are good at problem solving and don&rsquo;t  have to be micromanaged.
							<div class="row" style="margin-top:35px;">
								<button class="btn apply"  data-toggle="modal" data-target="#apply" onclick="change_category('Engineering/Web Development Application')">Apply Now</button>
							</div>	
						</div>
					</div> 
				</div>
				<div class="col-md-5 col-md-offset-2">
					<div class="panel" style="border:none; border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3); box-shadow:4px 4px 4px rgba(0, 0, 0, .3);background:#F3F7FA;">
						<div class="panel-heading" style="background:#6A8BA8;padding:20px;">
							<h1 class="panel-title" style="color:white; font-size:23px;font-family:GillSans;">Media/Design <img src="<?php echo $PATH_IMG?>eye_icon.png" class="pull-right"></h1>
						</div>
						<div class="panel-body" style="font-size:20px;padding:20px 30px;">
							Inspiration leads to innovation and we at Wrevel are always looking to innovate through inspirations. We&rsquo;re seeking smart, humble teammates who aren&rsquo;t afraid to try new things and think outside the box.
							<div class="row">
								<button class="btn apply"  data-toggle="modal" data-target="#apply" onclick="change_category('Media/Design')">Apply Now</button>
							</div>	
						</div>
					</div> 
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-5">
					<div style="font-size:30px; background:#DFE6EC;border-radius:150%;padding:35px;-moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.3);-webkit-box-shadow: 0px 0px 4px rgba(0,0,0,0.3);box-shadow: 0px 0px 4px rgba(0,0,0,0.3);">
					Open Positions
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-5">
					<div class="panel" style="border:none; border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3); box-shadow:4px 4px 4px rgba(0, 0, 0, .3);background:#F3F7FA;">
						<div class="panel-heading" style="background:#6A8BA8;padding:20px;">
							<h1 class="panel-title" style="color:white; font-size:23px;font-family:GillSans;">PR/ Social Media <img src="<?php echo $PATH_IMG?>chat_icon.png" class="pull-right"></h1>
						</div>
						<div class="panel-body" style="font-size:20px;padding:20px 30px;">
							Wrevel is growing quickly. We are looking for savvy Public Relations and Social Media members who are effective in representing the company and communicating with the outside world.
							<div class="row">
								<button class="btn apply"  data-toggle="modal" data-target="#apply" onclick="change_category('PR/Social Media')">Apply Now</button>
							</div>	
						</div>
											
					</div> 
			
				</div>
				<div class="col-md-5 col-md-offset-2">
					<div class="panel" style="border:none; border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3); box-shadow:4px 4px 4px rgba(0, 0, 0, .3);background:#F3F7FA;">
						<div class="panel-heading" style="background:#6A8BA8;padding:20px;">
							<h1 class="panel-title" style="color:white; font-size:23px;font-family:GillSans;">Marketing/Content <img src="<?php echo $PATH_IMG?>keyboard_icon.png" class="pull-right"></h1>
						</div>
						<div class="panel-body" style="font-size:20px;padding:20px 30px;">
							We want to change the way people use their surroundings and go about their daily routine. We need out-of-the-box thinkers who are willing to experiment and discover methods of getting the word out.
							<div class="row">
								<button class="btn apply"  data-toggle="modal" data-target="#apply" onclick="change_category('Marketing/Content')">Apply Now</button>
							</div>	
						</div>
					</div> 
				</div>
			</div>
                        	<!--Popup for applying jobs-->
			<div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
    					<div class="modal-content">
      						<div class="modal-header" style="background:#6A8BA8;color:white;">
       							 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       							 <h3 id="job_category" class="modal-title" id="myModalLabel">Category</h3>
      						</div>
      						<div class="modal-body" style="background:#C2D2DC;">
        						<?php echo form_open_multipart('main/job_application');?>
                                                                <div class="form-group row" hidden>
   									<div class="col-sm-9 control-label">
    										<input id="job_category_text" type="text" value="" name="category" class="form-control">
    									</div>
 								</div>
        							<div class="form-group row">
   									<label class="col-sm-3 control-label">First Name</label>
   									<div class="col-sm-9 control-label">
    										<input type="text" name="f_name" class="form-control" required>
    									</div>
 								</div>
 								<div class="form-group row">
   									<label class="col-sm-3 control-label">Last Name</label>
   									<div class="col-sm-9 control-label">
    										<input type="text" name="l_name" class="form-control" required>
    									</div>
 								</div>
  								<div class="form-group row">
   									<label class="col-sm-3 control-label">Email address</label>
   									<div class="col-sm-9 control-label">
    										<input type="email" name="job_email" class="form-control" required>
    									</div>
 								</div>
 								<div class="form-group row">
   									<label class="col-sm-3 control-label">Phone #</label>
   									<div class="col-sm-9 control-label">
    										<input type="text" name="phone_number" class="form-control" required>
    									</div>
 								</div>
 								<div class="form-group row">
   									<label class="col-sm-3 control-label">Description</label>
   									<div class="col-sm-9 control-label">
    										<textarea class="form-control" name="description" row="3"></textarea>
    									</div>
 								</div>
 								<div class="form-group row">
   									<label class="col-sm-3 control-label">Website</label>
   									<div class="col-sm-9 control-label">
    										<input type="text" name="website" class="form-control">
    									</div>
 								</div>
 								<!--<div class="form-group row">
   									<label class="col-sm-3 control-label">Department</label>
   									<div class="col-sm-9 control-label">
    										<select  type="text">
    											<option>Select any department</option>
    											<option>Engineering/Web Design</option>
    											<option>Media/Design</option>
    											<option>PR/Social Media</option>
    											<option>Marketing/Content</option>
    										</select>
             
    									</div>
 								</div>-->
  								
  								<div class="form-group row">
                                                                    <div class="image-upload">
                                                                    <label class="col-sm-3 control-label">Cover Letter</label>
                                                                        <div class="col-sm-9 control-label">
                                                                            <label for="file-input-cover"></label>
                                                                            <label for ="file-upload" ></label>
                                                                        </div>
                                                                        <input id="file-input-cover" name = "cover_letter" type = "file"/>
                                                                        <input id="file-upload" type = "submit" >
                                                                    </div>
                                                                    <div class="image-upload">  
    									<label class="col-sm-3 control-label">Resume</label>
    									<div class="col-sm-9 control-label">
                                                                            <label for="file-input-resume"></label>
                                                                            <label for ="file-upload" ></label>
                                                                        </div>
                                                                        <input id="file-input-resume" name = "resume" type = "file"/>
                                                                        <input id="file-upload" type = "submit" >
                                                                        
                                                                    </div>
                                                                    
  								</div> 
  								<div class="row">
  									<input type="submit" value="Send" class="btn" style="background:#5AC0C2;color:white;font-size:18px;">
  								</div>
							</form>
      						</div>
    					</div>
  				</div>
			</div><!--end of popup-->
			
			<div class="row" style="padding:5%;">
				<div style="font-size:20px; background:#F9FAFC;border-radius:10px;padding:20px;">
					We&rsquo;re always looking for awesome teammates with diverse skill sets. Drop us a line at jobs@wrevel.com if any of the positions above don&rsquo;t match what you seek.
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
    
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
		$('#tabs').tab();
		});
	</script>
        <script type="text/javascript">
            function change_category(s) {
                $('#job_category').html(s);
                $('#job_category_text').val(s);
            }
        </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>

</body>
</html> 