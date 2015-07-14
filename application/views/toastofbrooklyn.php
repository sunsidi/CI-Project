<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Toast of Brooklyn | Wrevel - Discover Your World, Host & Experience Events</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="../../src/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../src/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../../src/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../src/bootstrap/css/main.css" rel="stylesheet">
<link href="../../src/bootstrap/css/event-lightbox.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="description">

<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
            type="text/javascript"></script> 
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>

<style>

<!--@media (max-width:430px){
	
	.comment-section{
		width:100%;
		height:300px;
		font-size:12px;
	}
	.status-bar{
	border-top-right-radius:0;
	}
}-->



</style>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "508ee0b6-1f7c-4daa-827e-d76d4d266558", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
<div class="container" style="padding-bottom:50px;background:#A25062;">
<div class="toastofbrooklyn" style="margin-top:100px; margin-left:auto;margin-right:auto;">
		<div class="row" style="background:#664B65;color:white;padding:1.5% 3%;">
			<div class="col-md-12">
				<strong style="font-size:17px;">Toast of Brooklyn</strong>  <span style="float:right;">FRI, NOV 6 to SAT, NOV 7</span>
			</div>
        </div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-5" style="padding-left:0;">
				<div class="row toast_padding" style="background:white;margin-left:0;margin-right:0;padding-left:5%;position:relative;">
					<p><img src="<?php echo $PATH_IMG?>/RMG_LOGO_1.jpg" style="width:80px;float:left;"/> <span style="position:absolute;top:20%;left:50%;">Hosted by </br> <strong>Rockstone Media Group</strong></span></p>
					
					<!--<div>
						<img src="<?php echo $PATH_IMG?>/RMG_LOGO_1.jpg" style="width:100px;"/>
					</div>
					<div>
					<p>Hosted by</p>
					<p><strong>Rockstone Media Group</strong></p>
					</div>-->
				</div>
				
				<div style="margin-top:10px;">
					<div style="width:25%;float:left;padding-right:5px;">
						<div style="background:white;text-align:center;padding:10px;">
							123 <i class="fa fa-heart-o"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-right:5px;padding-left:5px;">
						<div style="background:#F0F1F1;text-align:center;padding:10px;">
							<i class="fa fa-share-square-o"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-right:5px;padding-left:5px;">
						<div style="background:#F0F1F1;text-align:center;padding:10px;">
							<i class="fa fa-users"></i>
						</div>
					</div>
					<div style="width:25%;float:left;padding-left:5px;">
						<div style="background:#E9EFF3;text-align:center;padding:5.5px;">
							<span class="icon-calendar_icon" style="font-size:25px;"></span>
						</div>
					</div>
				</div>
				
				<div class="row" style="margin-left:0;margin-right:0;">
					<a href="#" class="toast_status">I'm Going</a>
					<a href="#" class="toast_status">Maybe</a>
					<a href="#" class="toast_status">No</a>
				</div>
				
				
				
				<div style="background:white;text-align:center;margin-top:10px;padding:15px 10%;line-height:200%;">
					<p><strong>Nov 6 at 5:00PM</strong></p>
					<p style="border-bottom:1px solid black;"><strong>Nov 7 at 5:00PM</strong></p>
					<p style="border-bottom:1px solid black;"><strong>Brooklyn Center</strong></p>
					<p><strong>107 Rivington Street</strong></p>
					<p style="border-bottom:1px solid black;">New York, NY</p>
					<p style="border-bottom:1px solid black;">Tickets Available from <strong>$20 - $40</strong></p>
					<p>This event is for ages 21 and over</p>
				</div>
				
				<a href="#" class="btn toast_buy">Buy Tickets Now</a>
				
				<div style="background:white;text-align:center;margin-top:10px;padding:15px;">
					<p><strong><span class="icon-contacts_icon" style="font-size:20px;vertical-align:middle;"></span> Contact Info for Event</strong></p>
					<p style="color:#2874B0;font-weight:bold;">(800) 888-8888</p>
					<p style="color:#2874B0;font-weight:bold;">timetoparty@hotmail.com</p>
				</div>
				
				<div style="background:white;text-align:center;margin-top:10px;padding:15px;">
					<p><span class="icon-link_icon" style="font-size:20px;vertical-align:top;"></span> Links<p>
					<a href="https://www.facebook.com/toastbrooklyn" target="a_blank" style="color:#2874B0;font-weight:bold;">https://www.facebook.com/toastbrooklyn</a>
				</div>
				
			</div>
			
			<div class="col-md-7">
				<div class="row">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner toast_pictures" role="listbox">
					<div class="item active">
					  <img src="<?php echo $PATH_IMG?>/background.png" alt="...">
					  
					</div>
					<div class="item">
					  <img src="<?php echo $PATH_IMG?>/bucket_list.png" alt="...">
					 
					</div>
					<div class="item">
					  <img src="<?php echo $PATH_IMG?>/workenvironment_image.jpg" alt="...">
					 
					</div>
					
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				</div>
				
				<div class="row" style="background:white;padding:15px 50px;margin-top:10px;">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				
					<div class="row" style="margin-top:10px;text-align:center;padding:0;background:white;font-size:12px;">
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Christopher Garcia</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding:20px;padding-bottom:0;background:white;">
						<img src="<?php echo $PATH_IMG?>/experience_image.png" class="attendees"/>
						<p>Wrevel</p>
						</div>
						<div class="col-md-2 col-sm-6" style="padding-top:20px;padding-bottom:25px;color:white;background:#1D74BB;">
						<p><span class="icon-plus_icon" style="font-size:25px;"></span></p>
						<strong style="font-size:25px;">1,230</strong> Going
						</div>
					</div>
				
				<div class="row" style="height:200px;overflow:hidden;margin-top:10px;position:relative;">
					<img src="http://www.brandeis.edu/about/images/newformat/map2.jpg"/>
					<a href="#" class="btn toast_directions">Get Directions</a>
				</div>
				
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-10" style="padding:0;">
					<textarea class="form-control" rows="1" placeholder="Type something in here"></textarea>
					</div>
					<div class="col-md-2" style="padding:0;">
					<button class="btn toast_comment_btn">Post Comment</button>
					</div>
				</div>
				<!--where the comments show up-->
				<div class="row" style="background:white;height:150px;">
					
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

    var userLocation =  <?php echo json_encode($event[0]['e_address']. "," . $event[0]['e_state'] . "," .$event[0]['e_city']. "," . $event[0]['e_zipcode']); ?>;


    if (GBrowserIsCompatible()) {
       var geocoder = new GClientGeocoder();
       geocoder.getLocations(userLocation, function (locations) {         
          if (locations.Placemark)
          {
             var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
             var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
             var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
             var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;

             var bounds = new GLatLngBounds(new GLatLng(south, west), 
                                            new GLatLng(north, east));

             var map = new GMap2(document.getElementById("map_canvas"));

             map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
             map.addOverlay(new GMarker(bounds.getCenter()));

             new GStreetviewPanorama(document.getElementById("pano"),
                                     { latlng: bounds.getCenter() })
          }
       });
    }
    </script>
    <script>
    	var max_tickets = 0;
    	function change_qty_price() {
    		if($('#ticket_type').val() == "") {
    			$('#pricing_base').hide();
    			$('#info_base').hide();
    			$('#deadline_base').hide();
    			$('#billing_info').hide();
    			$('#not_set_up').hide();
    		}
    		else {
    				$("#payment_submit").removeAttr('disabled');
    				$('#not_set_up').hide();
	    			$('#pricing_base').show();
	    			$('#info_base').show();
	    			$('#deadline_base').show();
		    		$('#quantity_base').children().remove();
		    		var temp = ($('#ticket_type').val()).split('|');
                                var price_number = Number(temp[2]).toFixed(2);
                                if(temp[5] != 0) {  //YUan change temp[5]==0 to temp[5]!=0
                                    $('#ticket_price').attr('value', price_number);
                                    $('#ticket_price2').html('$'+price_number);
                                    $('#quantity_left').html(temp[1] + ' left.');
                                    $('#ticket_info').html(temp[3]);
                                    $('#ticket_deadline').html(temp[4]);
                                    max_tickets = temp[1];
                                    var content = '<select id="quantity_type" class="form-control" placeholder="0" name = "quantity">';
                                    for(var i = 0; i <= max_tickets; i++) {
		    			content += '<option value="'+i+'">'+i+'</option>';
                                    }
                                    //Commented out until we can handle multiple ticket requests. FINISHED
                                    /*content += '<option value="0">0</option>';
                                    if(Number(temp[1])) 
                                    	content += '<option value="1">1</option>';*/
                                    content += '</select>';
                                    $('#quantity_base').append(content);
                                    if(price_number == 0) {
		    			$('#billing_info').hide();
                                    }
                                    else {
                                            <?php if($posted_recip_id == "") {?>
                                                    $('#billing_info').show();
                                            <?php } else {?>
                                                    $('#not_set_up').show();
                                                    $('#payment_submit').attr('disabled','disabled');
                                            <?php }?>
                                    }
                                }
                                else {
                                    $('#pricing_base').hide();
                                    $('#info_base').hide();
                                    $('#deadline_base').hide();
                                    $('#billing_info').hide();
                                    $('#not_set_up').hide();
                                    $('#expired_base').show();
                                    $('#payment_submit').attr('disabled','disabled');
                                }
                                
	    	}
    	}
    </script>
    <script>
    	$(document).ready(function() {
    		$('input[type=radio][name=saved_card]').change(function() {
        		if (this.value == 'false') {
        			$(".enter_card").attr('disabled', false);
        		}
        		else {
        			$(".enter_card").attr('disabled', true);
        		}
    		});
	});
    </script>
    <script>
        function edit_more_event_photos() {
            var content = '<div class="image-upload">'
                                +'<input id="file-input" name = "edit_event_photos[]" type = "file"/>'
                            '</div>';
            $('#edit_event_photos_base').append(content);
        }
    </script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  -->
    <!--<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.min.js"></script>
	<script src="<?php echo $path['PATH_BOOTSTRAP']?>js/bootstrap.js"></script> -->
		<script src="../../src/bootstrap/js/lightbox.js"></script>
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