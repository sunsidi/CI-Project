<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inbox</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/inbox.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>

<?php $this->load->view('header');?>

<!--content
==============================================-->

<!--end of content-->

<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container" style="padding-bottom:50px;">
<div class="row" style="padding-top: 40px;">
	<div class="col-md-offset-1 col-md-5">
            <div class="panel" style="border:none;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">
    
            <div class="panel-heading" style="background-color:#81A3B5; height: 55px;border-top-left-radius:10px;border-top-right-radius:10px;">


                <p style="font-size: 30px;font-family:GillSans; color: white; float: left; margin-top: -5px; margin-left:7%;">
                    Inbox
                </p>
    
				<a href="#" data-toggle="modal" data-target="#basicModal" style="float: right;"><button type="submit" class="btn btn-md" style="background:white; color:black;">Compose Message</button></a>
                  
				<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
					<div class="modal-dialog ">
						<div class="modal-content" style="background:#C2D2DC; border:none;border-radius:10px;">
          
							<div class="modal-header" style="background-color: #628da3; height: 80px;border-top-left-radius:10px;border-top-right-radius:10px;">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<p style="font-size: 250%; color: white; text-align: center;">
									Message
									</p>
							</div>
                
							<div class="modal-body" style="text-align:center; font-size:20px;">
								<div class="container">
									<div class="row">
										<!-- START of COMPOSE MESSAGE FORM -->
    
										<!-- From input-->
										<?php echo form_open('chat/composeMessage'); ?>
                                     
										<!-- To input-->
										<div class="form-group row">
											<div class="col-md-2 col-sm-2 " for="email" style="margin-left: 10px;">To:</div>
											<div class="col-md-9 col-sm-9 ">
												<!--<input id="to" name="to" type="text" placeholder="To" class="form-control" style="width: 400px;">-->
												<select id="to" name="to" class="form-control">
													<option selected value="">Select a friend to message</option>
													<!-- Iterate through all friends and set them as options -->
													<?php for($i = 0; $i < count($friends_name); $i++){?>
													<option value="<?php echo $friends_username[$i];?>"><?php echo $friends_name[$i].' - '.$friends_email[$i];?></option>
													<?php } ?>
												</select>
											</div>
										</div>
      
										<!-- Title input
										<div class="form-group">
										<div class="col-md-2 col-sm-2 col-xs-2" for="name" style="margin-left:10px;">Title:</div>
										<div class="col-md-9 col-sm-9 col-xs-9">
										<input id="name" name="name" type="text" placeholder="Title" class="form-control" style="width: 400px;">
										</div>
										</div>
										-->
    
										<!-- Message body -->
										<div class="form-group row">
											<div class="col-md-2 col-sm-2" for="message" style="margin-left: 8px; margin-top:10px;">Your message:</div>
											<div class="col-md-9 col-sm-9">
												<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" style="margin-top:10px;height:170px;"></textarea>
											</div>
										</div>
    
										<!-- Form actions -->
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 5px; margin-top:10px;">
											<button type="submit" class="btn btn-primary btn-lg">Send</button>
											</div>
										</div>
										<?php echo form_close();?>
      
									<!--END OF COMPOSE MESSAGE FORM -->
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div><!--end of message popup-->
            
			</div><!--end of panel-heading-->
      
            <div class="panel-body" style="background: #dce3e9;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
				<!--<div class="well" style="background:#dce3e9;">-->
					<div class="tab-content">
						<!-- <div class="tab-pane fade in " id="apple">-->
						<div class="panel"  style="background: #dce3e9;">
    
							<div class="panel-heading" style="border-bottom-color: black; height: 60px;">
								<table class="table" style="margin-top:-35px;">
									<thead>
										<tr>
											<td style="font-size: 25px;font-family:GillSans;">Participants</td>
											<!-- <td style="font-size: 35px;font-family:GillSans;">Status</td> -->
											<td style="font-size: 25px;font-family:GillSans;"> When</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>

							<!--beginning of the persons chat -->
							<!--FIGURE OUT HOW TO ADD THE CHATS INTO HERE-->
							<div class="panel-body table-responsive"  style="height:445px;overflow-y:auto;">
                                                            
							<?php 
							for($i =0; $i<$num_chats;$i++){?>
							
							<!--used to differentiate the users apart in convo-->
							<?php  echo "<style>
							p.".$chats_info[$i]["currentUser"]."{margin-left:60%; }
							</style>"; ?>

							<!-- bye bye-->
asdfkjhklasjdf  
							<!-- hello there-->

							
								<div class="containe">
									<div class="heade" onclick="change_chat('<?php echo $chats_info[$i]['chatLocation'];?>','<?php echo $chats_info[$i]['otherUser'];?>');highlightLink(this);">
										<table class="table">
											<thead>
												<tr>
													<!-- <?php 
													if ($username != $chats_info[$i]['latest_replier']) echo '<td><div id="circlee'.$i. '" style="background: red; width:20px; height:20px; border-radius:25px"></div></td>';
													else{echo '<td><div id="circlee'.$i. '" style="background: green; width:20px; height:20px; border-radius:25px"></div></td>';} ?>-->
													<!--<td><div id="circlee" style="background: red;"></div></td>-->
													<!--$chats_info[$i]['image']-->
													<td style="width:60%;"><img src="<?php echo $chats_info[$i]['image']?>" style=" margin-top:-20px; width:65px; height:65px;border-radius: 150px;border:2px solid #7874A2;z-index:5;position:relative;"><div style="color:white;background:#7874A2; padding:5px 12px 5px 30px; border-radius:5px;margin-left:57px;z-index:3;margin-top:-50px;width:60%;"><?php echo $chats_info[$i]['otherUserFullname'] ?></div></td>
													<!--<td id="message_status"><?php echo $chats_info[$i]['status'] ?></td>-->
													<td><p id="reply_time" ><?php echo $chats_info[$i]['reply_time'] ?></p></td>
													<!-- <td><p><a href=""><img src="<?php echo $PATH_BOOTSTRAP?>images/mark_as_unread_button.png" style="width: 30px; margin-top:-50px;"></a></p>
													<p><a href=""><img src="<?php echo $PATH_BOOTSTRAP?>images/mark_as_read_button.png" style="width: 30px;  margin-top:-42px;"></a></p>
													<p><a href=""><img src="<?php echo $PATH_BOOTSTRAP?>images/delete_button.png" style="width: 30px;  margin-top:-30px;"></a></p></td>-->
												</tr>
											</thead>
										</table>
									</div>
									<!-- THIS IS WHERE YOU INSERT THE CHAT!!!!!!!-->
									<!--<div class="content" style="background:#d2dee7;">
                                                                            <div id="temp_array1"><p><?php echo $chats_info[$i]['chatLocation']; ?></p></div>
                                                                            

										
										<div class="arrow-up"></div>                                    
                                         
										
										<div class="btn-group">
											<a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;"><span class="glyphicon glyphicon-camera"></span></button></a>
										</div>
										
									</div>-->
								</div>
							
							<?}?>
						<!-- end of the chat stuff -->
						</div></div>
					<!--  </div> -->

					</div>
				<!--</div>-->
			</div>
		</div>
	
	
	</div>
	<div class="col-md-5">
            <div class="panel" style="background:#D9E0E6;border-radius:10px;-moz-box-shadow:2px 2px 2px rgba(0, 0, 0, .3);-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, .3);box-shadow:2px 2px 2px rgba(0, 0, 0, .3);">
                <div class="panel-body">
                    <!-- THIS IS WHERE YOU INSERT THE CHAT!!!!!!!-->
                    <div class="content">
                        <!--<div class="arrow-up"></div>     -->
                        <div id = "comment-block" style="overflow:auto; color:#414042; padding: 10px; height: 500px;">

							 
                        </div>
                        <div class="form-group">
                            <div class="left-inner-addon">
                                <span class="glyphicon glyphicon-comment fa-flip-horizontal" style=" margin-top:1px;"></span>
                                <label class="sr-only">Names</label>
                                <?php echo form_open('chat/message/'); ?>
                                <input type="text" class="form-control" id="other_user" name="other_user" hidden style="display: none;">
                                <input type="text" class="form-control" id="comment" name= "comment" style="margin-top:10px;font-size:20px; width:70%;" placeholder=" send a message!">
                            </div>
                            <a href="#"><button type="submit" class="btn btn-lg" style="position:relative;background:#1A75BF; color:white; font-size:20px; height:30px; padding-top:0px; margin-top:-55px; margin-left:73%;">Reply</button></a>
                            <?php echo form_close();?>
                        </div>
                        <!--
                        <div class="btn-group">
                        <a href="#"><button type="button" class="btn btn-lg" style="background:#2CA8DC; color:white; font-size:20px;"><span class="glyphicon glyphicon-camera"></span></button></a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
</div>

<?php $this->load->view('footer');?>
<script>
    $(document).ready(function() {
        var temp_array = ['test'];
    });
</script>
<script>
    function change_chat(i, j) {
        $("#comment-block").empty();
        $("#comment-block").load(i.toString(),"limit=20");
        $('#other_user').attr('value', j);
}
										 //"http://localhost/WP_intern-messaging/application/views/chats/text.html");
                                                                                 
</script>

<script>
var highlightLink = function () {
        var active = null, colour = '#D5D8DA';
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
                element.style.backgroundColor = colour;
                active = element;
            }
        };
    }();
</script>	
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
  <script src="<? echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script> -->
      <script src="<? echo $PATH_BOOTSTRAP?>js/inbox.js"></script>
      <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>

</body>
</html> 