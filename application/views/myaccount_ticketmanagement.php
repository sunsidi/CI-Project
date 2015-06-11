<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>My Account - Ticket Sales Management | Wrevel - Discover Your World, Host & Experience Events</title>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>


<body>

<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:80px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>  <div class="container" style="padding-bottom:50px;">
	<div class="container" style="padding-bottom:50px;">
	<div class="row" style="margin-top:110px;">
    
		<div class="col-md-3 col-md-offset-1">
        	<div class="panel panel-default" style="border:none;">
  				<div class="panel-heading" style="background:#628DA3;color:white;">
    				<h3 class="panel-title text-center" style="font-size:28px;">My Account</h3>
  				</div>
  				<div class="panel-body" style="background:#DDE0E7;">
   					<a href="<? echo base_url()?>account/myaccount_accountinfo"><button type="button" class="btn btn-lg btn-block account">Account Information</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventattending"><button type="button" class="btn btn-lg btn-block account">Events I&rsquo;m Attending</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventlisting"><button type="button" class="btn btn-lg btn-block account">My Event Listings</button></a>
                    <a href="<? echo base_url()?>account/myaccount_ticketmanagement" style="color:#628DA3;"><button type="button" class="btn btn-lg btn-block account-active">Ticket Sales Management</button></a>
					<a href="<? echo base_url()?>account/myaccount_stats"><button type="button" class="btn btn-lg btn-block account">Statistics and Analysis</button></a>
  				</div>
			</div>           
        </div>
            
        <div class="col-md-7" id="myaccount-step3">
        	<div class="row">
        		<div class="panel panel-default" style="border:none; background:#DFE2E9;">
  					<div class="panel-heading" style="background:none; border:none;">
    					<h3 class="panel-title text-center" style="font-size:25px;padding-top:20px;"><img src="<?php echo $PATH_IMG?>event_listing_icon.png" style="vertical-align:bottom;"/> My Ticket Sales</h3>
  					</div>
  					<div class="panel-body" style="height:400px; overflow-y:auto;">
						<div class="table-responsive">
							<table>
								<thead style="color:#1B74BC; font-weight:normal;">
									<th>Customer</th>
									<th>Event ID</th>
									<th>Event Name</th>
									<!--<th>Qty</th> ONLY ONE TICKET PER PERSON RIGHT NOW -- WILL CHANGE LATER-->
									<th>Delivery</th>
									<th>Type of Ticket</th>
									<th>Price</th>
									<th>Status</th>
								</thead>
								<tbody>
									<?php
                                                                            if(isset($attending_events)) {
                                                                            for ($i = 0;$i < count($attending_events);$i++){
                                                                                	if(isset($attending_events[$i]['tickets'])) {
                                                                            	    for($j = 0; $j < count($attending_events[$i]['tickets']); $j++) {?>
                                                                                    <tr>
                                                                                	        <td><?php echo $attending_events[$i]['tickets'][$j]['fullname'];?></td>
                                                                                        <td><?php echo $attending_events[$i]['event_id'];?></td>
                                                                                        <td><a href="<?php echo base_url().'event/event_info/latest/'.$attending_events[$i]['event_id']?>"><p><?php echo $attending_events[$i]['e_name']?></p></a></td>
                                                                                        <td><?php echo $attending_events[$i]['tickets'][$j]['delivery'];?></td>
                                                                                        <td><?php echo $attending_events[$i]['tickets'][$j]['ticket_type'];?></td>
                                                                                        <td><?php echo '$'.sprintf("%01.2f", $attending_events[$i]['tickets'][$j]['ticket_price']);?></td>  
                                                                                        <td>Paid</td>                   
                                                                                        <!--<td><a href="#" data-toggle="modal" data-target="#editEventModal" onclick="<?php $event_placeholder_id = $attending_events[$i]['event_id'];?>">[Edit]</a></td>-->
                                                    <td><a href="#" data-toggle="modal" data-target="#cancel<?php echo $i; ?>">[Issue Refund]</a></td>
                                                                                    </tr>
                                                                         <?php }}}} else{?>
                                                                         You have no ticket sales right now.
                                                                         <?php }?>
								</tbody>
							</table>
						</div>
  					</div>
                </div>    
			</div>
			<?php 
				if(isset($attending_events)) {
     				for($i = 0; $i < count($attending_events); $i++) {?>
				<div class="modal fade" id="cancel<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
    					<div class="modal-content" style="text-align:center;">
      					<div class="modal-header" style="background:#628DA3; color:white;">
       						 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        					<h4 class="modal-title" id="myModalLabel" style="font-size:30px;"><i class="fa fa-times"></i> Issue Refund</h4>
      					</div>
      					<div class="modal-body" style="background:#C2D2DC;padding:5%;">
        					<form class="form-horizontal" action="<?php echo base_url().'account/issue_refund'?>" method="post">
							<fieldset>
    							<input name ="eventID" type="hidden" value="<?php echo $attending_events[$i]['event_id'];?>" >
    							<input name="eventName" type="hidden" value="<?php echo $attending_events[$i]['e_name']?>">
    							<input name="customer" type="hidden" value ="<?php echo $attending_events[$i]['tickets'][$j]['fullname'];?>">
    							
    							<div class="form-group">Please fill out your reason for issuing a refund to your buyer.<br>
    							We will review it and get back to you within 24 hours.
    							</div>&nbsp;
    							
            						<!-- To input-->
            						<div class="form-group">
            						<div class="col-md-2 col-sm-2 col-xs-2" for="name" style="">To</div>
              								<div style="text-align:left;">
                							&nbsp; &nbsp; Wrevel
              								</div>
            							</div>
    
            						<!--Email input-->
            						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Email</div>
              								<div class="col-md-9 col-sm-9 col-xs-9">
                							<input disabled value="<?php echo $this->session->userdata('email')?> "id="name" name="name" type="text" class="form-control" style="width: 350px;">
              								</div>
            							</div>

            						<!-- Subject input-->	    
	    						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="email" style="">Reason for Refund</div>
              								<div class="col-md-9 col-sm-9 col-xs-9">
                							<input id="name" name="reason" type="text" class="form-control" style="width: 350px;">
              							</div>
            						</div>
	    
	    						<!--Message input-->
            						<div class="form-group">
              							<div class="col-md-2 col-sm-2 col-xs-2" for="message" style="">Message</div>
              								<div class="col-md-9 col-sm-9 col-xs-9">
                							<textarea class="form-control" id="message" name="message" rows="5" style="width: 350px;"></textarea>
             						 		</div>
            						</div>
    
            						<!-- Form actions -->
            						<div class="form-group" style="padding:20px;">
              						<div class="pull-right">
                						<button type="submit" class="btn account-btn" name="submit">Send</button>
              						</div>
            						</div>
	    
						</fieldset>
					</form>
      					</div>
      
    					</div>
 				 </div>
			</div>
		<?php }}?>	
            <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height: 1220px;">
                                    <div class="panel" style="border-color: #714E8A; width: 599px; height: 1220px;">
                                        <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
                                            <p style="font-size: 45px; color: white;text-align: center;">Edit Your Wrev</p>
                                        </div>
                                        <div class="panel-body" style="text-align:center;font-size:20px; color:black;">
                                            <?php echo form_open_multipart(base_url().'event/edit_event/'. $event_placeholder_id)?>   
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                         <label class="col-sm-2 control-label">Title</label>
                                                            <div class="col-sm-10">
                                                                <input id="e_name" name="e_name" type="text" class="form-control" placeholder="Title of event" >
                                                            </div>
                                                    </div>       
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Info</label>
                                                            <div class="col-sm-10">
                                                                <textarea id="e_description" name="e_description" class="form-control" rows="3" placeholder="type in something attention grabbing"></textarea>
                                                            </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label" style="margin-left:10px;">Date</label>
                                                            <div class="col-sm-4">
                                                                <input id="e_date" name="e_date" type="date" class="form-control">
                                                            </div>
                                                            <label class="col-sm-2 control-label style="margin-left:10px;">Time</label>
                                                                <div class="col-sm-3">
                                                                    <select id="e_start_time" name="e_start_time" type="time" class="form-control">
                                                                        <option value="" selected="selected"></option> 
                                                                        <option value="12:00am">12:00am</option>
                                                                        <option value="12:30am">12:30am</option>
                                                                        <option value="1:00am">1:00am</option>
                                                                        <option value="1:30am">1:30am</option>
                                                                        <option value="2:00am">2:00am</option>
                                                                        <option value="2:30am">2:30am</option>
                                                                        <option value="3:00am">3:00am</option>
                                                                        <option value="3:30am">3:30am</option>
                                                                        <option value="4:00am">4:00am</option>
                                                                        <option value="4:30am">4:30am</option>
                                                                        <option value="5:00am">5:00am</option>
                                                                        <option value="5:30am">5:30am</option>
                                                                        <option value="6:00am">6:00am</option>
                                                                        <option value="6:30am">6:30am</option>
                                                                        <option value="7:00am">7:00am</option>
                                                                        <option value="7:30am">7:30am</option>
                                                                        <option value="8:00am">8:00am</option>
                                                                        <option value="8:30am">8:30am</option>
                                                                        <option value="9:00am">9:00am</option>
                                                                        <option value="9:30am">9:30am</option>
                                                                        <option value="10:00am">10:00am</option>
                                                                        <option value="10:30am">10:30am</option>
                                                                        <option value="11:00am">11:00am</option>
                                                                        <option value="11:30am">11:30am</option>
                                                                        <option value="12:00pm">12:00pm</option>
                                                                        <option value="12:30pm">12:30pm</option>
                                                                        <option value="1:00pm">1:00pm</option>
                                                                        <option value="1:30pm">1:30pm</option>
                                                                        <option value="2:00pm">2:00pm</option>
                                                                        <option value="2:30pm">2:30pm</option>
                                                                        <option value="3:00pm">3:00pm</option>
                                                                        <option value="3:30pm">3:30pm</option>
                                                                        <option value="4:00pm">4:00pm</option>
                                                                        <option value="4:30pm">4:30pm</option>
                                                                        <option value="5:00pm">5:00pm</option>
                                                                        <option value="5:30pm">5:30pm</option>
                                                                        <option value="6:00pm">6:00pm</option>
                                                                        <option value="6:30pm">6:30pm</option>
                                                                        <option value="7:00pm">7:00pm</option>
                                                                        <option value="7:30pm">7:30pm</option>
                                                                        <option value="8:00pm">8:00pm</option>
                                                                        <option value="8:30pm">8:30pm</option>
                                                                        <option value="9:00pm">9:00pm</option>
                                                                        <option value="9:30pm">9:30pm</option>
                                                                        <option value="10:00pm">10:00pm</option>
                                                                        <option value="10:30pm">10:30pm</option>
                                                                        <option value="11:00pm">11:00pm</option>
                                                                        <option value="11:30pm">11:30pm</option>
                                                                    </select>
                                                                </div>
                                                    </div>
                                                    <!--<div class="form-group text-left" >
                                                        <label class="control-label" style="margin-left:20px;">Hide Location</label>
                                                            <input type="checkbox" name="yes" value="yes"> 
                                                    </div>-->  
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Location</label>
                                                            <div class="col-sm-10">
                                                                <input id="e_address" name="e_address" type="text" class="form-control" placeholder="" >
                                                            </div>
                                                    </div>    
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label" style="margin-left:10px;">City</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name = "e_city">
                                                                </div>
                                                                <label class="col-sm-1 control-label">State</label>
                                                                    <div class="col-sm-2">
                                                                        <select name="e_state" type="text" class="form-control">
                                                                            <option value="" selected="selected"></option> 
                                                                            <option value="AK">AK</option>
                                                                            <option value="AL">AL</option>
                                                                            <option value="AR">AR</option>
                                                                            <option value="AZ">AZ</option>
                                                                            <option value="CA">CA</option>
                                                                            <option value="CO">CO</option>
                                                                            <option value="CT">CT</option>
                                                                            <option value="DC">DC</option>
                                                                            <option value="DE">DE</option>
                                                                            <option value="FL">FL</option>
                                                                            <option value="GA">GA</option>
                                                                            <option value="HI">HI</option>
                                                                            <option value="IA">IA</option>
                                                                            <option value="ID">ID</option>
                                                                            <option value="IL">IL</option>
                                                                            <option value="IN">IN</option>
                                                                            <option value="KS">KS</option>
                                                                            <option value="KY">KY</option>
                                                                            <option value="LA">LA</option>
                                                                            <option value="MA">MA</option>
                                                                            <option value="MD">MD</option>
                                                                            <option value="ME">ME</option>
                                                                            <option value="MI">MI</option>
                                                                            <option value="MN">MN</option>
                                                                            <option value="MO">MO</option>
                                                                            <option value="MS">MS</option>
                                                                            <option value="MT">MT</option>
                                                                            <option value="NC">NC</option>
                                                                            <option value="ND">ND</option>
                                                                            <option value="NE">NE</option>
                                                                            <option value="NH">NH</option>
                                                                            <option value="NJ">NJ</option>
                                                                            <option value="NM">NM</option>
                                                                            <option value="NV">NV</option>
                                                                            <option value="NY">NY</option>
                                                                            <option value="OH">OH</option>
                                                                            <option value="OK">OK</option>
                                                                            <option value="OR">OR</option>
                                                                            <option value="PA">PA</option>
                                                                            <option value="RI">RI</option>
                                                                            <option value="SC">SC</option>
                                                                            <option value="SD">SD</option>
                                                                            <option value="TN">TN</option>
                                                                            <option value="TX">TX</option>
                                                                            <option value="UT">UT</option>
                                                                            <option value="VA">VA</option>
                                                                            <option value="VT">VT</option>
                                                                            <option value="WA">WA</option>
                                                                            <option value="WI">WI</option>
                                                                            <option value="WV">WV</option>
                                                                            <option value="WY">WY</option>
                                                                        </select> 
                                                                    </div>
                                                                    <label class="col-sm-1 control-label">Zip</label>
                                                                        <div class="col-sm-2">
                                                                            <input name="e_zipcode" type="text" class="form-control" placeholder="">
                                                                        </div>
                                                        </div>   
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Country</label>
                                                            <div class="col-sm-10">
                                                                <input name="e_country" type="text" class="form-control" placeholder="" >
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 control-label" style="margin-left:10px;">Phone</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <label class="col-sm-1 control-label">Email</label>
                                                                    <div class="col-sm-5">
                                                                        <input name="e_email" type="email" class="form-control">
                                                                    </div>
                                                        </div>   
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Website</label>
                                                            <div class="col-sm-10">
                                                                <input name="e_website" type="text" class="form-control" placeholder="" >
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Price</label>
                                                            <div class="col-sm-10">
                                                                <input name="e_price" type="text" class="form-control" placeholder="" >
                                                            </div>
                                                    </div>
                             <!--<form >

                                             <input type="radio" name="status" value="public"> public
                                                         <input type="radio" name="status" value="private"> private
                                                  </form>                    

                            <div style="width:200px; height:200px; margin:25px auto;">
                                  <img src="images/camera_icon.png" style="min-width:100%; max-width:100%;">
                            </div>


                            <button type="button" class="btn btn-lg" style="background:#47AFEA; color:white;">Upload Image</button>

                            </br>
                                                    <div>
                                                        <input type="submit" name="submit" value="Submit" class="btn btn-lg" style="background:#1C75BC;margin-top:20px; color:white;">
                                                    </div> 
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!--<div class="row">
        		<div class="panel panel-default" style="border:none; background:#DFE2E9;">
  					<div class="panel-heading" style="background:none; border:none;">
    					<h3 class="panel-title text-center" style="font-size:25px;"><img src="<?php echo $PATH_IMG?>ticket_sales_icon.png" style="vertical-align:bottom;"/> Payment/Ticket Sales</h3> 
  					</div>
  					<div class="panel-body" style="height:400px; overflow-y:auto;">
						<div class="table-responsive">
							<table>
								<thead style="color:#1B74BC; font-weight:normal;">
									<th>Username</th>
									<th>Event Id</th>
									<th>Event Name</th>
									<th>Qty</th>
									<th>Payment</th>
									<th>Our Fees</th>
									<th>Sale Date</th>
									<th>Status</th>
								</thead>
								<tbody style="height:200px; overflow-y:scroll;">
									<tr>
										<td>ash_dick</td>
										<td>Chads Rock of Ages</td>
										<td>8/15/14</td>
										<td>3</td>
										<td>$30.00</td>
										<td>$6.45</td>
										<td>8/1/14</td>
										<td>Approved</td>
										<td>
											<a href="#">[Edit]</a>
											<a href="#" onclick="removal()">[Remove]</a>
										</td>
                                       
									</tr>
									<tr>
										<td>vhjv</td>
										<td>Central Park Water Gun Fight</td>
										<td>8/15/14</td>
										<td>3</td>
										<td>$30.00</td>
										<td>$4.55</td>
										<td>8/1/14</td>
										<td>Approved</td>
										<td>
											<a href="#">[Edit]</a>
											<a href="#" onclick="removal()">[Remove]</a>
										</td>
                                       
									</tr>
									<tr>
										<td>vhjv</td>
										<td>Central Park Water Gun Fight</td>
										<td>8/15/14</td>
										<td>3</td>
										<td>$30.00</td>
										<td>$4.55</td>
										<td>8/1/14</td>
										<td>Approved</td>
										<td>
											<a href="#">[Edit]</a>
											<a href="#" onclick="removal()">[Remove]</a>
										</td>
                                       
									</tr>
									
								</tbody>
							</table>-->
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
    
	<script>
		function removal(){
			
		 	var confirmation = confirm("Are you sure?");
		 	if (confirmation == true){
			 	return true;
		 	}
		 	else
		 	return false;
			
		}
	</script> 
	<!--	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
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