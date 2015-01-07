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
<script>
jQuery(document).ready(function () {
    //hide a div after 3 seconds
    setTimeout(function(){ jQuery("#sentMessage").hide(); }, 5000);
});
</script>
<style>
	ul.tabs-left>li{
	background:#55C3C0;
	font-size:20px;
	margin-top:10px;
	border-radius:10px;
	border-color:#C8CBD2;
	float:none;
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
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
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
						<li class="active"><a href="#home" data-toggle="tab">Summary</a></li>
						<li><a href="#users" data-toggle="tab">Users</a></li>
						<li><a href="#listings" data-toggle="tab">Listings</a></li>
						<li><a href="#transactions" data-toggle="tab">Transactions</a></li>
						<li><a href="#blog" data-toggle="tab">Blog</a></li>
						<!--<li style="float: none;"><a href="#user_stats" data-toggle="tab">User Stats</a></li>
						<li style="float: none;"><a href="#listing_stats" data-toggle="tab">Listing Stats</a></li>-->
						<li><a href="#site_stats" data-toggle="tab">Site Stats</a></li>
                                                <li><a href="#featured" data-toggle="tab">Featured Events</a></li>
						<li><a href="#multiple_listings" data-toggle="tab">Multiple Listings</a></li>
						<li><a href="#newsfeed_automation " data-toggle="tab">Newsfeed Automation</a></li>
						<li><a href="#notification_center" data-toggle="tab">Notification Center</a></li>

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
					<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="<?php echo $PATH_IMG?>users_icon.png" style="width:80%;"/>
					<h1 style="margin-top:40px;"><strong><?php echo count($all_users)?></strong> Users</h1>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-6">
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
                                                    <?php if(isset($all_blogs)) {
                                                        for($i = 0; $i < count($all_blogs); $i++) {?>
                                                        <tr>
                                                            <td><?php echo $all_blogs[$i]['blog_title'];?></td>
                                                            <td><?php echo $all_blogs[$i]['blog_filename'];?></td>
                                                            <td><?php echo $all_blogs[$i]['blog_created'];?></td>
                                                        </tr>
                                                    <?php }}?>
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
                                    <?php echo form_open_multipart('admin/create_blog');?>
                                        <h2><i class="fa fa-star"></i> Title</h2>
                                        <textarea name="blog_title" class="form-control" rows="1" style="border:dashed 2px gray;resize: none;font-size:20px;border-radius:0;background:none;"></textarea>
                                        <div class="row" style="text-align:right; margin-top:15px;padding:0 30px;text-align:left;">
                                            <label for="file-input-blog-file">
                                                <img src="<?php echo $PATH_IMG?>camera_icon.png" style="width:70%;">
                                            </label>
                                            <input id="file-input-blog-file" id="" name="blog_filename" type="file" style="display:none">
                                        </div>
                                        <h2><i class="fa fa-file-text-o"></i> Body</h2>
                                        <textarea name="blog_body" class="form-control" rows="10" style="border:dashed 2px gray;resize: none;font-size:19px;border-radius:0;background:none;"></textarea>
                                        <h2><i class="fa fa-tag"></i> Tags</h2>
                                        <textarea name="blog_tags" class="form-control" rows="1" style="border:dashed 2px gray;resize: none;font-size:20px;border-radius:0;background:none;"></textarea>

                                        <div class="row" style="text-align:right; margin-top:10px;padding:15px;">
                                            <button class="btn" style="color:white;background:#698BA7;font-size:25px;border-radius:10px;padding:5px 20px;">Post</button>
                                        </div>
                                        <a href="#blog" data-toggle="tab"><button class="btn" style="color:white;background:#698BA7;font-size:25px;border-radius:10px;padding:5px 20px;">Previous Page</button></a>
                                    <?php echo form_close();?>
				</div>
				
				<!--newsfeed_automation-->
				<div class="tab-pane" id="newsfeed_automation" style="background:rgba(255,255,255,0.5);padding:6% 15%;">					
                                    <?php echo form_open_multipart('admin/create_news');?>
					<h2><i class="fa fa-file-text-o"></i> Body</h2>
					<textarea name="news_body" class="form-control" rows="10" style="border:dashed 2px gray;resize: none;font-size:19px;border-radius:0;background:none;"></textarea>
                                        <label class="col-sm-3 control-label">Picture For News:</label>
                                        <div class="row" style="margin-left: 10px;text-align:right; margin-top:25px;padding:0 30px;text-align:left;">
                                            <label for="file-input-news-feed">
                                                <img src="<?php echo $PATH_IMG?>camera_icon.png" style="width:70%;">
                                            </label>
                                            <input id="file-input-news-feed" id="" name="news_filename" type="file" style="display:none">
					</div>
					<div class="row" style="text-align:right; margin-top:10px;padding:15px;">
                                            <button class="btn" style="color:white;background:#698BA7;font-size:25px;border-radius:10px;padding:5px 20px;">Post</button>
					</div>
                                    <?php echo form_close();?>
				</div>
	  	
				<!--notification_center-->
				<div class="tab-pane" id="notification_center" style="background:rgba(255,255,255,0.5);padding:6% 15%;">
					<center><h1><i class="fa fa-bell"></i> Notifications</h1></center>
					<center><h2 style="margin-top:20px;"><strong>####</strong> Notifications</h2></center>
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
					<table style="margin-top: 5px; width: 90%;">
                                            <tr>
                                                <th style="margin-left: 3%;text-align: center; color:#5697CA;"><b>First User</b></th>
                                                <th></th>
                                                <th style="margin-left: 6%;text-align: center; color:#5697CA;"><b>Second User</b></th>
						<th style="margin-left:10%;text-align: center;color: #5697CA;"><b>Date</b></th>
						<th style="margin-left: 31%;text-align: center;color: #5697CA;"><b>Notification</b></th>
                                            </tr>
                                        </table>
       					<div style="height:500px;overflow-y:auto;">
       					<table style="width:100%;text-align:left;">
						<tbody>
						<?php if(isset($all_notifications)) {
							for($i = 0; $i < count($all_notifications); $i++) {?>
                                                            <tr>
                                                                <td style="word-break:break-all;text-align: center;width: 15%;"><?php echo $all_notifications[$i]['user_id'];?></td>
                                                                <td style="word-break:break-all;text-align: center;width: 15%;"><?php echo $all_notifications[$i]['to_from'];?></td>
                                                                <td style="word-break:break-all;text-align: center;width: 15%;"><?php echo $all_notifications[$i]['other_user_id'];?></td>
                                                                <td style="word-break:break-all;text-align: center;width: 15%;"><?php echo $all_notifications[$i]['time_sent'];?></td>
                                                                <td style="word-break:break-all;text-align: center;width: 50%;"><?php echo $all_notifications[$i]['message'];?></td>
                                                            </tr>
                                                <?php }}?>
						</tbody>
       					</table>
					</div>
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
                                
                                <!--Listings-->
				<div class="tab-pane" id="featured" style="background:rgba(255,255,255,0.5);padding:10%;text-align:center;font-size:18px;">
					<img src="<?php echo $PATH_IMG?>listing_icon.png" style="width:40%;"/>
					<h1 style="margin-top:20px;"><strong><?php echo count($all_events)?></strong> Listings</h1>
					<button type="button" class="btn admin_tabs" onclick="show_all_events()">All</button>
					<button type="button" class="btn admin_tabs" onclick="show_new_events()">New</button>
					<button type="button" class="btn admin_tabs" onclick="show_current_events()">Current</button>
                                        <form id="delete_users" action="<?php echo base_url()."admin/feature_events"?>" method="POST">
					<div class="form-group" style="margin-top:10px;width:60%;margin-left:auto;margin-right:auto;">
              					<div class="left-inner-addon" style="text-align:left;">
                					<span class="glyphicon glyphicon-search"></span>
          						<label class="sr-only">Search</label>
          						<input id="search_featured" type="Search" class="form-control" style="border-radius:10px;font-size:20px;" placeholder="Search" onkeyup="show_featured(event)">						
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
                                                            <?php if($all_events[$i]['e_featured']) {?>
                                                                <td><input type="checkbox" name="featured_checkbox[]" value="<?php echo $all_events[$i]['event_id'];?>" checked></td>
                                                            <?php } else {?>
                                                                <td><input type="checkbox" name="featured_checkbox[]" value="<?php echo $all_events[$i]['event_id'];?>"></td>
                                                            <?php }?>
                                                            <td class="featured_group" style="word-break:break-all;"><?php echo $all_events[$i]['e_name']?></td>
                                                            <td><?php echo $all_events[$i]['e_category']?></td>
                                                            <td><?php echo $all_events[$i]['e_creatorID']?></td>
                                                            <td class="featured_group_date"><?php echo $all_events[$i]['e_date']?></td>
                                                            <td class="featured_group_created"><?php echo $all_events[$i]['create_stamp']?></td>
                                                            <td class="featured_group_difference"><?php echo $all_events[$i]['diff']?></td>
							</tr>
						<?php }}?>
						</tbody>
       					</table>
       					</div>
                                        <button type="submit" class="btn admin_button" style="background:#8D6893;">Save Featured</button>
                                        </form>
                                        
				</div>
				
				<!--multiple listings-->
				<div class="tab-pane" id="multiple_listings" style="background:rgba(255,255,255,0.5);color:#404041; padding:10%;text-align:center;">
				<?php echo form_open_multipart('admin/create_multiple_events');?>
                                    <div id="button_base" class="addmore">
				        <div class="panel" style="border-color: transparent; background:#a1bbc8;">
                                            <div class="panel-body">
                                                <div class="col-md-3">
                                                    <button id="category_button" type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background:white;font-size:14px; width: 100%;">
                                                        Categories
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a onclick="change_category(this, 1024)">hotspots</a></li>
                                                        <li><a onclick="change_category(this, 1)">icebreakers</a></li>
                                                        <li><a onclick="change_category(this, 2048)">culture</a></li>
                                                        <li><a onclick="change_category(this, 2)">meet ups</a></li>
                                                        <li><a onclick="change_category(this, 64)">exploring your city</a></li>
                                                        <li><a onclick="change_category(this, 128)">love and romance</a></li>
                                                        <li><a onclick="change_category(this, 4)">parties</a></li>
                                                        <li><a onclick="change_category(this, 8)">clubs</a></li>
                                                        <li><a onclick="change_category(this, 16)">concerts</a></li>
                                                        <li><a onclick="change_category(this, 32)">festivals</a></li>
                                                        <li><a onclick="change_category(this, 256)">lounges</a></li>
                                                        <li><a onclick="change_category(this, 512)">bars</a></li>
                                                    </ul>
                                                </div>
                                                <input id="category_change" type="number" value="0" name="multi_categories[]" hidden>

                                                <div class="col-md-3">
                                                    <div class="left-inner-addon-ml">
                                                        <input type="text" name="multi_e_name[]" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="left-inner-addon-ml">
                                                        <input id="multi_e_date[]" type="text" name="multi_e_date[]" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="mm/dd/yyyy">
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 control-label" style="padding-top:10px;">period:</label>
                                                <div class="col-sm-2">
                                                  <select id="period" name="multi_period[]" type="number" class="form-control" style="padding:0;font-size:10px;">
                                                    <option value="" selected="selected"></option> 
                                                    <option value="1">Every day</option>
                                                    <option value="7">7 days </option>
                                                    <option value="30">1 month</option>
                                                    <option value="365">1 year</option>
                                                    <option value="-1">Every week day</option>
                                                    <option value="-7">Every weekend</option>
                                                  </select> 
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="left-inner-addon-ml">
                                                        <select id="multi_start_time" name="multi_start_time[]" type="time" class="form-control" style="margin-top: 1px;font-size:15px; width: 100%;">
                                                            <option value="" selected="selected">Start Time</option> 
                                                            <option value="00:00">12:00am</option>
                                                            <option value="00:30">12:30am</option>
                                                            <option value="01:00">1:00am</option>
                                                            <option value="01:30">1:30am</option>
                                                            <option value="02:00">2:00am</option>
                                                            <option value="02:30">2:30am</option>
                                                            <option value="03:00">3:00am</option>
                                                            <option value="03:30">3:30am</option>
                                                            <option value="04:00">4:00am</option>
                                                            <option value="04:30">4:30am</option>
                                                            <option value="05:00">5:00am</option>
                                                            <option value="05:30">5:30am</option>
                                                            <option value="06:00">6:00am</option>
                                                            <option value="06:30">6:30am</option>
                                                            <option value="07:00">7:00am</option>
                                                            <option value="07:30">7:30am</option>
                                                            <option value="08:00">8:00am</option>
                                                            <option value="08:30">8:30am</option>
                                                            <option value="09:00">9:00am</option>
                                                            <option value="09:30">9:30am</option>
                                                            <option value="10:00">10:00am</option>
                                                            <option value="10:30">10:30am</option>
                                                            <option value="11:00">11:00am</option>
                                                            <option value="11:30">11:30am</option>
                                                            <option value="12:00">12:00pm</option>
                                                            <option value="12:30">12:30pm</option>
                                                            <option value="13:00">1:00pm</option>
                                                            <option value="13:30">1:30pm</option>
                                                            <option value="14:00">2:00pm</option>
                                                            <option value="14:30">2:30pm</option>
                                                            <option value="15:00">3:00pm</option>
                                                            <option value="15:30">3:30pm</option>
                                                            <option value="16:00">4:00pm</option>
                                                            <option value="16:30">4:30pm</option>
                                                            <option value="17:00">5:00pm</option>
                                                            <option value="17:30">5:30pm</option>
                                                            <option value="18:00">6:00pm</option>
                                                            <option value="18:30">6:30pm</option>
                                                            <option value="19:00">7:00pm</option>
                                                            <option value="19:30">7:30pm</option>
                                                            <option value="20:00">8:00pm</option>
                                                            <option value="20:30">8:30pm</option>
                                                            <option value="21:00">9:00pm</option>
                                                            <option value="21:30">9:30pm</option>
                                                            <option value="22:00">10:00pm</option>
                                                            <option value="22:30">10:30pm</option>
                                                            <option value="23:00">11:00pm</option>
                                                            <option value="23:30">11:30pm</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="left-inner-addon-ml">
                                                        <input type="text" name="multi_address[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Location">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="left-inner-addon-ml">
                                                        <input type="text" name="multi_city[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="City">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="left-inner-addon-ml">
                                                        <select id="multi_state" name="multi_state[]" type="text" class="form-control" style="margin-top: 5px;font-size:15px; width: 100%;">
                                                            <option value="" selected="selected">State</option> 
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
                                                </div>                        

                                                <div class="col-md-3">
                                                    <div class="left-inner-addon-ml">
                                                        <input type="text" name="multi_zipcode[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Zip Code">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="left-inner-addon-ml">
                                                        <input type="text" name="multi_website[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Website">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" id="message" name="multi_description[]" placeholder="Description" rows="1" style="margin-top: 5px;font-size:15px; width: 100%;"></textarea>
                                                </div>
                                                <!--<div class="form-group row"> COMMENTED OUT FOR LATER.
                                                    <div style="text-align:center;">
                                                        ticketed <input type="radio" name="multi_e_is_ticketed0" value = "1"> 
                                                        nonticketed <input type="radio" name="multi_e_is_ticketed0" value = "0" checked> 
                                                    </div>
                                                </div>
                                                
                                                <!-- INSERT TICKETS INTO HERE 
                                                <div>
                                                    <div class="panel" style="background:none;padding:0;box-shadow:none;">
                                                        <div class="multi_add_ticket_type" style="padding:0;">

                                                        </div>
                                                    </div>
                                                </div><!--end of add ticket type 
                                                        
                                                <div id="multi_add_more_base" class="testing_class" style="text-align:right;" hidden>lalala
                                                    <a id="multi_add_more" type="button" class="btn" style="background:#478EBF;color:white;padding:3px;font-size:12px;margin-right:20px;margin-top:15px;" onclick="multi_add_more_tickets(this)"> Add More</a>
                                                </div> -->
                                                <div class="col-md-2" style="padding-top: 5px;">
                                                    <label for="file-input-multi0">
                                                        <img src="<?php echo $PATH_IMG?>camera_icon.png" style="width:70%;">
                                                    </label>
                                                    <input id="file-input-multi0" id="" name="multi_file_input[]" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <button id="addmore-button"type="button" class="btn btn-md" style="float:left;background: #6ca5cc; color:white; font-size:20px;">Add More</button>
                                <button type="submit" class="btn btn-md" style="float:right;background: #6ca5cc; color:white; font-size:20px;">Submit</button>
                                <?php echo form_close();?>
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
        var file_input_counter = 1;
    $("#addmore-button").click(function () {
        var content =   '<div class="panel" style="border-color: transparent; background:#a1bbc8;">'
                            +'<div class="panel-body">'
                                +'<div class="col-md-3">'
                                    +'<button id="category_button" type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background:white;font-size:14px; width: 100%;">Categories'
                                    +'</button>'
                                    +'<ul class="dropdown-menu">'
                                        +'<li><a onclick="change_category(this, 1024)">hotspots</a></li>'
                                        +'<li><a onclick="change_category(this, 1)">icebreakers</a></li>'
                                        +'<li><a onclick="change_category(this, 2048)">culture</a></li>'
                                        +'<li><a onclick="change_category(this, 2)">meet ups</a></li>'
                                        +'<li><a onclick="change_category(this, 64)">exploring your city</a></li>'
                                        +'<li><a onclick="change_category(this, 128)">love and romance</a></li>'
                                        +'<li><a onclick="change_category(this, 4)">parties</a></li>'
                                        +'<li><a onclick="change_category(this, 8)">clubs</a></li>'
                                        +'<li><a onclick="change_category(this, 16)">concerts</a></li>'
                                        +'<li><a onclick="change_category(this, 32)">festivals</a></li>'
                                        +'<li><a onclick="change_category(this, 256)">lounges</a></li>'
                                        +'<li><a onclick="change_category(this, 512)">bars</a></li>'
                                    +'</ul>'
                                +'</div>'
                                +'<input id="category_change" type="number" value="0" name="multi_categories[]" hidden>'

                                +'<div class="col-md-3">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input type="text" name="multi_e_name[]" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="Title">'
                                    +'</div>'
                                +'</div>'

                                +'<div class="col-md-3">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input id="multi_e_date[]" type="text" name="multi_e_date[]" class="form-control"  style="margin-top: 1px;font-size:15px; width: 100%;" placeholder="mm/dd/yyyy">'
                                    +'</div>'
                                +'</div>'
                                +'<div class="col-sm-2">'
                                    +'<select id="period" name="multi_period[]" type="number" class="form-control" style="padding:0;font-size:10px;">'
                                      +'<option value="" selected="selected"></option>'
                                      +'<option value="1">Every day</option>'
                                      +'<option value="7">7 days </option>'
                                      +'<option value="30">1 month</option>'
                                      +'<option value="365">1 year</option>'
                                      +'<option value="-1">Every week day</option>'
                                      +'<option value="-7">Every weekend</option>'
                                    +'</select>'
                                +'</div>'
                                +'<div class="col-md-3">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<select id="multi_start_time" name="multi_start_time[]" type="time" class="form-control" style="margin-top: 1px;font-size:15px; width: 100%;">'
                                            +'<option value="" selected="selected">Start Time</option>'
                                            +'<option value="00:00">12:00am</option>'
                                            +'<option value="00:30">12:30am</option>'
                                            +'<option value="01:00">1:00am</option>'
                                            +'<option value="01:30">1:30am</option>'
                                            +'<option value="02:00">2:00am</option>'
                                            +'<option value="02:30">2:30am</option>'
                                            +'<option value="03:00">3:00am</option>'
                                            +'<option value="03:30">3:30am</option>'
                                            +'<option value="04:00">4:00am</option>'
                                            +'<option value="04:30">4:30am</option>'
                                            +'<option value="05:00">5:00am</option>'
                                            +'<option value="05:30">5:30am</option>'
                                            +'<option value="06:00">6:00am</option>'
                                            +'<option value="06:30">6:30am</option>'
                                            +'<option value="07:00">7:00am</option>'
                                            +'<option value="07:30">7:30am</option>'
                                            +'<option value="08:00">8:00am</option>'
                                            +'<option value="08:30">8:30am</option>'
                                            +'<option value="09:00">9:00am</option>'
                                            +'<option value="09:30">9:30am</option>'
                                            +'<option value="10:00">10:00am</option>'
                                            +'<option value="10:30">10:30am</option>'
                                            +'<option value="11:00">11:00am</option>'
                                            +'<option value="11:30">11:30am</option>'
                                            +'<option value="12:00">12:00pm</option>'
                                            +'<option value="12:30">12:30pm</option>'
                                            +'<option value="13:00">1:00pm</option>'
                                            +'<option value="13:30">1:30pm</option>'
                                            +'<option value="14:00">2:00pm</option>'
                                            +'<option value="14:30">2:30pm</option>'
                                            +'<option value="15:00">3:00pm</option>'
                                            +'<option value="15:30">3:30pm</option>'
                                            +'<option value="16:00">4:00pm</option>'
                                            +'<option value="16:30">4:30pm</option>'
                                            +'<option value="17:00">5:00pm</option>'
                                            +'<option value="17:30">5:30pm</option>'
                                            +'<option value="18:00">6:00pm</option>'
                                            +'<option value="18:30">6:30pm</option>'
                                            +'<option value="19:00">7:00pm</option>'
                                            +'<option value="19:30">7:30pm</option>'
                                            +'<option value="20:00">8:00pm</option>'
                                            +'<option value="20:30">8:30pm</option>'
                                            +'<option value="21:00">9:00pm</option>'
                                            +'<option value="21:30">9:30pm</option>'
                                            +'<option value="22:00">10:00pm</option>'
                                            +'<option value="22:30">10:30pm</option>'
                                            +'<option value="23:00">11:00pm</option>'
                                            +'<option value="23:30">11:30pm</option>'
                                        +'</select>'
                                    +'</div>'
                                +'</div>'

                                +'<div class="col-md-5">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input type="text" name="multi_address[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Location">'
                                    +'</div>'
                                +'</div>'

                                +'<div class="col-md-2">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input type="text" name="multi_city[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="City">'
                                    +'</div>'
                                +'</div>'

                                +'<div class="col-md-2">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<select id="multi_state" name="multi_state[]" type="text" class="form-control" style="margin-top: 5px;font-size:15px; width: 100%;">'
                                            +'<option value="" selected="selected">State</option>' 
                                            +'<option value="AK">AK</option>'
                                            +'<option value="AL">AL</option>'
                                            +'<option value="AR">AR</option>'
                                            +'<option value="AZ">AZ</option>'
                                            +'<option value="CA">CA</option>'
                                            +'<option value="CO">CO</option>'
                                            +'<option value="CT">CT</option>'
                                            +'<option value="DC">DC</option>'
                                            +'<option value="DE">DE</option>'
                                            +'<option value="FL">FL</option>'
                                            +'<option value="GA">GA</option>'
                                            +'<option value="HI">HI</option>'
                                            +'<option value="IA">IA</option>'
                                            +'<option value="ID">ID</option>'
                                            +'<option value="IL">IL</option>'
                                            +'<option value="IN">IN</option>'
                                            +'<option value="KS">KS</option>'
                                            +'<option value="KY">KY</option>'
                                            +'<option value="LA">LA</option>'
                                            +'<option value="MA">MA</option>'
                                            +'<option value="MD">MD</option>'
                                            +'<option value="ME">ME</option>'
                                            +'<option value="MI">MI</option>'
                                            +'<option value="MN">MN</option>'
                                            +'<option value="MO">MO</option>'
                                            +'<option value="MS">MS</option>'
                                            +'<option value="MT">MT</option>'
                                            +'<option value="NC">NC</option>'
                                            +'<option value="ND">ND</option>'
                                            +'<option value="NE">NE</option>'
                                            +'<option value="NH">NH</option>'
                                            +'<option value="NJ">NJ</option>'
                                            +'<option value="NM">NM</option>'
                                            +'<option value="NV">NV</option>'
                                            +'<option value="NY">NY</option>'
                                            +'<option value="OH">OH</option>'
                                            +'<option value="OK">OK</option>'
                                            +'<option value="OR">OR</option>'
                                            +'<option value="PA">PA</option>'
                                            +'<option value="RI">RI</option>'
                                            +'<option value="SC">SC</option>'
                                            +'<option value="SD">SD</option>'
                                            +'<option value="TN">TN</option>'
                                            +'<option value="TX">TX</option>'
                                            +'<option value="UT">UT</option>'
                                            +'<option value="VA">VA</option>'
                                            +'<option value="VT">VT</option>'
                                            +'<option value="WA">WA</option>'
                                            +'<option value="WI">WI</option>'
                                            +'<option value="WV">WV</option>'
                                            +'<option value="WY">WY</option>'
                                        +'</select>'
                                    +'</div>'
                                +'</div>'                     

                                +'<div class="col-md-3">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input type="text" name="multi_zipcode[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Zip Code">'
                                    +'</div>'
                                +'</div>'

                                +'<div class="col-md-3">'
                                    +'<div class="left-inner-addon-ml">'
                                        +'<input type="text" name="multi_website[]" class="form-control"  style="margin-top: 5px;font-size:15px; width: 100%;" placeholder="Website">'
                                    +'</div>'
                                +'</div>'
                        
                                +'<div class="col-md-5">'
                                    +'<textarea class="form-control" id="message" name="multi_description[]" placeholder="Description" rows="1" style="margin-top: 5px;font-size:15px; width: 100%;"></textarea>'
                                +'</div>'
                                +'<!--<div class="form-group row"> COMMENTED OUT FOR LATER'
                                    +'<div style="text-align:center;">'
                                        +'ticketed <input type="radio" name="multi_e_is_ticketed'+file_input_counter+'" value = "1"> '
                                        +'nonticketed <input type="radio" name="multi_e_is_ticketed'+file_input_counter+'" value = "0" checked> '
                                    +'</div>'
                                +'</div>'

                                +'<!-- INSERT TICKETS INTO HERE'
                                +'<div>'
                                    +'<div class="panel" style="background:none;padding:0;box-shadow:none;">'
                                       +'<div class="multi_add_ticket_type" style="padding:0;">'

                                       +'</div>'
                                    +'</div>'
                                +'</div><!--end of add ticket type'

                                +'<div id="multi_add_more_base" style="text-align:right;" hidden>'
                                    +'<a id="multi_add_more" type="button" class="btn" style="background:#478EBF;color:white;padding:3px;font-size:12px;margin-right:20px;margin-top:15px;"> Add More</a>'
                                +'</div>-->'
                                +'<div class="col-md-2" style="padding-top: 5px;">'
                                    +'<label for="file-input-multi'+file_input_counter+'">'
                                        +'<img src="<?php echo $PATH_IMG?>camera_icon.png" style="width:70%;">'
                                    +'</label>'
                                        +'<input id="file-input-multi'+file_input_counter+'" name="multi_file_input[]" type="file">'
                                +'</div>'
                            +'</div>'
                        +'</div>';
	$('#button_base').append(content);
        $('input[type=radio][name=multi_e_is_ticketed'+file_input_counter+']').change(function() {
            if (this.value == '1') {
                $("#multi_add_more_base'+file_input_counter+'").show();
                $("#multi_add_more'+file_input_counter+'").trigger("click");
            }
            else if (this.value == '0') {
                $("#multi_add_more_base'+file_input_counter+'").hide();
                $(".multi_ticket_group").remove();
            }
        });
        file_input_counter++;
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
        function show_featured(e) {
            //var regex = new RegExp("^[a-zA-Z0-9_]*$");
            if (e.keyCode) key = e.keyCode;
            //else if(e.which) key = e.which;
            if(/[a-zA-Z0-9 ]/.test(String.fromCharCode(key)) || key == 8) {
                var search_value = $('#search_featured').val();
                //First set the search_value checker .
                (function(search_value) {
                    //Amount of time to wait before actually doing the search.
                    setTimeout(function () {
                        $('.featured_group').each(function() { 
                            //If value isn't finished typing then skip this function and go to the next.
                            if(search_value != $('#search_featured').val()) {
                                return false;
                            }
                            //Check if an alphanumeric is typed in.
                            else {
                                if(($(this).html()).indexOf($('#search_featured').val()) > -1 && $('#search_featured').val().length >= 0) {
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
    <script>
        function change_category(i, value) {
            $(i).parent().parent().parent().siblings('#category_change').attr("value", value);
            $(i).parent().parent().parent().children('#category_button').html($(i).html());
            console.log($(i).parent().parent().parent().siblings('#category_change').val());
        }
    </script>
    <!--<script>
    	var type_counters = 0;
    	function multi_add_more_tickets(i) {
            var content = "<div class='multi_ticket_group form-group-row' id='multi_ticket_base" +type_counters+ "'>"
                             +"<div class='row'>"
                             +"<div class='col-sm-3'>"
                             +"<div>"
                             +"Type"

                                 +"<select name='multi_type[][]' type='text' class='select_type form-control' style='padding:0;' required>"
                                     +"<option value='' selected='selected'></option>"
                                     +"<option value='free'>Free</option>"
                                     +"<option value='regular'>Regular</option>"
                                     +"<option value='early bird'>Early Bird</option>"
                                     +"<option value='v.i.p'>V.I.P.</option>"
                                  +"</select></div><div>"
                                  +"Price"
                                  +"<input id='multi_e_price' type='number' step='0.01' min='0.00' name='multi_e_price[][]' value='0.00' class='e_price form-control'>"
                                  +"<input type='hidden' value='nothing here'>"
                              +"</div></div>"
                             +"<div class='col-sm-4' alt='You can drag this text box around to make it larger' title='You can drag this text box around to make it larger'> Info"
                                 +"<textarea name='multi_info[][]' class='form-control' rows='3'></textarea>"
                             +"</div>"
                             +"<div class='col-sm-2'>Qty."
                                 +"<input type='number' max='500' min='1' name='e_quantity[]' class='form-control'>"
                                 +"Deadline"
                                 +"<input type='text' name='multi_max_date[][]' class='d_date form-control' placeholder='mm/dd/yyyy'>"
                             +"</div>"


                             +"<div class='col-sm-2'>Time"
                                 +"<select name='multi_max_time[][]' type='time' class='form-control' style='padding:0;'>"
                                     +"<option value='' selected='selected'></option>"
                                     +"<option value='00:00'>12:00am</option>"
                                     +"<option value='00:30'>12:30am</option>"
                                     +"<option value='01:00'>1:00am</option>"
                                     +"<option value='01:30'>1:30am</option>"
                                     +"<option value='02:00'>2:00am</option>"
                                     +"<option value='02:30'>2:30am</option>"
                                     +"<option value='03:00'>3:00am</option>"
                                     +"<option value='03:30'>3:30am</option>"
                                     +"<option value='04:00'>4:00am</option>"
                                     +"<option value='04:30'>4:30am</option>"
                                     +"<option value='05:00'>5:00am</option>"
                                     +"<option value='05:30'>5:30am</option>"
                                     +"<option value='06:00'>6:00am</option>"
                                     +"<option value='06:30'>6:30am</option>"
                                     +"<option value='07:00'>7:00am</option>"
                                     +"<option value='07:30'>7:30am</option>"
                                     +"<option value='08:00'>8:00am</option>"
                                     +"<option value='08:30'>8:30am</option>"
                                     +"<option value='09:00'>9:00am</option>"
                                     +"<option value='09:30'>9:30am</option>"
                                     +"<option value='10:00'>10:00am</option>"
                                     +"<option value='10:30'>10:30am</option>"
                                     +"<option value='11:00'>11:00am</option>"
                                     +"<option value='11:30'>11:30am</option>"
                                     +"<option value='12:00'>12:00pm</option>"
                                     +"<option value='12:30'>12:30pm</option>"
                                     +"<option value='13:00'>1:00pm</option>"
                                     +"<option value='13:30'>1:30pm</option>"
                                     +"<option value='14:00'>2:00pm</option>"
                                     +"<option value='14:30'>2:30pm</option>"
                                     +"<option value='15:00'>3:00pm</option>"
                                     +"<option value='15:30'>3:30pm</option>"
                                     +"<option value='16:00'>4:00pm</option>"
                                     +"<option value='16:30'>4:30pm</option>"
                                     +"<option value='17:00'>5:00pm</option>"
                                     +"<option value='17:30'>5:30pm</option>"
                                     +"<option value='18:00'>6:00pm</option>"
                                     +"<option value='18:30'>6:30pm</option>"
                                     +"<option value='19:00'>7:00pm</option>"
                                     +"<option value='19:30'>7:30pm</option>"
                                     +"<option value='20:00'>8:00pm</option>"
                                     +"<option value='20:30'>8:30pm</option>"
                                     +"<option value='21:00'>9:00pm</option>"
                                     +"<option value='21:30'>9:30pm</option>"
                                     +"<option value='22:00'>10:00pm</option>"
                                     +"<option value='22:30'>10:30pm</option>"
                                     +"<option value='23:00'>11:00pm</option>"
                                     +"<option value='23:30'>11:30pm</option>"
                                 +"</select>"
                             +"</div>"
                             +"</div>"
                             +"<a href='#' class='remove_ticket'>X</a>"
                           +"</div>";
            console.log($(i));
            $('.multi_add_ticket_type').append(content);
            $('.remove_ticket').on("click", function() {
                   $(this).parent().remove();
                   type_counters--;
            });
            $('.select_type').change(function() {
                //alert($(this).parent().parentchildren());
                if($(this).val() == 'free') {
                    console.log($(this).parent().parent().children().children('.e_price'));
                    $(this).parent().parent().children().children('.e_price').attr('value', '0.00');
                    $(this).parent().parent().children().children('.e_price').parent().hide();
                }
                else
                    $(this).parent().parent().children().children('.e_price').parent().show();
            });
            type_counters++;
    	};
    </script>
    <script>
    	$(document).ready(function() {
    		$('input[type=radio][name=multi_e_is_ticketed0]').change(function() {
            if (this.value == '1') {
                $("#multi_add_more_base").show();
                $(this).parent().parent().siblings("#multi_add_more_base").children().click();
                //$(this).siblings("#multi_add_more").trigger("click");
            }
            else if (this.value == '0') {
                $("#multi_add_more_base0").hide();
                $(".multi_ticket_group").remove();
            }
        });
	});
    </script>-->
</body>
</html> 