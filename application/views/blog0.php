<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Introducing Wrevel&rsquo;s Project Phoenix</title>
<meta name="description" content="Ever feel tired of another boring night alone on the couch with take-out and absolutely nothing to do? That’s exactly how Wrevel founder, Saj, felt one Friday night with an egg roll in hand during his earlier years in college. “Wouldn’t it be cool if there was a website where I could find a party near me and make some new friends?” After saying “goodbye” to Tom the delivery guy and finally putting an end to all those long boring nights, the idea of Wrevel emerged.">
<meta name="keywords" content="event hosting, parties, new york city life, tickets, wrevel, online tickets, tech company, spaces, buy tickets, services, blog">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "98b7df42-3881-4ba4-adc3-bcb7a479d75e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<?php $this->load->view('header');?>   
    
 

<!--content
==============================================-->
    
   <h1 class="title" style="text-align:center;font-family:GillSans;color:white;"><a href="<?php echo base_url().'info/blog'?>" style="color:white;"><img src="<?php echo $PATH_IMG?>w1.png"/>Blog</a></h1>
    <div class="container" style="padding: 4%;">
	
	
<div class="container blog-container">
    <!--Gazette-->   
        <div class="panel" style="margin-top: 80px;background-color: #d7e0e9; border:none ; border-radius: 10px;">
	    
	    <div class="panel-heading blog-header" style="position: relative; 
	    background-image: linear-gradient(rgba(0,167,157,0.5), rgba(0,167,157,0.5)),url(<?php echo $PATH_IMG?>header_image.png);background-size:100% 200px;;border-top-left-radius: 10px; border-top-right-radius: 10px;">
              	<p style="text-align: right; color: white; font-size: 23px;">By. the Wrevel Team</p>
		<p style="text-align: center; color: white; font-size: 32px;"><b>Introducing Wrevel’s Project Phoenix</b></p>
		<div class="hidden-bar" style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(3,90,86,0.8), rgba(3,90,86,0.8)); width: 100%;height: 50px;">
		    <p style="padding: 10px;text-align: center;padding-left: 0px;color: white; font-size: 25px;"></p>
		</div>  
            </div>
	   
	    <div class="panel-body" style="background-color: rgb(228,234,239); border-radius: 10px;">
		<div class="row">
		<div class="col-md-4 related-blog" style="margin-top: 5%;text-align:center;padding-left:30px;">
		    <p style="text-align: center; font-size: 20px;">Posted on</p>
		    <div style="background: rgba(3,90,86,1); margin-left:auto;margin-right:auto;width: 100px; height: 40px;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
			<p style="color: white; font-size: 23px;  padding-top:5px;"><b>Nov 14</b></p>
		    </div>
		    <!--<hr style="border-color: grey; width: 70%; border-width: 2px;"/>
		    <p style=" font-size: 20px;">48 <i class="fa fa-heart-o"></i></p>-->
		    <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
		<!--Click to Share-->
				
                <a href="#" data-toggle="modal" data-target="#shareModal" class="btn btn-lg create-btn" style=" font-size:25px; padding:5px 10px;border-radius:5px;border:2px solid #414042; ">Share This</a>
                
                <!--Popup for share this-->
                <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background:#c2d2dc;">
                              <div class="modal-header" style="background:#628da3; color:white;text-align:center; font-size:20px;">
                              <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <i class="fa fa-share-square-o"></i> Share on Social Media
                              </div>
                              <div class="modal-body">
                                   
                                    <center><span class='st_sharethis_large' displayText='ShareThis'></span>
				    <span class='st_facebook_large' displayText='Facebook'></span>
				    <span class='st_twitter_large' displayText='Tweet'></span>
				    <span class='st_linkedin_large' displayText='LinkedIn'></span>
			 	    <span class='st_pinterest_large' displayText='Pinterest'></span>
				    <span class='st_email_large' displayText='Email'></span></center>
                               </div>
                         </div>
                    </div>
                 </div>
		    <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
		    <p style=" font-size: 20px;">Related Posts</p>
		    <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
		    <a href="<?php echo base_url().'info/blog3'?>"><img src="<?php echo $PATH_IMG?>NYE-2015-Wrev.jpg" style="width: 100%;"></a>
		    <a href="<?php echo base_url().'info/blog3'?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b>New Years Eve 2015</b></p></a>
			<hr style="border-color: grey; width: 70%; border-width: 2px;"/>
			<a href="<?php echo base_url().'info/blog1'?>"><img src="<?php echo $PATH_IMG?>grind.png" style="width: 100%;"></a>
		    <a href=<?php echo base_url().'info/blog1'?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b>What&rsquo;s in store for Wrevel</b></p></a>
		    
		</div>
		
		<div class="col-md-offset-1 col-md-6" style="margin-top: 5%;">
		    <p style="font-size: 20px;">Ever feel tired of another boring night alone on the couch with take-out and absolutely nothing to do? That’s exactly how Wrevel founder, Saj, felt one Friday night with an egg roll in hand during his earlier years in college. “Wouldn’t it be cool if there was a website where I could find a party near me and make some new friends?” After saying “goodbye” to Tom the delivery guy and finally putting an end to all those long boring nights, the idea of Wrevel emerged.</p>
		    <a href="#"><img src="<?php echo $PATH_IMG?>projectphoenix_image.jpg" style="width: 100%; margin-top: 5%;"></a>
		    <p style="text-align: center; margin-top: 2%;">Wrevel Wrev event web page</p>
		    
		    <p style="font-size: 20px;">Wrevel is a social media platform aimed to assist its users in creating and discovering events anywhere from a local cafe performance, to the next biggest party, to whatever else even the vast mind of your little seven year old cousin Katie’s mind can imagine. After getting a ton of helpful feedback during our beta phase, Wrevel’s new development, Project Phoenix, has finally given the internet and mobile users the ability to easily interact with others in their area in a more fun as well as festive way.</p>
		    <p style="font-size: 20px;"> 
For eight long months, our extraordinary hardworking team of 2 frontend and 3 backend developers as well as 2 designers has given Wrevel a whole new meaning to social media through Project Phoenix. With custom coding and absolutely no initial framework, it offers users a new online experience with sleek modern UX/UI design and easy navigation. The ‘Wrevs’ homepage, for example, works as a newsfeed for all of the latest upcoming events. The ‘Exclusive’ category also offers an insight to experiencing as well as exploring something new within hotspots, icebreakers and culture.
</p>
			<p style="font-size: 20px;">With Project Phoenix’s user-friendly ticketing system, selling and buying tickets has truly never been easier. With a simple add of your credit card, you’re set for an amazing night. For sellers, getting a hold of your bank info is totally unnecessary and our ticketing is also currently the cheapest yet with a fee of 1.5% of a total transaction and $0.50 per transaction – as compared to our top competitors such as Eventbrite, YPlan and Ticketbud. All profits made by each ticket you sell, is also all yours - unlike our competitors, we do not charge a single penny!</p>
<p style="font-size: 20px;"> Say “goodbye” to your delivery guy because meeting new friends and discovering something new just got a ton easier.</p>
		    <!--<p style="font-size: 24px; margin-top: 5%;"><b>1. Go to a Central Park SummerStage show</b></p>
		    <p style="font-size: 20px;">Jam to live music under the stars during the <a href="#">season's last performances</a> &mdash; the lineup finishes with the Armada Fania showcase (Aug 24) and the 22nd annual Charlie Parker Jazz Festival (Aug 23, 24).</p>
		    <p style="font-size: 24px; margin-top: 5%;"><b>2. See an outdoor movie</b></p>
		    <p style="font-size: 20px;">There are only a few more flicks showing on our beloved <a href="#">outdoor screens</a>. Crazy, Stupid, Love (Sat 30) and Skyfall (Sun 31) are the final movies at the <a href="#">South Street Seaport</a>, and the <a href="#">Brooklyn Bridge Park</a> series concludes with a film chosen by public vote (Aug 28).</p>
		    <p style="font-size: 24px; margin-top: 5%;"><b>3. Go swimming</b></p>
		    <p style="font-size: 20px;">Take a dip in a free <a href="#">public pool</a> or hit the sandy shores of one of NYC's eight public beaches. Beaches and pools close September 1, so get that vitamin D while you can.</p>
		    <p style="font-size: 24px; margin-top: 5%;"><b>4. Dance at a summer party</b></p>
		    <p style="font-size: 20px;">You have three more chances (Aug 23, Aug 30 and Sept 6) to carouse on <a href="#">MoMA</a>'s PS1 courtyard. Acts still slated to perform include the Range, Dam-Funk and Lone. If you miss the fun there, though, there are quite a few other summer parties left, including the Coney Island Reggae Beach Party (Aug 31) and the weekly Mister Sunday at Industry City. </p>
		    <p style="font-size: 24px; margin-top: 5%;"><b>5. Go kayaking</b></p>
		    <p style="font-size: 20px;">Grab a paddle and snap on a life jacket: the free kayaking program at <a href="#">Brooklyn Bridge Boathouse</a> is offered two more times (Aug 21 and 30).</p>
		    <p style="font-size: 24px; margin-top: 5%;"><b>6. Cheer for your minor league team</b></p>
		    <p style="font-size: 20px;">Though the Yankees and the Mets play regular season games through September, the Brooklyn Cyclones play their last Coney Island home game against the <a href="#">Staten Island Yankees</a> this month (Aug 31). The teams move to Staten Island for the final game of the minor league season (Sept 1).</p>-->
		</div>
		</div>
		
		<div class="row related-blog-small" style="text-align:center;">
			<hr style="border-color: grey; width: 80%; border-width: 2px;"/>
			<!--Posted on 
			<span style="color: white; padding:5px;background: rgba(3,90,86,1); margin-left:auto;margin-right:auto;width: 100px; height: 40px;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">Nov 14</span> -->
			<div class="row">
				<!--<div class="col-sm-6 col-xs-6">
					
					<p style="font-size: 20px;">Posted on</p>
					<div style="background: rgba(3,90,86,1); margin-left:auto;margin-right:auto;width: 100px; height: 40px;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
						<p style="color: white; font-size: 20px;  padding-top:5px;"><b>Nov 14</b></p>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6">
					<!--<hr style="border-color: grey; width: 55%; border-width: 2px;"/>
					<p style=" font-size: 20px;padding-top:25px;">48 <i class="fa fa-heart-o"></i></p>
				</div>-->
				<div class="col-sm-12">
				<p style="font-size: 20px;">Posted on</p>
					<div style="background: rgba(3,90,86,1); margin-left:auto;margin-right:auto;width: 100px; height: 40px;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
						<p style="color: white; font-size: 20px;  padding-top:5px;"><b>Nov 14</b></p>
					</div>
				</div>
			</div>
		    <hr style="border-color: grey; width: 65%; border-width: 2px;"/>
		<!--Click to Share-->
				<div style="margin-left:auto;margin-right:auto;">
                <a href="#" data-toggle="modal" data-target="#shareModal2" class="btn btn-lg create-btn" style="font-size:25px; padding:5px 10px;border-radius:5px;border:2px solid #414042; ">Share This</a>
                </div>
                <!--Popup for share this-->
                <div class="modal fade" id="shareModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background:#c2d2dc;">
                              <div class="modal-header" style="background:#628da3; color:white;text-align:center; font-size:20px;">
                              <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <i class="fa fa-share-square-o"></i> Share on Social Media
                              </div>
                              <div class="modal-body">
                                   
                                    <center><span class='st_sharethis_large' displayText='ShareThis'></span>
				    <span class='st_facebook_large' displayText='Facebook'></span>
				    <span class='st_twitter_large' displayText='Tweet'></span>
				    <span class='st_linkedin_large' displayText='LinkedIn'></span>
			 	    <span class='st_pinterest_large' displayText='Pinterest'></span>
				    <span class='st_email_large' displayText='Email'></span></center>
                               </div>
                         </div>
                    </div>
                 </div>
		    <hr style="border-color: grey; width: 65%; border-width: 2px;"/>
		    <p style=" font-size: 20px;">Related Posts</p>
		    <!--<hr style="border-color: grey; width: 55%; border-width: 2px;"/>-->
		    <a href="<?php echo base_url().'info/blog3'?>"><img src="<?php echo $PATH_IMG?>NYE-2015-Wrev.jpg" style="width: 100%;"></a>
		    <a href="<?php echo base_url().'info/blog3'?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b>New Years Eve 2015</b></p></a>
			<hr style="border-color: grey; width: 70%; border-width: 2px;"/>
			<a href="<?php echo base_url().'info/blog1'?>"><img src="<?php echo $PATH_IMG?>grind.png" style="width: 100%;"></a>
		    <a href=<?php echo base_url().'info/blog1'?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b>What&rsquo;s in store for Wrevel</b></p></a>
		
		</div>
		
	     </div>
        </div>
	   
</div>
</div>
<!--content
==============================================-->

<?php $this->load->view('footer');?>

  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
    
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>


</body>
</html> 