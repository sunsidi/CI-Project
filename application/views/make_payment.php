<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<style>
@media (max-width:430px){
	.event-stuff{
		margin-top:120px;
	}
	.event-type-image{
		margin-left:25%;
	
	}
}

@media(max-width:400px)
{
	.event-type-image{
		margin-left:10%;
	}
}

@media(max-width:992px)
{
	.sideway{
		transform:rotate(-90deg);
		-ms-transform:rotate(-90deg);
		-webkit-transform: rotate(-90deg); 
		-moz-transform: rotate(-90deg); 
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
	}

}
</style>

</head>

<body>
<!--header
===========================================-->

<nav class="navbar navbar-custom navbar-static-top" style="width: 100%;height: 68px; background-color:#4b5aa5;">
    <div class="navbar-header">
        <div class="col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
            <a class="navbar-brand navbar-collapse collapse" href="#"><img src="images/testimage.png"
                                                style="width:64px; height:64px; border-radius: 150px;
                                                -webkit-border-radius: 150px;
                                                -moz-border-radius: 150px; position: relative;
                                                margin-top:-22%; margin-left:10%; border:2px solid #662E91;"/>
                                    <p style="color: white; margin-top:-70%; margin-left:120%;">Name</p>
            </a>
        </div>
    </div>
  

        <div class="col-md-offset-4 col-sm-offset-4 col-xs-offset-3">
          <a class="navbar-brand" href="#"><img src="<?php echo $PATH_IMG?>wrevel_logo.png"
                                                style="width:200px; display:block; margin-top:-3%;"/></a>
        </div>


    <div class="navbar-collapse collapse">
    <div class="col-md-offset-9 col-sm-offset-9">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group" style="margin-top: 4%;">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    </div>
    </div>

</nav>

<!--end of header-->

<!--tabs
===========================================-->
	
        <div class="row" style="text-align:center;">
			<div class="btn-group btn-group-lg">
    			<a href="mywrevs.html"><button type="button" class="btn tab" style="font-size:30px;">mywrevs</button></a>
  				<a href="hub.html"><button type="button" class="btn tab" style="font-size:30px;">the hub</button></a>
  				<a href="showroom.html"><button type="button" class="btn tab" style="font-size:30px;">showroom</button></a>
    		</div>
        </div>
  

<!--end of tabs-->

<!--content
==============================================-->
<div class="container">
    
                                    
                                    
<div class="row" style="margin-top:50px; font-size:25px;">
			<div class="col-md-1 event-type-image">
            
            	<!--Image changes based on what type of event-->
            	<img src="<?php echo $PATH_IMG?>parties_button.png" style="position:absolute; z-index:1; margin-top:-50px; display:block;"/>
            </div>
		<div class="col-md-11 event-stuff" style="color:white;">
        	
            
			<div class="col-md-5" style="background:#4992C9; padding:17px; text-align:center;">
            	<!--name of event-->
            	<strong>Event name</strong>
                
                <a href="#" data-toggle="modal" data-target="#basicModal" style="margin-left:10px;">
					    <button type="button" class="btn" >Edit Event Listing</button>
				</a>
                
                			    
			 	<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        				<div class="modal-content" style="height: 1220px;">
     
    					<div class="panel" style="border-color: #714E8A; width: 599px; height: 1220px;">
    
     					 <div class="panel-heading" style="background-color: #714E8A; height: 80px;">
        					<p style="font-size: 45px; color: white;text-align: center;">
                            Edit Your Wrev
          					</p>
     					 </div>
      
	<div class="panel-body" style="text-align:center;font-size:20px; color:black;">
                   
                	<form class="form-horizontal" role="form">
                    <div class="form-group">
   						 <label class="col-sm-2 control-label">Title</label>
                         <div class="col-sm-10">
                 		   <input type="text" class="form-control" placeholder="Title of event" >
                         </div>
                    </div>       
                    
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Info</label>
                        <div class="col-sm-10">
                   		 <textarea class="form-control" rows="3" placeholder="type in something attention grabbing"></textarea>
                         </div>
                    </div>
                    <div class="form-group">
                    	<div class="form-group row">
                        	<label class="col-sm-2 control-label" style="margin-left:10px;">Date</label>
                            <div class="col-sm-4">
                            	<input type="date" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label">Time</label>
                            <div class="col-sm-3">
                            	<input type="text" class="form-control" placeholder="hours?">
                            </div>
                         </div>   
                    </div>
                    
                    <div class="form-group text-left" >
                    	<label class="control-label" style="margin-left:20px;">Hide Location</label>
    					
       				  		   <input type="checkbox" name="yes" value="yes"> 
                               
    					
                     </div>  
                     
                    
                    
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="" >
                        </div>
                    </div>    
                    <div class="form-group">
                    	<div class="form-group row">
                        	<label class="col-sm-2 control-label" style="margin-left:10px;">City</label>
                            <div class="col-sm-3">
                            	<input type="date" class="form-control">
                            </div>
                            <label class="col-sm-1 control-label">State</label>
                            <div class="col-sm-2">
                            	<input type="text" class="form-control" placeholder="">
                            </div>
                            <label class="col-sm-1 control-label">Zip</label>
                            <div class="col-sm-2">
                            	<input type="text" class="form-control" placeholder="">
                            </div>
                         </div>   
                    </div>
                     <div class="form-group">
                    	<label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="" >
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
                            	<input type="email" class="form-control">
                            </div>
                         </div>   
                    </div>
                     <div class="form-group">
                    	<label class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="" >
                        </div>
                    </div>
                   
                     <div class="form-group">
                    	<label class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="" >
                        </div>
                    </div>
                    </form>
                    
                     <form >
                    
       				     <input type="radio" name="status" value="public"> public
				  	 	 <input type="radio" name="status" value="private"> private
		  			  </form>                    

                    <div style="width:200px; height:200px; margin:25px auto;">
                  	  <img src="images/camera_icon.png" style="min-width:100%; max-width:100%;">
                    </div>
                   
                   
                    <button type="button" class="btn btn-lg" style="background:#47AFEA; color:white;">Upload Image</button>
                    
                    </br>
                    <button type="button" class="btn btn-lg" style="background:#1C75BC;margin-top:20px; color:white;">Submit changes</button>

                    

                    
		    </div>
    				</div>
 
 
        				</div>
      				</div>
    			</div>
                
            </div>
            <div class="col-md-2" style="background:#652D90; padding:17.5px; text-align:center;">
            	<!--number of likes-->
            	100 <i class="fa fa-heart-o"></i>
            </div>
            <div class="col-md-4" style="background:#03A79E; padding:10.5px; text-align:center;">
            	<button type="button" class="btn" style="background:#15588D; font-size:25px;">I'm going</button>
                <button type="button" class="btn" style="background:#15588D; font-size:25px;">Maybe</button>
                <button type="button" class="btn" style="background:#15588D; font-size:25px;">No</button>
            </div>
        </div>    
	</div>
    <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">    	
        		<div class="panel-body background" style="padding: 25px 50px ; font-size:20px;">
                	<div class="row" style="color:white;text-align:center; font-size:23px;">
                    	
                    	<div class="col-md-3">
                        	<div class="panel" style="background:#665393;">
                            	<div class="panel-body">
                                	<p><span class="glyphicon glyphicon-calendar"></span> Date</p>
                                    
                                    <!-- Date of event happening -->
                                    <p>Dec. 20</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="panel" style="background:#03A79E;">
                            	<div class="panel-body">
                                	<p><span class="glyphicon glyphicon-time"></span> Time</p>
                                    
                                    <!--Time event takes place -->
                                    <p>12:00PM - 12:00AM</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="panel" style="background:#4EA48B;">
                            	<div class="panel-body">
                                	<p><i class="fa fa-money"></i> Price</p>
                                    
                                    <!--how much event cost-->
                                    <p>$100</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="panel" style="background:#1C9DBC;">
                            	<div class="panel-body">
                                	<p><span class="glyphicon glyphicon-user"></span> Attending</p>
                                    
                                    <!--how many people are attending-->
                                    <p>10,000</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <hr style="border-color:#C7D1DA;">
                    <div class="row">
                    	<div class="col-md-6">
                        	<div class="row">
                            	<!--image of event-->
                            	<img src="images/party.jpg" style="max-width:100%; min-width:100%; "/>
                            </div>
                            <div class="row" style="padding:0 50px 0;">
                            	
                                    <h3><i class="fa fa-exclamation-circle"></i> What is this?</h3>
                                    
                                    <!--Description-->
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                               
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align:center;">
                        	<div class="row" style="padding:10px;">
                            
                            	<!--Like button-->
                            	<button type="button" class="btn listing-button"><i class="fa fa-heart-o"></i></button>
                                
                                <!--Add to Palette button-->
                                <button type="button" class="btn listing-button"><span class="glyphicon glyphicon-list-alt"></span></button>
                                
                                <!--Share Button-->
                                <button type="button" class="btn listing-button"><i class="fa fa-share-square-o"></i></button>
                                
                            </div>
                            <div class="row" style="color:white;">
                            	<a href="http://wrevenues.wrevel.com" style="color:white;"><button type="button" class="btn" style="background:#1D74B9; font-size:23px;">View Wrevenues</button></a>
                                
                                <!--Ticketing System button-->
                                <a href="#" data-toggle="modal" data-target="#largeModal"><button type="button" class="btn" style="background:#1D74B9; font-size:23px; color:white;">Buy Tickets</button></a>
                                
                                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
 									<div class="modal-dialog modal-lg" >
    									<div class="modal-content" style="background:#216EAD;">
                                        	
                                            <div class="row">
                                            	<div class="col-md-6" style="background:#662D91; height:75px; padding-top:15px; ">
                                                	<img src="<?php echo $PATH_IMG?>wrevel_logo.png"style="width:200px;z-index:1;"/>
                                                </div>
                                                <div class="col-md-6" style="background:#2B3990; height:75px; font-size:35px; padding:15px 10px 10px 0; ">
                                                	<p>Order Tickets</p>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                            	<!--<div class="col-md-2">
                                                	<p class="sideway" style="transform:rotate(-90deg);
-ms-transform:rotate(-90deg);-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1); font-size:30px; margin-top:100px;">Event Info</p>
                                                </div>-->
                                              
       											<div class="col-md-12" style="border-left:1px solid #5992C2;">
                                                <p  style="font-size:30px;">Event Info</p>
               						<form class="form-horizontal" role="form" method="post" action="http://www.google.com">
                   							 		<div class="form-group">
												
												
   						 								<label class="col-sm-3 control-label">Event ID Form</label>
														
                         								<div class="col-sm-8">
												
                 		   									<?php echo $event[0]['event_id']?>
														
                         								</div>
						
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Full Name</label>
                         								<div class="col-sm-8">
                 		   									<?php echo $event[0]['e_name']?>
                         								</div>
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Price</label>
                         								<div class="col-sm-8" style="text-align:left; padding-top:7px;">
                 		   									$ <?php echo $event[0]['e_price']?>
                         								</div>
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Quantity</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" placeholder="0" name = "quantity">
                         								</div>
                    								</div>
                                                    
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Delivery Form</label>
                         								<div class="col-sm-8 text-left">
                 		   									 <input type="checkbox" value = "true" name = "print" > print at home (free)
                                                             </br>
                          									 <input type="checkbox" value = "true" name = "mail"> mail form ($3.45)
                         								</div>
                    								</div>
                                                    
                                                    <div class="form-group">
   						 							
                    								</div>                

                                                </div>  
                                            </div>
                                            <div class="row" style="margin-top:50px;">
                                            	<!--<div class="col-md-2">
                                                	<p class="sideway" style="transform:rotate(-90deg);
-ms-transform:rotate(-90deg);-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1); font-size:30px; margin-top:100px;">Billing Info</p>
                                                </div>-->
       											<div class="col-md-12" style="border-left:1px solid #5992C2;">
										
										
										<p style="font-size:30px;">Billing Info</p>
               						 			
										
										
                   							 		
											<div class="form-group">
   						 								<label class="col-sm-3 control-label">First Name</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "f_name">
                         								</div>
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label" >Last Name</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "l_name">
                         								</div>
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Email Address</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "email">
                         								</div>
                    								</div>
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Address</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "address" >
                         								</div>
                    								</div> 
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">City</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "city">
                         								</div>
                    								</div> 
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">State</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "state">
                         								</div>
                    								</div>   
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Zip Code</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "zip">
                         								</div>
                    								</div> 
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Credit Card #</label>
                         								<div class="col-sm-8">
                 		   									<input type="text" class="form-control" name = "card">
                         								</div>
                    								</div>   
                                                    <div class="form-group">
   						 								<label class="col-sm-3 control-label">Expiration Date</label>
                         								<div class="col-sm-3">
                 		   									<input type="text" class="form-control" placeholder="MM" name="exp_month">
                         								</div>
											<div class="col-sm-3">
                 		   									<input type="text" class="form-control" placeholder="YYYY" name = "exp_year">
                         								</div>
											
                    								</div>
						    <div class="form-group">
   			
                         								<div class="col-sm-2">
                 		   									<input type="text" class="form-control" placeholder="CVC" name="cvc">
                         								</div>
											
											
                    								</div>
						    <button type="submit" class="btn btn-lg" style="background:#00AEEF; color:white;">submit</button>
                                                
                                                </div>
					    
                                            </div>
					    
                                            
      										</div>
					    </form> 
                                		
                                	</div>
                                </div>
                                
                            </div>
                            <h3><span class="glyphicon glyphicon-user"></span> Who's Attending?</h3>
                            
                            <div class="panel" style="background:#E9EEF2;">
                            	<div class="panel-body">
                                	<div class="row">
                                    	<div class="col-md-4">
                                        
    										<div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                        <div class="col-md-4">
                                        
    										<div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                        <div class="col-md-4">
    										
                                            <div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                    </div>
                                    
                                    <div class="row">
                                    	<div class="col-md-4">
    										
                                            <div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                        <div class="col-md-4">
    										
                                            <div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                        <div class="col-md-4">
    										
                                            <div class="thumbnail default">
      											<img src="images/testimage.png" style="border-radius:150%; width:100px; height:100px;"/>
      											<div class="caption" style="text-align:center;">
        											<p>Party Animals</p>
      											</div>
    										</div>
                                            
  										</div>
                                    </div>
                                    
                                    <!--Shows all users attending -->
                                    <button type="button" class="btn" style="background:#1C74BB; color:white; font-size:23px;">View More</button>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                    <!--Location of event-->
                    <div class="row">
                    	<div class="col-md-4">
                       
                        	
                            <h3><i class="fa fa-map-marker"></i> Where is it?</h3>
                            <!--Address-->
                            <div style="padding:10px 20px 0; line-height:18px; text-align:left;">
                            <!--Address line-->
                            <p>80 Grove Street</p>
                            <!-- City , State , Zip Code-->
                            <p>New York, NY 10012</p>
                            <!--Country-->
                            <p>USA</p>
                            </div>
                            
                            <div style="padding:10px 0; text-align:center;">
                            <!--Button that leads to Google Maps-->
                            <button type="button" class="btn" style="background:#1D74B9; font-size:23px;color:white; ">Get directions</button>
                            </div>

                        </div>
                        
                        <div class="col-md-6">
                        
                        	<!--   Google Map Goes Here, different depending on where location is-->
                            <base target="_blank" /> <iframe width="100%" height="300" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"
          src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=buenos+aires&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,80.859375&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Buenos+Aires,+Argentina&amp;z=11&amp;ll=-34.603723,-58.381593&amp;output=embed"></iframe>
          <br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=buenos+aires&amp;sll=37.0625,-95.677068&amp;sspn=38.638819,80.859375&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Buenos+Aires,+Argentina&amp;z=11&amp;ll=-34.603723,-58.381593"
          style="color:#0000FF;text-align:left">See bigger map</a>
                    </small>
                            
                        </div>
                    </div>
                    
                    <div class="row" style="padding:10px 30px 20px;">
                    	<h3><i class="fa fa-comment-o"></i> Contact</h3>
                        <!-- Contact Info -->
                        <p style="text-align:center;"><i class="fa fa-phone"></i> (455) 456-4648  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-envelope-o"></i> ndgfjn@gmail.com</p>
                        <!--
                        <ul style="text-align:center;">
                        	<li style=" display:inline; padding:10px;"><i class="fa fa-phone"></i> (455) 456-4648</li>
                            <li style=" display:inline;"> <i class="fa fa-envelope-o"></i> ndgfjn@gmail.com</li>
                        </ul>-->
                        
                    </div>
                    
                    <div class="row" style="padding:10px 30px 20px;">
                    	<h3><span class="glyphicon glyphicon-link"></span> Links</h3>
                        
                        <!--Links-->
                        	<ul style="list-style-type: none; margin-left:10px;">
                            	<li>wrevel.com</li>
                                <li>facebook.com</li>
                            </ul>
                    </div>
                    
                    <div class="row" style="padding:10px 30px 20px;">
                    	<!--Uploaded Photos and Videos of events-->
                    	<h3><span class="glyphicon glyphicon-picture"></span> Photos/Videos</h3>
                        
                        <div class="row" style="text-align:center;">	
                        	<button type="button" class="btn btn-lg" style="background:#1C74BB;color:white; font-size:23px;">Browse All</button>
                        </div>
                    </div>
                    
                    <div class="row" style="padding:10px 30px 20px;">
                    	<!--Tags for events-->
                    	<h3><span class="glyphicon glyphicon-tag"></span> Tags</h3>
                    </div>
                    
                    <div class="row" style="padding:10px 30px 20px;">
                    	<h3><i class="fa fa-comments"></i> Chatbox</h3>
                        <div style="text-align:center;">
                        <input type="text" placeholder="write something">
                        
                        <!--Submit comment-->
                        <button type="button" class="btn btn-lg" style="background:#1C74BB;color:white; padding:5px 10px;">Post Comment</button>
                        
                        <!--Upload Photo to comment box-->
						<button type="button" class="btn btn-lg" style="background:#27AAE2;color:white; padding:5px 10px;"><i class="fa fa-camera"></i></button>	
                        </div>
                    </div>
                    
                    <div class="row" style="padding:0px 30px;">
                    	<div class="panel">
                        	<div class="panel-body">
                            <!-- Comment Box-->
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>            
</div>

<!--end of content-->

<!--footer
==================================================-->
	<div id="footer navbar-fixed-bottom">
		<div class="container links" style="text-align:center;">
			<p class="text-muted">
			<a href="http://wrevel.com/aboutus/" class="bottom-link">About Us</a>
			<a href="http://wrevel.com/privacy/" class="bottom-link">Privacy </a>
			<a href="http://wrevel.com/terms/" class="bottom-link">Terms </a>  
			<a href="http://www.tumblr.wrevel.com/blog/" class="bottom-link">Blog </a>
			<a href="http://www.wrevel.com/press/" class="bottom-link">Press </a>
			<a href="http://www.wrevel.com/careers/" class="bottom-link">Careers </a>
			<a href="http://wrevenues.wrevel.com/" class="bottom-link">Wrevenues </a>
			<a href="http://www.wrevel.com/index/contact/" class="bottom-link">Contact Us </a>
			<a href="http://www.wrevel.com/faq/" class="bottom-link">FAQ </a>
            <a href="http://www.wrevel.com/nation/" class="bottom-link">Nation</a>
            <a href="http://www.wrevel.com/partners/" class="bottom-link">Partners </a>
			
			<p class="copy_right">&copy; Wrevel, Inc. All Rights Reserved, 2013</p>
            </p>
		</div>
	  
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.min.js"></script>
	<script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script> 
</body>
</html>