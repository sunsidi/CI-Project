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
				<div class="panel-heading" style="background:#628DA3;color:white;border-top-left-radius:15px;border-top-right-radius:15px;">
    					<h3 class="panel-title text-center" style="font-size:28px;">Admin System</h3>
  				</div>
  				<div class="panel-body" style="background:#D9E2EB;border-bottom-left-radius:15px;border-bottom-right-radius:15px;">
					<ul class="nav nav-tabs tabs-left" style="text-align:center;border:none;">
						<li class="active" style="float: none;"><a href="#home" data-toggle="tab">Summary</a></li>
						<li style="float: none;"><a href="#users" data-toggle="tab">Users</a></li>
						<li style="float: none;"><a href="#listings" data-toggle="tab">Listings</a></li>
						<li style="float: none;"><a href="#transactions" data-toggle="tab">Transactions</a></li>
						<li style="float: none;"><a href="#blog" data-toggle="tab">Blog</a></li>
						<!--<li style="float: none;"><a href="#user_stats" data-toggle="tab">User Stats</a></li>
						<li style="float: none;"><a href="#listing_stats" data-toggle="tab">Listing Stats</a></li>-->
						<li style="float: none;"><a href="#site_stats" data-toggle="tab">Site Stats</a></li>
						<li style="float: none;"><a href="#multiple_listings" data-toggle="tab">Multiple Listings</a></li>
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
					<h1 style="margin-top:40px;"><strong><?php echo count($all_events)?></strong> Listings</h1>
					</div>
					
					
					<img src="<?php echo $PATH_IMG?>tickets_icon.png" style="width:38%;"/>
					<h1 style="margin-top:40px;"><strong><?php echo count($all_tickets)?></strong> Tickets Sold</h1>
					
				</div>	
				</div>
      
				<!--Users-->
				<div class="tab-pane" id="users" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>users_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong><?php echo count($all_users)?></strong> Users</h1>
					<button type="button" class="btn admin_tabs" onclick="show_all_users()">All</button>
					<button type="button" class="btn admin_tabs" onclick="show_new_users()">New</button>
					<button type="button" class="btn admin_tabs" onclick="show_current_users()">Current</button>
                                        <form id="delete_users" action="<?php echo base_url()."admin/delete_users"?>" method="POST">
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
                                            <div class="left-inner-addon" style="text-align:left;">
                                                <span class="glyphicon glyphicon-search"></span>
                                                <label class="sr-only">Search</label>
                                                <input id="search_users" type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search" onkeyup="show_users(event)">						
                                            </div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
                                                            <td style="width:25%;">Box</td>
                                                            <td style="width:25%;">Username</td>							
                                                            <td style="width:25%;">Email</td>							
                                                            <td style="width:25%;">Full Name</td>							
                                                            <td style="width:25%;">Date Created</td>
                                                            <td style="width:25%;">Joined</td>
							</tr>
						</thead>
						<tbody>
						<?php if(isset($all_users)) {
							for($i = 0; $i < count($all_users); $i++) {?>
							<tr>
                                                            <td><input type="checkbox" name="users_checkbox[]" value="<?php echo $all_users[$i]['user_id'];?>"></td>
                                                            <td style="word-break:break-all;"><?php echo $all_users[$i]['username']?></td>
                                                            <td style="word-break:break-all;" class="users_group"><?php echo $all_users[$i]['email']?></td>
                                                            <td style="word-break:break-all;"><?php echo $all_users[$i]['fullname']?></td>
                                                            <td style="word-break:break-all;" class="users_group_date"><?php echo $all_users[$i]['join_stamp']?></td>
                                                            <td style="word-break:break-all;" class="users_group_joined"><?php echo $all_users[$i]['diff']?></td>
							</tr>
						<?php }}?>
						</tbody>
       					</table>
       					</div>
                                        <button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
                                        <button type="submit" class="btn admin_button" style="background:#8D6893;">Delete</button>
                                        </form>
				</div>
      
				<!--Listings-->
				<div class="tab-pane" id="listings" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>listing_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong><?php echo count($all_events)?></strong> Listings</h1>
					<button type="button" class="btn admin_tabs" onclick="show_all_events()">All</button>
					<button type="button" class="btn admin_tabs" onclick="show_new_events()">New</button>
					<button type="button" class="btn admin_tabs" onclick="show_current_events()">Current</button>
                                        <form id="delete_users" action="<?php echo base_url()."admin/delete_events"?>" method="POST">
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input id="search_events" type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search" onkeyup="show_events(event)">						
          					</div>
       					</div>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
       						<thead style="color:#5697CA;">
       							<tr>
                                                            <td style="width:25%;">Box</td>	
                                                            <td style="width:25%;">Title</td>							
                                                            <td style="width:25%;">Category</td>							
                                                            <td style="width:25%;">Creator ID</td>
                                                            <td style="width:25%;">Event Date</td>
                                                            <td style="width:25%;">Date and Time Created</td>
                                                            <td style="width:25%;">Difference</td>
							</tr>
						</thead>
						<tbody>
						<?php if(isset($all_events)) {
							for($i = 0; $i < count($all_events); $i++) {?>
							<tr>
                                                            <td><input type="checkbox" name="events_checkbox[]" value="<?php echo $all_events[$i]['event_id'];?>"></td>
                                                            <td class="events_group" style="word-break:break-all;"><?php echo $all_events[$i]['e_name']?></td>
                                                            <td><?php echo $all_events[$i]['e_category']?></td>
                                                            <td><?php echo $all_events[$i]['e_creatorID']?></td>
                                                            <td class="events_group_date"><?php echo $all_events[$i]['e_date']?></td>
                                                            <td class="events_group_created"><?php echo $all_events[$i]['create_stamp']?></td>
                                                            <td class="events_group_difference"><?php echo $all_events[$i]['diff']?></td>
							</tr>
						<?php }}?>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
                                        <button type="submit" class="btn admin_button" style="background:#8D6893;">Delete</button>
                                        </form>
                                        
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
							<thead style="color:#5697CA;">
       						<tr>
							<th>Buyer</th>							
							<th>Seller</th>							
							<th>Event ID</th>							
							<th>Event Name</th>
							<th>Delivery</th>
							<th>Ticket Type</th>
							<th>Price</th>
							<th>Our Fees</th>
							<th>Status</th>
							<th></th>
							</tr>
							
							<tbody>
							<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Action <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Issue Refund</a></li>
									<li><a href="#">Cancel Request</a></li>
									<li><a href="#">Cancel Order</a></li>
								</ul>
								</div>
							</td>
							</tr>
							</tbody>
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
							<th style="width:33.3%;">Title</th>							
							<th style="width:33.3%;">Username</th>							
							<th style="width:33.3%;">Date Created</th>							
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
	  	
				<!--User Stats DELETED* SAME AS USERS-->
				<!--<div class="tab-pane" id="user_stats" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
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
							<td style="width:25%;">Email</td>							
							<td style="width:25%;">Join Date</td>						
							<td style="width:25%;">via Facebook</td>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>sdasd</td>
							<td>rtrt</td>
							<td>rte</td>
							</tr>
						</tbody>
       					</table>
       					</div>
       					<button type="button" class="btn admin_button" style="background:#C25B5C;">Block</button>
       					<button type="button" class="btn admin_button" style="background:#8D6893;">Delete</button>
					
				</div>-->
	  
				<!--Listing Stats DELETED* SAME AS LISTINGS-->
				<!--<div class="tab-pane" id="listing_stats" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
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
							<th style="width:25%;">Created Today</th>							
							<th style="width:25%;">7 days ago</th>							
							<th style="width:25%;">30 days ago</th>							
							<th style="width:25%;">Users w/o listings</th>
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
       					
				</div>-->
				
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
                              	<input type="text" name="e_name" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Title">
  			    </div>
                        </div>
                        
  			<div class="col-md-3">
                            <div class="left-inner-addon-ml">
                              	<input type="text" name=""class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Date">
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
    <script>
        function show_users(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_users').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.users_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_users').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_users').val()) > -1 && $('#search_users').val().length >= 0) {
                                    $(this).parent().show();
                                }
                                else
                                    $(this).parent().hide();
                            }
                        })
                    },1000);
                }(search_value));
            }
        }
    </script>
    <script>
        function show_events(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_events').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.events_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_events').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_events').val()) > -1 && $('#search_events').val().length >= 0) {
                                    $(this).parent().show();
                                }
                                else
                                    $(this).parent().hide();
                            }
                        })
                    },1000);
                }(search_value));
            }
        }
    </script>
    <script>
        function show_all_users() {
            $('.users_group').parent().show();
            $('#search_users').val('');
        }
        function show_new_users() {
            $('.users_group_date').each(function() {
                if(parseInt($(this).next().html()) < 7) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            });
        }
        function show_current_users() {     
            $('.users_group_date').each(function() {
                if(parseInt($(this).next().html()) < 1) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            }); 
        }
    </script>
    <script>
        function show_all_events() {
            $('.events_group').parent().show();
            $('#search_events').val('');
        }
        function show_new_events() {
            $('.events_group_created').each(function() {
                if(parseInt($(this).next().html()) < 7) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            });
        }
        function show_current_events() {     
            $('.events_group_created').each(function() {
                if(parseInt($(this).next().html()) < 1) {
                    $(this).parent().show();
                }
                else {
                    $(this).parent().hide();
                }
            }); 
        }
    </script>
</body>
</html> 