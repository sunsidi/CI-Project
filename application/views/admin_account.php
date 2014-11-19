<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin System</title>

<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.vertical-tabs.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
	ul.tabs-left>li{
	background:#55C3C0;
	font-size:20px;
	margin-top:10px;
	border-radius:10px;
	border-color:#C8CBD2;
	}
	li>a{
	color:white;
	}
	.tabs-left>li.active{
	background:#BBE7E6;
	border-radius:10px;
	border-color:#C8CBD2;
	}
	ul>li:first-child{
	margin-top:0px;
	}
	
	.tab-pane{
	border-radius:15px;
	}

</style>
</head>

<body>
<?php $this->load->view('header');?>

<!--content
==============================================-->
  <div class="container" style="padding-bottom:50px;">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-3 col-md-offset-1"> <!-- required for floating -->
			<!-- Nav tabs -->
			<div class="panel panel-default" style="border:none;-moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.5);-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.5); box-shadow: 0px 0px 5px rgba(0,0,0,0.5);border-radius:15px;">
				<div class="panel-heading" style="background:#5DBAE5;color:white;border-top-left-radius:15px;border-top-right-radius:15px;">
    					<h3 class="panel-title text-center" style="font-size:28px;">Admin System</h3>
  				</div>
  				<div class="panel-body" style="background:#D9E2EB;border-bottom-left-radius:15px;border-bottom-right-radius:15px;">
					<ul class="nav nav-tabs tabs-left" style="text-align:center;border:none;">
						<li class="active"><a href="#home" data-toggle="tab">Summary</a></li>
						<li><a href="#users" data-toggle="tab">Users</a></li>
						<li><a href="#listings" data-toggle="tab">Listings</a></li>
						<li><a href="#transactions" data-toggle="tab">Transactions</a></li>
						<li><a href="#blog" data-toggle="tab">Blog</a></li>
						<li><a href="#user_stats" data-toggle="tab">User Stats</a></li>
						<li><a href="#listing_stats" data-toggle="tab">Listing Stats</a></li>
						<li><a href="#site_stats" data-toggle="tab">Site Stats</a></li>
						<li><a href="#multiple_listings" data-toggle="tab">Multiple Listings</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="col-md-7" style="padding:0; border-radius:15px;-moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.5);-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.5); box-shadow: 0px 0px 5px rgba(0,0,0,0.5);">
			<!-- Tab panes -->
			<div class="tab-content" style="border-radius:15px;">
			
				<!--Summary-->
				<div class="tab-pane active default-tabs" id="home" style="background:rgba(255,255,255,0.5);color:#404041; padding:10%;text-align:center;">
				<div class="row">
					<div class="col-md-6">
					<img src="<?php echo $PATH_IMG?>users_icon.png" style="width:80%;"/>
					<h1 style="margin-top:40px;"><strong><?php echo count($all_users)?></strong> Users</h1>
					</div>
					
					<div class="col-md-6">
					<img src="<?php echo $PATH_IMG?>listing_icon.png" style="width:80%;"/>
					<h1 style="margin-top:40px;"><strong><?php echo count($all_events)?></strong> Lisings</h1>
					</div>
					
					
					<img src="<?php echo $PATH_IMG?>tickets_icon.png" style="width:38%;"/>
					<h1 style="margin-top:40px;"><strong><?php echo count($all_tickets)?></strong> Tickets Sold</h1>
					
				</div>	
				</div>
      
				<!--Users-->
				<div class="tab-pane" id="users" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>users_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong><?php echo count($all_users)?></strong> Users</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">New</button>
					<button type="button" class="btn admin_tabs">Current</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
							<th style="width:25%;">Username</td>							
							<th style="width:25%;">Email</td>							
							<th style="width:25%;">Full Name</td>							
							<th style="width:25%;">Date Created</td>
							</tr>
						</thead>
						<tbody>
						<?php if(isset($all_users)) {
							for($i = 0; $i < count($all_users); $i++) {?>
							<tr>
							<td><?php echo $all_users[$i]['username']?></td>
							<td><?php echo $all_users[$i]['email']?></td>
							<td><?php echo $all_users[$i]['fullname']?></td>
							<td><?php echo $all_users[$i]['birthday']?></td>
							</tr>
						<?php }}?>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
       					<button type="button" class="btn admin_button" style="background:#8D6893;">Delete</button>
					
				</div>
      
				<!--Listings-->
				<div class="tab-pane" id="listings" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>listing_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong><?php echo count($all_events)?></strong> Listings</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">New</button>
					<button type="button" class="btn admin_tabs">Current</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
							<th style="width:25%;">Title</td>							
							<th style="width:25%;">Category</td>							
							<th style="width:25%;">Username</td>							
							<th style="width:25%;">Date Created</td>
							</tr>
						</thead>
						<tbody>
						<?php if(isset($all_events)) {
							for($i = 0; $i < count($all_events); $i++) {?>
							<tr>
							<td><?php echo $all_events[$i]['e_name']?></td>
							<td><?php echo $all_events[$i]['e_category']?></td>
							<td><?php echo $all_events[$i]['e_creatorID']?></td>
							<td><?php echo $all_events[$i]['e_date']?></td>
							</tr>
						<?php }}?>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
       					<button type="button" class="btn admin_button" style="background:#8D6893;">Delete</button>
				</div>
      
				<!--Transactions-->
				<div class="tab-pane" id="transactions" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>tickets_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong>2.5K</strong> Tickets Sold</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">Recent</button>
					<button type="button" class="btn admin_tabs">Refunds</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#4B90C9;">Open</button>
       					<button type="button" class="btn admin_button" style="background:#684F6F;">Delete</button>
				</div>
				
				<!--Blog-->
				<div class="tab-pane" id="blog" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<i class="fa fa-rss fa-5x"></i>

					<h1 style="margin-top:20px;"><strong>89</strong> Blogs Created</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">New</button>
					<button type="button" class="btn admin_tabs">Current</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
							<th style="width:33.3%;">Title</td>							
							<th style="width:33.3%;">Username</td>							
							<th style="width:33.3%;">Date Created</td>							
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>sdasd</td>
							<td>rtrt</td>
							<td>rtrt</td>
							</tr>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#4B90C9;">Edit</button>
       					<button type="button" class="btn admin_button" style="background:#4D1966;">Delete</button>
       					
       					<div class="row" style="margin-top:25px;">
       					<a href="#create_blog" data-toggle="tab"><button type="button" class="btn admin_button" style="background:#9A33CC;">Create Blog</button></a>	
       					</div>
				</div>
	  			
	  			<!--Create Blog Post-->
	  			<div class="tab-pane" id="create_blog" style="background:rgba(255,255,255,0.5);padding:6% 15%;">
					<h2><i class="fa fa-star"></i> Title</h2>
					<textarea class="form-control" rows="1" style="border:dashed 2px gray;resize: none;font-size:20px;border-radius:0;background:none;"></textarea>
					
					<div class="row" style="text-align:right; margin-top:15px;padding:0 30px;text-align:left;">
						<textarea class="form-control" rows="1" style="resize: none; font-size:20px;border-radius:0;width:75%;float:left;" placeholder="Filename"></textarea> 
						<button class="btn" style="padding:5px 15px;font-size:25px; margin-left:5px;background:#27AAE2;color:white;"><span class="glyphicon glyphicon-camera"></span></button>
						
					</div>
					
					
					<h2><i class="fa fa-file-text-o"></i> Body</h2>
					<textarea class="form-control" rows="10" style="border:dashed 2px gray;resize: none;font-size:19px;border-radius:0;background:none;"></textarea>
					
					<h2><i class="fa fa-tag"></i> Tags</h2>
					<textarea class="form-control" rows="1" style="border:dashed 2px gray;resize: none;font-size:20px;border-radius:0;background:none;"></textarea>
					
					<div class="row" style="text-align:right; margin-top:10px;padding:15px;">
						<button class="btn" style="color:white;background:#698BA7;font-size:25px;border-radius:10px;padding:5px 20px;">Post</button>
					</div>
					
					<a href="#blog" data-toggle="tab"><button class="btn" style="color:white;background:#698BA7;font-size:25px;border-radius:10px;padding:5px 20px;">Previous Page</button></a>
					
				</div>
	  	
				<!--User Stats-->
				<div class="tab-pane" id="user_stats" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>users_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong>2.5K</strong> Users</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">New</button>
					<button type="button" class="btn admin_tabs">Current</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
							<th style="width:25%;">Joined Today</td>							
							<th style="width:25%;">7 days ago</td>							
							<th style="width:25%;">30 days ago</td>							
							<th style="width:25%;">via Facebook</td>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>sdasd</td>
							<td>rtrt</td>
							<td>rtrt</td>
							<td>rte</td>
							</tr>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
       					<button type="button" class="btn admin_button" style="background:#8D6893;">Delete</button>
					
				</div>
	  
				<!--Listing Stats-->
				<div class="tab-pane" id="listing_stats" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>listing_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong>2.5K</strong> Listings</h1>
					<button type="button" class="btn admin_tabs">All</button>
					<button type="button" class="btn admin_tabs">New</button>
					<button type="button" class="btn admin_tabs">Current</button>
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
							<th style="width:25%;">Created Today</td>							
							<th style="width:25%;">7 days ago</td>							
							<th style="width:25%;">30 days ago</td>							
							<th style="width:25%;">Users w/o listings</td>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>sdasd</td>
							<td>rtrt</td>
							<td>rtrt</td>
							<td>rte</td>
							</tr>
						</tbody>
       					</table>
       					</div>
       					
				</div>
				
				<!--Site Stats-->
				<div class="tab-pane" id="site_stats" style="background:rgba(255,255,255,0.5);padding:2% 8%; font-size:25px;">
					<h2 style="text-align:center;color:#5697CA;"><i class="fa fa-share-alt" style="color:black;"></i> Site Stats</h2>
					<div style="background:#81a4b5;color:white;">
						<p style="background:#628da3;padding:10px 20% 10px 15px;">Total site visits: <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">Today (today&rsquo;s date): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">This Week ( - ): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 10px 15px;">This Month ( - ): <span class="pull-right">#</span></p>
						
						<p style="background:#628da3;padding:10px 20% 10px 15px;">Average users online (per hour): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">Today (today&rsquo;s date): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">This Week ( - ): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 10px 15px;">This Month ( - ): <span class="pull-right">#</span></p>
						
						<p style="background:#628da3;padding:10px 20% 10px 15px;">Average time spent onsite: <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">Today (today&rsquo;s date): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 0 15px;">This Week ( - ): <span class="pull-right">#</span></p>
						<p style="padding:0 20% 10px 15px;">This Month ( - ): <span class="pull-right">#</span></p>
								
					</div>
					
					<div style="margin-top:20px;border:1px solid #B1CFE8;">
					Graph of users and listings here
					</div>
				</div>
				
				<!--multiple listings-->
				<div class="tab-pane" id="multiple_listings" style="background:rgba(255,255,255,0.5);color:#404041; padding:10%;text-align:center;">
				<div class="addmore">
				        <div class="panel" style="border-color: transparent; background:#a1bbc8;">
      
            <div class="panel-body">
                <form class="form-inline" role="form" style="">

  			
  
  			
                        <div class="col-md-3">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background:white;font-size:14px; width: 100%;">
                                Categories
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">hotspots</a></li>
                                <li><a href="#">icebreakers</a></li>
                                <li><a href="#">culture</a></li>
                                <li><a href="#">meet ups</a></li>
                                <li><a href="#">exploring your city</a></li>
                                <li><a href="#">love and romance</a></li>
                                <li><a href="#">parties</a></li>
                                <li><a href="#">clubs</a></li>
                                <li><a href="#">concerts</a></li>
                                <li><a href="#">festivals</a></li>
                                <li><a href="#">lounges</a></li>
                                <li><a href="#">bars</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Title">
  			    </div>
                        </div>
                        
  			<div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Date">
  			    </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Time Start">
  			    </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Location">
  			    </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="City">
  			    </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="State">
  			    </div>
                        </div>                        
                        
                        <div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Zip Code">
  			    </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Website">
  			    </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="left-inner-addon-ml">
                              	<input type="text" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Price">
  			    </div>
                        </div>
                        
                                                
                <div class="col-md-5">
                <textarea class="form-control" id="message" name="message" placeholder="Description" rows="1" style="margin-top: 5px;font-size:15px; width: 100%;"></textarea>
                </div>
                
                
                <div class="col-md-2" style="padding-top: 5px;">
                        <label for="file-input">
                        
                            <img src="<?php echo $PATH_IMG?>camera_icon.png" style="width:70%;">
                        	
                        </label>
                </div>
                </form>
                

                   
                   	          
            </div>
        </div>
        </div>
         <button id="addmore-button"type="button" class="btn btn-md" style="float:left;background: #6ca5cc; color:white; font-size:20px;">Add More</button>
         <button type="button" class="btn btn-md" style="float:right;background: #6ca5cc; color:white; font-size:20px;">Submit</button>
	
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
    <!--<script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
    <script>
    $("#addmore-button").click(function () {
 
	  $("<div class='panel' style='border-color: transparent; background:#a1bbc8;'><div class='panel-body'><form class='form-inline' role='form' style=''><div class='col-md-3'><button type='button' class='btn dropdown-toggle' data-toggle='dropdown' style='background:white;font-size:14px; width: 100%;'>Categories</button><ul class='dropdown-menu'><li><a href='#'>hotspots</a></li><li><a href='#'>icebreakers</a></li><li><a href='#'>culture</a></li><li><a href='#'>meet ups</a></li><li><a href='#'>exploring your city</a></li><li><a href='#'>love and romance</a></li><li><a href='#'>parties</a></li><li><a href='#'>clubs</a></li><li><a href='#'>concerts</a></li><li><a href='#'>festivals</a></li><li><a href='#'>lounges</a></li><li><a href='#'>bars</a></li></ul></div><div class='col-md-3'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 1px;font-size:15px; width: 100%;' placeholder='Title'></div></div><div class='col-md-3'><div class='left-inner-addon-ml'><input type='text' class='form-control' style='margin-top: 1px;font-size:15px; width: 100%;' placeholder='Date'></div></div><div class='col-md-3'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 1px;font-size:15px; width: 100%;' placeholder='Time Start'></div></div><div class='col-md-5'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='Location'></div></div><div class='col-md-2'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='City'></div></div><div class='col-md-2'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='State'></div></div><div class='col-md-3'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='Zip Code'></div></div><div class='col-md-3'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='Website'></div></div><div class='col-md-2'><div class='left-inner-addon-ml'><input type='text' class='form-control'  style='margin-top: 5px;font-size:15px; width: 100%;' placeholder='Price'></div></div><div class='col-md-5'><textarea class='form-control' id='message' name='message' placeholder='Description' rows='1' style='margin-top: 5px;font-size:15px; width: 100%;'></textarea></div><div class='col-md-2' style='padding-top: 5px;'><label for='file-input'><img src='<?php echo $PATH_IMG?>camera_icon.png' style='width:70%;'></label></div></form></div></div>").appendTo('.addmore');
 
    });
    </script>

</body>
</html> 