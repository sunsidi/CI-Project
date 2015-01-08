<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>My Account - Account Information</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-tour.min.css" rel="stylesheet">
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
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
  <div class="container" style="padding-bottom:50px;">
	<div class="row" style="margin-top:50px;">
    
		<div class="col-md-3 col-md-offset-1">
        		<div class="panel panel-default" style="border:none;">
  				<div class="panel-heading" style="background:#628DA3;color:white;">
    				<h3 class="panel-title text-center" style="font-size:28px;">My Account</h3>
  				</div>
  				<div class="panel-body" style="background:#DDE0E7;">
   					<a href="<? echo base_url()?>account/myaccount_accountinfo" style="color:#628DA3;"><button type="button" class="btn btn-lg btn-block account-active">Account Information</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventattending"><button type="button" class="btn btn-lg btn-block account">Events I&rsquo;m Attending</button></a>
                    <a href="<? echo base_url()?>account/myaccount_eventlisting"><button type="button" class="btn btn-lg btn-block account">My Event Listings</button></a>
                    <a href="<? echo base_url()?>account/myaccount_ticketmanagement"><button type="button" class="btn btn-lg btn-block account">Ticket Sales Management</button></a>
  				</div>
			</div>           
        </div>
        <div class="col-md-7" id="myaccount-step1" style="font-size:19px;">
        	<div class="row">
            	<div class="col-md-6" style="padding:0;">
        			<div class="panel panel-default" style="border:none;background:#DFE2E9;padding:10px 0;">
  						<div class="panel-heading" style="background:none; color:#1B74BC; border:none;">
    						<h3 class="panel-title text-center" style="font-size:25px;"><img src="<?php echo $PATH_IMG?>primary_contact_icon.png" style="vertical-align:top;"/> Primary Contact</h3>
  						</div>
  						<div class="panel-body">
                        	<div style="padding:0px 15%;">
                        	<p><span class="glyphicon glyphicon-user"></span><span style="margin-left:16px;"><?php echo " ".$fullname?></span></p>
                            
                            <p class="pull-left"><i class="fa fa-map-marker"></i></p>
                            <p style="margin-left:38px;"><?php echo $location?></p>
                            <p><i class="fa fa-phone fa-flip-horizontal"></i> <span style="margin-left:16px;"><?php echo $phone?></span></p>
                            <p><i class="fa fa-envelope"></i> <span style="margin-left:16px;"><?php echo $email?></span></p>
                           	</div>
                        	<div style="text-align:center;padding-top:15px;">
								<a href="#" data-toggle="modal" data-target="#edit" class="btn account-btn" style="font-size:19px;color:white;">Edit</a>
							
								<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="background:#628DA3; color:white;">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="myModalLabel" style="font-size:30px;"> <i class="fa fa-pencil-square-o"></i> Edit Contact Information</h4>
                                                                                                <font color="red"><?php echo form_error('email'); ?></font>
											</div>
											<div class="modal-body" style="background:#C2D2DC;">
												<!--<form class="form-horizontal" role="form">-->
                                                                                                    <?php 
                                                                                                    echo form_open(base_url().'account/edit_account_info/')?>
													<div class="form-group row">
														<label class="col-sm-2 control-label">Name</label>
														<div class="col-sm-10">
															<input type="text" name="fullname" class="form-control" value="<?php echo trim($fullname)?>" disabled>
														</div>
													</div>  
													<div class="form-group row">
														<label class="col-sm-2 control-label">Email</label>
														<div class="col-sm-10">
															<input type="text" name="email" class="form-control" value="<?php echo $email?>" disabled>
														</div>
													</div>
													<!--<div class="form-group row">
														<label class="col-sm-2 control-label">Address</label>
														<div class="col-sm-10">
															<input type="text" name="address" class="form-control" placeholder="Address" >
														</div>
													</div> -->
                                                                                                        <!-- COMMENTED OUT UNTIL WE HAVE CITY , STATE , ZIP -->
													<!--<div class="form-group">
														<div class="form-group row">
															<label class="col-sm-2 control-label" style="margin-left:10px;">City</label>
															<div class="col-sm-3">
																<input type="text" class="form-control" placeholder="City">
															</div>
															<label class="col-sm-1 control-label">State</label>
															<div class="col-sm-2">
																<input type="text" class="form-control" placeholder="State">
															</div>
															<label class="col-sm-1 control-label">Zip</label>
															<div class="col-sm-2">
																<input type="text" class="form-control" placeholder="Zip">
															</div>
														</div>   
													</div>-->
													<div class="form-group row">
														<label class="col-sm-2 control-label">Location</label>
														<div class="col-sm-10">
															<input type="text" name="location" class="form-control" placeholder="Location" >
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-2 control-label">Phone</label>
														<div class="col-sm-10">
															<input type="text" name="phone" class="form-control" placeholder="Phone Number" >
														</div>
													</div> 
													<button type="submit" class="btn" style="background:#1D75BD;color:white;font-size:20px;">Submit Changes</button>
												<?php echo form_close()?>
                                                                                            <!--    </form>-->
											</div>
											
										</div>
									</div>
								</div>
							
								<a href="#" data-toggle="modal" data-target="#changePassword" class="btn account-btn" style="font-size:19px;">Change Password</a>
								<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="background:#628DA3; color:white;">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="myModalLabel" style="font-size:30px;"><i class="fa fa-pencil-square-o"></i> Change Password</h4>
                                                                                                <font color="red"><?php echo form_error('old_password'); ?></font>
											</div>
											<div class="modal-body" style="background:#C2D2DC;">
												<!--<form class="form-horizontal" role="form">-->
                                                                                                    <?php $check_passwords = array('onsubmit' => 'return check_passwords()');
                                                                                                    echo form_open(base_url().'account/change_password/', $check_passwords)?>
													<div class="form-group row">
														<label class="col-sm-5 control-label">Old Password</label>
														<div class="col-sm-7">
															<input id="old_password" type="password" name="old_password" class="form-control">
														</div>
													</div>  
													<div class="form-group row">
														<label class="col-sm-5 control-label">New Password</label>
														<div class="col-sm-7">
															<input id="new_password" type="password" name="new_password" class="form-control">
															<span class="error_password" style="color:red" hidden>* Passwords must be the same.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-5 control-label">Re-enter New Password</label>
														<div class="col-sm-7">
															<input id="confirm_new_password" type="password" name="confirm_new_passowrd" class="form-control">
															<span class="error_password" style="color:red" hidden>* Passwords must be the same.</span>
														</div>
													</div>
												<!--</form>-->
                                                                                                
                                                                                                <a href="#"><button type="submit" class="btn" style="background:#1D75BD;color:white;font-size:20px;">Save</button></a>
                                                                                                <?php echo form_close()?>
											</div>
											
										</div>
									</div>
								</div>
							
                            </div>
  						</div>
                        
					</div>           
        		</div>
                <div class="col-md-6">
        			<div class="panel panel-default" style="background:#DFE2E9;height:270px;padding:10px 0;">
  						<div class="panel-heading" style="background:none; color:#1B74BC; border:none;">
    						<h3 class="panel-title text-center" style="font-size:25px;"><img src="<?php echo $PATH_IMG?>preferences_icon.png" style="vertical-align:top;"/> Preferences</h3>
  						</div>
                                    <p style="text-align:center;font-size:25px;margin-top:75px;"> COMING SOON </p>
  						<!--<div class="panel-body" style="text-align:center;">
                        	<p>Email Notifications
   							<label class="radio-inline">
  							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
							</label>
							<label class="radio-inline">
  							<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
							</label>
                            </p>
                            <h3 style="color:#1B74BC;">Types of Email Notifications</h3>
                            <div style="padding:0px 25px;">
                            	<div class="checkbox" style="text-align:left;">
  									<label>
    								<input type="checkbox" value="">
    								Event Alerts
  									</label>
                            	</div>
                            	<div class="checkbox" style="text-align:left;">    
                                	<label>
    								<input type="checkbox" value="">
    								Interested Event Alerts
  									</label>
								</div>
                            	<button onclick="deactivate()" type="button" class="btn btn-block" style="font-size:19px; background:#1D75BD; color:white;">Deactivate My Account</button>
                            
								<button onclick="deleteacct()" type="button" class="btn btn-block" style="font-size:19px;margin-top:10px;background:#1D75BD; color:white;">Delete My Account</button>
                            </div>	
  						</div>-->
					</div>           
        		</div>
            </div>
            <div class="row">
            	<div class="col-md-12" style="padding:0;">
        			<div class="panel panel-default" style="background:#DFE2E9;padding:10px 0;">
  						<div class="panel-heading" style="background:none; color:#1B74BC; border:none;">
    						<h3 class="panel-title text-center" style="font-size:25px;"><img src="<?php echo $PATH_IMG?>payment_settings_icon.png" style="vertical-align:bottom;"/> Payment Settings</h3>
  						</div>
  						<div class="panel-body">
  						<!--<p style="font-size:25px; text-align:center; ">COMING SOON</p>-->
  						</div>
  						<div class="panel-body">
                        	<div style="border-bottom:1px solid black; padding-bottom:20px;padding-left:5%;">
                            	<p style="padding:0px 15px;"><img src="<?php echo $PATH_IMG?>credit_card_icon.png" style="vertical-align:top;"/> &nbsp; Debit/Credit Cards on File</p>
                                <div class="table-responsive">
                                	<table>
                                		<thead style="color:#1B74BC; font-weight:normal;">
                                    		<th>Name</th>
                                        	<th>Card #</th>
                                        	<th>Exp. Date</th>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                        	<td><?php if(isset($card_data)) echo $card_data['name']?></td>
                                            	<td><?php if(isset($card_data)) echo "************".$card_data['last4']?></td>
                                            	<td><?php if(isset($card_data)) echo $card_data['exp_month'].'/'.$card_data['exp_year']?></td>
                                            	<!--<td><a href="#" data-toggle="modal" data-target="#editCard">[Edit]</a></td>
												<div class="modal fade" id="editCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header" style="background:#628DA3; color:white;">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel" style="font-size:30px; text-align:center;"><i class="fa fa-pencil-square-o"></i> Edit Card</h4>
												</div>
												<div class="modal-body" style="text-align:center;background:#C2D2DC;">
													<form class="form-horizontal" role="form">
														<div class="form-group row">
															<label class="radio-inline">
																<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Credit
															</label>
															<label class="radio-inline">
																<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Debit
															</label>	
														</div>
														<div class="form-group row">
															<label class="col-sm-3 control-label">Credit #</label>
															<div class="col-sm-9">
																<input type="text" class="form-control">
															</div>
														</div>  
														<div class="form-group row">
															<label class="col-sm-3 control-label">Exp. Date</label>
															<div class="col-sm-9">
																<input type="text" class="form-control">
															</div>
														</div> 
														<div class="form-group row">
															<label class="col-sm-3 control-label">Name</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" placeholder="Name on Card" >
															</div>
														</div> 
														<button type="button" class="btn" style="background:#1D75BD;color:white;font-size:20px;">Submit Changes</button>
													</form>
												</div>
											
											</div>
										</div>
									</div>-->
                                                <?php if(isset($card_data)) {?>
                                                    <td><a href="<?php echo base_url().'account/remove_card'?>" onclick="return removeCard()">[Remove]</a></td>
                                                <?php }?>
                                        	</tr>
                                    	</tbody>
                                	</table>
                                   
                                </div>
                                
                                <div style="text-align:right;">
									<a href="#" data-toggle="modal" data-target="#addCard" class="btn account-btn">Add</a>
								
									<div class="modal fade" id="addCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header" style="background:#628DA3; color:white;">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel" style="font-size:30px; text-align:center;"><i class="fa fa-pencil-square-o"></i> Add New Card</h4>
												</div>
												<div class="modal-body" style="text-align:center;background:#C2D2DC;">
													<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(). 'account/add_stripe_card'?>">
														<span style="color:red">Your previously entered card will be removed if you choose to add a new card.</span>
														<div class="form-group">
															<label class="col-sm-3 control-label">Name on Card</label>
															<div class="col-sm-9">
																<input type="text" name="name_on_card" class="form-control">
															</div>
														</div> 
														<div class="form-group">
															<label class="col-sm-3 control-label">Credit #</label>
															<div class="col-sm-9">
																<input type="text" name="credit_card_number" class="form-control">
															</div>
														</div>  
														<div class="form-group">
															<label class="col-sm-3 control-label">Exp. Month</label>
															<div class="col-sm-9">
																<input type="text" name="exp_month" class="form-control">
															</div>
														</div> 
														<div class="form-group">
															<label class="col-sm-3 control-label">Exp. Year</label>
															<div class="col-sm-9">
																<input type="text" name="exp_year" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label">CVC</label>
															<div class="col-sm-9">
																<input type="number" name="cvc" class="form-control" placeholder="CVC" >
															</div>
														</div> 
														<button type="Submit" class="btn" style="background:#1D75BD;color:white;font-size:20px;">Submit Changes</button>
													</form>
												</div>
											
											</div>
										</div>
									</div>
								
                                </div>
                                
                            </div>
   							<div style="padding-top:15px;padding-left:5%;">
                            	<p style="padding:0px 15px;"><img src="<?php echo $PATH_IMG?>bank_icon.png" style="vertical-align:top;"/> &nbsp; Bank Account Information</p>
                                <div class="table-responsive">
                                	<table>
                                    	<thead style="color:#1B74BC; font-weight:normal;">
                                        	<th style="text-align:center;">Name of Bank</th>
                                        	<th style="text-align:center;">Account #</th>
                                            <th style="text-align:center;">ACH Routing #</th>
                                        </thead>
                                        <tbody>
												<td style="background:white; text-align:center; padding:5px;"><?php if(isset($bank_data)) echo $bank_data['bank_name']?></td>
												<td style="background:white; text-align:center; padding:5px;"><?php if(isset($bank_data)) echo "*********" . $bank_data['last4']?></td>
												<td style="background:white; text-align:center;"><?php if(isset($bank_data)) echo "*********"?></td>
                                                                                                
												<td><a href="#" data-toggle="modal" data-target="#editAcct">[Edit]</a></td>
												
												<div class="modal fade" id="editAcct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header" style="background:#628DA3; color:white;">
																<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																<h4 class="modal-title" id="myModalLabel" style="font-size:30px; text-align:center;"><i class="fa fa-pencil-square-o"></i> Edit Account</h4>
															</div>
															<div class="modal-body" style="text-align:center; background:#C2D2DC;">
																<form class="form-horizontal" role="form" method="post"  action="<?php echo base_url()."account/update_account/"?>">
																	<div class="form-group row">
																		<label class="col-sm-4 control-label">Type</label>
																		<div class="col-sm-8">
																			
																			<input type="radio" name ="bank_type" value="individual" checked style="margin-left:-5px;"> Individual																			
																			<input type="radio" name ="bank_type" value="corporation"  style="margin-left:5px;"> Corporation
																		</div>
																	</div> 
																	<div class="form-group row">
																		<label class="col-sm-4 control-label">Name</label>
																		<div class="col-sm-8">
																			<input type="text" class="form-control" name = "name_on_bank" required>
																		</div>
																	</div> 
																	<div class="form-group row">
																		<label class="col-sm-4 control-label">SSN/EIN #</label>
																		<div class="col-sm-8">
																			<input type="text" class="form-control" name = "ssn_ein" required>
																		</div>
																	</div>  
																	<div class="form-group row">
																		<label class="col-sm-4 control-label">Account #</label>
																		<div class="col-sm-8">
																			<input type="text" class="form-control" name = "accountingNumber" required>
																		</div>
																	</div> 
																	<div class="form-group row">
																		<label class="col-sm-4 control-label">ACH Routing #</label>
																		<div class="col-sm-8">
																			<input type="text" class="form-control" name = "routingNumber" required>
																		</div>
																	</div> 
																	<button type="Submit" class="btn" style="background:#1D75BD;color:white;font-size:20px;">Submit Changes</button>
																</form>
															</div>
											
														</div>
													</div>
												</div>
												
												
												<!--<td><a href="#">[Remove]</a></td>-->
                                           
                                            </tr>
		
                                            <tr><p style="padding-left:8%;"><?php if(isset($bank_data)) echo '<span style="color:green;">'.$bank_data["bank_name"].'</span> is now saved on file.'?> You <?php if(isset($bank_data)) echo '<span style="color:green;"><b>are</b></span>'; else echo '<span style="color:red;"><b>are not</b></span>';?> set up to receive payments. <a href="#">[Remove]</a></p></tr>
											
										</tbody>
                                    </table>
                                </div>
                                <div style="text-align:right;">
                                <a class="btn account-btn">Save</a>
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
		function deactivate(){
			confirm("Are you sure you want to deactivate your account?");
		}
		function deleteacct(){
			confirm("Are you sure you want to delete your account?");
		}
		function removeCard(){
			if(confirm("Are you sure?")) return true;
                        else return false;
		}
	</script>
	<script>
		function check_passwords() {
			var pw1 = $('#new_password').val();
			var pw2 = $('#confirm_new_password').val();
			if(pw1 == pw2)
				return true;
			else {
				$(".error_password").show();
				return false;
			}
		}
	</script>
	<!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap-tour.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/tour.js"></script>
</body>
</html> 