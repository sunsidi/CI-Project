<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <title>My Account - Stats </title>
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
        jQuery(document).ready(function() {
            //hide a div after 3 seconds
            setTimeout(function() {
                jQuery("#sentMessage").hide();
            }, 5000);
        });
        jQuery(document).ready(function() {
            //hide a div after 3 seconds
            setTimeout(function() {
                jQuery("#alertMessage").hide();
            }, 5000);
        });
    </script>
</head>

<body>

    <?php $this->load->view('header');?>

    <!--content
==============================================-->
    <div id='sentMessage'>
        <?php if ($this->session->flashdata('message')) echo '
        <p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 500px; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>
    <div class="container" style="padding-bottom:50px;">
        <?php if(isset($_POST[ 'submit'])){ ?>
        <p id="alertMessage" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">Cancellation request received.
            <br> We will review it and get back to you soon.</p>
        <?php } ?>
        <div class="row" style="margin-top:50px;">

            <div class="col-md-3 col-md-offset-1">
                <div class="panel panel-default" style="border:none;">
                    <div class="panel-heading" style="background:#628DA3;color:white;">
                        <h3 class="panel-title text-center" style="font-size:28px;">My Account</h3>
                    </div>
                    <div class="panel-body" style="background:#DDE0E7;">
                        <a href="<? echo base_url()?>account/myaccount_accountinfo">
                            <button type="button" class="btn btn-lg btn-block account">Account Information</button>
                        </a>
                        <a href="<? echo base_url()?>account/myaccount_eventattending" style="color:#628DA3;">
                            <button type="button" class="btn btn-lg btn-block account">Events I&rsquo;m Attending</button>
                        </a>
                        <a href="<? echo base_url()?>account/myaccount_eventlisting">
                            <button type="button" class="btn btn-lg btn-block account">My Event Listings</button>
                        </a>
                        <a href="<? echo base_url()?>account/myaccount_ticketmanagement">
                            <button type="button" class="btn btn-lg btn-block account">Ticket Sales Management</button>
                        </a>
                        <a href="<? echo base_url()?>account/myaccount_stats">
                            <button type="button" class="btn btn-lg btn-block account-active">Statistics and Analysis</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="panel" style="border:none;">
                        <div class="panel-body" style="background:#97B3C3;color:white;padding-top:0;">
                            <h3>Statistics and Analysis | 	 
                                <div class="btn-group">
                                    <!-- Nav tabs -->
                                    <ul id="myTab" class="nav nav-pills stat-type">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Site Stats <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a id="tab1_change" href="#tab1" role="tab" data-toggle="pill" onclick="tab1_click()">Site Stats</a>
                                                </li>
                                                <li>
                                                    <a id="tab2_change" href="#tab2" role="tab" data-toggle="pill" onclick="tab2_click()">Visitor Stats</a>
                                                </li>
                                                <!--<li>
                                                    <a href="#tab3" data-toggle="pill">Invitation Stats</a>
                                                </li>-->
                                                <li>
                                                    <a href="#tab4" data-toggle="pill">Repeat Customer Stats</a>
                                                </li>
                                            </ul>
                                        </li>							
                                    </ul>
                                </div>
                                <img src="<?php echo $PATH_IMG?>stats_icon.png" class="pull-right" style="padding-right:2%;"/>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!--Site Stats-->
                            <div class="tab-pane active" id="tab1">
                                <div class="row">

                                    <div class="col-md-7">
                                        <!--Ticket Sales Graph-->
                                        <div>
                                            <div class="panel stat-panel">
                                                <div class="panel-body" style="padding:5px;">

                                                    <div class="btn-group">
                                                        <!-- Nav tabs -->
                                                        <ul id="ticket-sale-line" class="nav nav-pills stat-type">
                                                            <span>Ticket Sales Chart (Total)</span> <!-- REMOVE THIS WHEN YOU USE DROPDOWN -->
                                                            <!--<li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Ticket Sales Chart(Daily) <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#total-daily-ticket-sale" data-toggle="pill">Ticket Sales Chart (Daily) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#total-monthly-ticket-sale" data-toggle="pill">Ticket Sales Chart (Monthly) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#total-yearly-ticket-sale" data-toggle="pill">Ticket Sales Chart (Yearly) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-daily-ticket-sale" data-toggle="pill"> Event 1 Ticket Sales Chart (Daily) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-monthly-ticket-sale" data-toggle="pill">Event 1 Ticket Sales Chart (Monthly) </a>
                                                                    </li>
                                                                    <!--<li>
																	<a href="#event1-yearly-ticket-sale" data-toggle="pill">Event 1 Ticket Sales Chart (Yearly) </a>
																</li>
                                                                </ul>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="total-alltime-ticket-sale">
                                                            <canvas id="total_alltime_sales_bar" class="chart-width"></canvas>

                                                        </div>
                                                        <!--<div class="tab-pane active" id="total-daily-ticket-sale">
                                                            <canvas id="total_daily_sales_line" class="chart-width"></canvas>

                                                        </div>
                                                        <div class="tab-pane" id="total-monthly-ticket-sale">
                                                            <canvas id="total_monthly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="total-yearly-ticket-sale">
                                                            <canvas id="total_yearly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-daily-ticket-sale">
                                                            <canvas id="event1_daily_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-monthly-ticket-sale">
                                                            <canvas id="event1_monthly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-yearly-ticket-sale">
														<canvas id="event1_yearly_sales_line" class="chart-width"></canvas>
													</div>-->
                                                        <!-- Don't Need this yet                                        
                                                        <div>
                                                            <div class="box" style="background:#FBE6CC;"></div> &nbsp;&nbsp; VIP</div>
                                                        <div>
                                                            <div class="box" style="background:#FBCBCC;"></div> &nbsp;&nbsp; General Admission</div>
                                                        <div>
                                                            <div class="box" style="background:#ADE7F1;"></div> &nbsp;&nbsp; Early Bird</div>
                                                        -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        <!--<div>
                                            <!--Ticket Sales Based on Age and Gender pie chart (DON't NEED YET)
                                            <div class="panel stat-panel">
                                                <div class="panel-body">
                                                    <div class="btn-group">
                                                        <!-- Nav tabs
                                                        <ul id="ticket-sale-age-gender" class="nav nav-pills stat-type">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Sales Age and Gender Stats (Total)<span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#total-tickets-age" data-toggle="pill">Sales Age and Gender Stats (Total)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-tickets-age" data-toggle="pill">Sales Age and Gender Stats (Event1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event2-tickets-age" data-toggle="pill">Sales Age and Gender Stats (Event2)</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!--<div class="tab-content"> DONT NEED
                                                        <div class="tab-pane active" id="total-tickets-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
                                                                <canvas id="total_age">
                                                                    
                                                                </canvas>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
                                                                <canvas id="total_gender"></canvas>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane" id="event1-tickets-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
																<canvas id="event1_age"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
																<canvas id="event1_gender"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="event2-tickets-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
																<canvas id="event2_age"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
																<canvas id="event2_gender"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                                <!--Ticket Sales Doughnut Graph-->
                                        <div class="col-md-5" style="padding-left:0;">
                                            <div class="panel stat-panel">
                                                <div class="panel-body">
                                                    <div class="btn-group">
                                                        <!-- Nav tabs -->
                                                        <ul id="ticket-sale-doughnut" class="nav nav-pills stat-type">
                                                            <span>Ticket Sales (Total)</span><!-- remove this when you use the dropdown -->
                                                            <!--<li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Ticket Sales (Total)<span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#total-tickets" data-toggle="pill">Ticket Sales (Total)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-tickets" data-toggle="pill">Ticket Sales (Event1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event2-tickets" data-toggle="pill">Ticket Sales (Event2)</a>
                                                                    </li>
                                                                </ul>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="total-tickets">
                                                            <div>
                                                                <p style="text-align:center;"><strong>Tickets Sold: 33</strong> </p>
                                                                <canvas id="total_tickets_sold_site_doughnut" />
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;"><strong>Tickets Returned: 5</strong>
                                                                </p>
                                                                <canvas id="total_tickets_returned_site_doughnut" />
                                                            </div>
                                                            <p style="text-align:center;margin-top:30px;font-size:20px;"><strong>Total Amount of Tickets:</strong> 50</p>
                                                        </div>
                                                        <!-- NOT USING THIS 
                                                        <div class="tab-pane" id="event1-tickets">
                                                            <div>
                                                                <p style="text-align:center;"><strong>Tickets Sold: 33</strong> </p>
                                                                <canvas id="event1_tickets_sold_doughnut" />
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;"><strong>Tickets Returned: 5</strong>
                                                                </p>
                                                                <canvas id="event1_tickets_returned_doughnut" />
                                                            </div>
                                                            <p style="text-align:center;"><strong>Total Amount of Tickets</strong> 50</p>
                                                        </div>
                                                        <div class="tab-pane" id="event2-tickets">
                                                            <div>
                                                                <p style="text-align:center;"><strong>Tickets Sold: 33</strong> </p>
                                                                <canvas id="event2_tickets_sold_doughnut" />
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;"><strong>Tickets Returned: 5</strong>
                                                                </p>
                                                                <canvas id="event2_tickets_returned_doughnut" />
                                                            </div>
                                                            <p style="text-align:center;"><strong>Total Amount of Tickets</strong> 50</p>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--Visitor Stats-->
                            <div class="tab-pane" id="tab2">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!--Visitors Line Graph-->
                                        <div>
                                            <div class="panel stat-panel">
                                                <div class="panel-body" style="padding:5px;">

                                                    <div class="btn-group">
                                                        <!-- Nav tabs -->
                                                        <ul id="visitor-line" class="nav nav-pills stat-type">
                                                            <span>Total Page Visits (Total)</span> <!-- REMOVE THIS WHEN YOU USE DROPDOWN -->
                                                            <!--<li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Total Page Visits(Daily) <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#total-daily-visit" data-toggle="pill">Total Page Visits (Daily) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#total-monthly-visit" data-toggle="pill">Total Page Visits (Monthly) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#total-yearly-visit" data-toggle="pill">Total Page Visits </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-daily-visit" data-toggle="pill"> Event 1 Page Visits (Daily) </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-monthly-visit" data-toggle="pill">Event 1 Page Visits (Monthly) </a>
                                                                    </li>
                                                                    <li>
																	<a href="#event1-yearly-visit" data-toggle="pill">Event 1 Page Visits (Yearly) </a>
																</li>
                                                                </ul>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="total-alltime-visits">
                                                            <canvas id="total_alltime_visits_bar" class="chart-width"></canvas>

                                                        </div>
                                                        <!--<div class="tab-pane active" id="total-daily-visit">
                                                            <canvas id="total_daily_sales_line" class="chart-width"></canvas>

                                                        </div>
                                                        <div class="tab-pane" id="total-monthly-visit">
                                                            <canvas id="total_monthly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="total-yearly-visit">
                                                            <canvas id="total_yearly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-daily-visit">
                                                            <canvas id="event1_daily_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-monthly-visit">
                                                            <canvas id="event1_monthly_sales_line" class="chart-width"></canvas>
                                                        </div>
                                                        <div class="tab-pane" id="event1-yearly-visit">
														<canvas id="event1_yearly_sales_line" class="chart-width"></canvas>
													</div>
                                                        -->
                                                        <!-- DONT NEED THIS YET
                                                        <div>
                                                            <div class="box" style="background:#FBE6CC;"></div> &nbsp;&nbsp; Hits</div>
                                                        <div>
                                                            <div class="box" style="background:#FBCBCC;"></div> &nbsp;&nbsp; Number of Visits</div>
                                                        <div>
                                                            <div class="box" style="background:#ADE7F1;"></div> &nbsp;&nbsp; Unique Visitor</div>
                                                        -->
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--<div>
                                            <!--Visitors Based on Age and Gender pie chart
                                            <div class="panel stat-panel">
                                                <div class="panel-body">
                                                    <div class="btn-group">
                                                        <!-- Nav tabs
                                                        <ul id="visit-age-gender" class="nav nav-pills stat-type">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Sales Age and Gender Stats (Total)<span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#total-visit-age" data-toggle="pill">Sales Age and Gender Stats (Total)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event1-visit-age" data-toggle="pill">Sales Age and Gender Stats (Event1)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#event2-visit-age" data-toggle="pill">Sales Age and Gender Stats (Event2)</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="total-visit-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
                                                                <!--Should be showing up but doesn't
															<canvas id="total_age">
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
                                                                <!--Should be showing up but doesn't
															<canvas id="total_gender"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane" id="event1-visit-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
                                                                <!--Should be showing up but doesn't
																<canvas id="event1_age"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
                                                                <!--Should be showing up but doesn't
																<canvas id="event1_gender"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="event2-visit-age">
                                                            <div>
                                                                <p style="text-align:center;">Age</p>
                                                                <!--Should be showing up but doesn't
																<canvas id="event2_age"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Under 18</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; 18-25</div>
                                                                <div>
                                                                    <div class="box" style="background:#60AAE1;"></div> &nbsp;&nbsp; 26-35</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Over 35</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                            <div style="margin-top:30px;">
                                                                <p style="text-align:center;">Gender</p>
                                                                <!--Should be showing up but doesn't
																<canvas id="event2_gender"/>
                                                                <div>
                                                                    <div class="box" style="background:#F65660;"></div> &nbsp;&nbsp; Man</div>
                                                                <div>
                                                                    <div class="box" style="background:#FAB36B;"></div> &nbsp;&nbsp; Woman</div>
                                                                <div>
                                                                    <div class="box" style="background:#3BC0BD;"></div> &nbsp;&nbsp; Transgender</div>
                                                                <div>
                                                                    <div class="box" style="background:#E08AC8;"></div> &nbsp;&nbsp; Unspecified</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                                    </div>

                                    <!--Visitor Doughnut Graph-->
                                    <div class="col-md-5" style="padding-left:0;">
                                        <div class="panel stat-panel">
                                            <div class="panel-body">
                                                <div class="btn-group">
                                                    <!-- Nav tabs -->
                                                    <ul id="visitor-doughnut" class="nav nav-pills stat-type">
                                                        <span>Visitor Attendence Stats (Total)</span>
                                                        <!--<li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#414042;">Visitor Attendence Stats (Total)<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#total-visits" data-toggle="pill">Visitor Attendence Stats (Total)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#event1-visits" data-toggle="pill">Visitor Attendence Stats (Event1)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#event2-visits" data-toggle="pill">Visitor Attendence Stats (Event2)</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="total-visits">
                                                        <div>
                                                            <p style="text-align:center;"><strong>Number of Views: <?php echo $total_views;?></strong> </p>
                                                            <canvas id="total_tickets_sold_visits_doughnut"></canvas>
                                                        </div>
                                                        <div style="margin-top:30px;">
                                                            <p style="text-align:center;"><strong>Number of Clicks: <?php echo $total_clicks;?></strong>
                                                            </p>
                                                            <canvas id="total_tickets_returned_visits_doughnut"></canvas>
                                                        </div>

                                                    </div>
                                                    <!--<div class="tab-pane" id="event1-visits">
                                                        <div>
                                                            <p style="text-align:center;"><strong>Visitors Attending: 33</strong> </p>
                                                            <canvas id="event1_tickets_sold_doughnut" />
                                                        </div>
                                                        <div style="margin-top:30px;">
                                                            <p style="text-align:center;"><strong>Visitors Who Declined: 5</strong>
                                                            </p>
                                                            <canvas id="event1_tickets_returned_doughnut" />
                                                        </div>
                                                        <p style="text-align:center;"><strong>Total Amount of Tickets</strong> 50</p>
                                                    </div>
                                                    <div class="tab-pane" id="event2-visits">
                                                        <div>
                                                            <p style="text-align:center;"><strong>Visitors Attending: 33</strong> </p>
                                                            <canvas id="event2_tickets_sold_doughnut" />
                                                        </div>
                                                        <div style="margin-top:30px;">
                                                            <p style="text-align:center;"><strong>Visitors Who Declined: 5</strong>
                                                            </p>
                                                            <canvas id="event2_tickets_returned_doughnut" />
                                                        </div>
                                                        <p style="text-align:center;"><strong>Total Amount of Tickets</strong> 50</p>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Invitation Stats
						<div class="tab-pane" id="tab3">
							<div class="row">
								<div class="col-md-7">
									<div class="panel stat-panel">
										<div class="panel-body">
											df
										</div>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0;">
									<div class="panel stat-panel">
										<div class="panel-body">
											df
										</div>
									</div>
								</div>
							</div>
						</div>	-->

                            <!--Repeat Customer Stats-->
                            <div class="tab-pane" id="tab4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel stat-panel" style="border:none;">
                                            <div class="panel-body" style="padding:0;border:none;text-align:center;">
                                                <div style="background:#02D3E8;padding:15px;">
                                                    <img src="<?php echo $PATH_IMG?>visitor_icon.png">
                                                    <div>
                                                        <div class="btn-group">
                                                            <!-- Nav tabs -->
                                                            <ul id="visitor-line" class="nav nav-pills stat-type">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white; font-size:18px;">Repeat Customer Visits (Total)<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Repeat Customer Visits (Total)</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Repeat Customer Visits (Event 1)</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Repeat Customer Visits (Event 2)</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                            <!--Number Changes Based on Dropdown selection-->
                                                            <span style="color:white;font-weight:bold;padding:0;font-size:40px;">145</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="color:gray;padding:2px;">
                                                    only users with 10 or previous visits appear here
                                                </div>
                                                <div class="table-responsive">
                                                    <table style="text-align:center;border-collapse:collapse;width:100%;">
                                                        <thead style="background:#C2CFD1;color:white;">
                                                            <tr>
                                                                <th style="width:33%;text-align:center;padding:5px;">Username</th>
                                                                <th style="width:33%;text-align:center;padding:5px;">Date</th>
                                                                <th style="width:33%;text-align:center;padding:5px;"># of visits</th>
                                                                <tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="word-break:break-all;padding-top:5px;padding-bottom:5px;">name</td>
                                                                <td style="padding-top:5px;padding-bottom:5px;">12/5/21</td>
                                                                <td style="padding-top:5px;padding-bottom:5px;">45</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="word-break:break-all;padding-top:5px;padding-bottom:5px;">name</td>
                                                                <td style="padding-top:5px;padding-bottom:5px;">12/5/21</td>
                                                                <td style="padding-top:5px;padding-bottom:5px;">45</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-left:0;">
                                        <div class="panel stat-panel" style="border:none;">
                                            <div class="panel-body" style="padding:0;border:none;text-align:center;">
                                                <div style="background:#FD9297;padding:15px;">
                                                    <img src="<?php echo $PATH_IMG?>purchase_icon.png">

                                                    <div>
                                                        <div class="btn-group">
                                                            <!-- Nav tabs -->
                                                            <ul id="visitor-line" class="nav nav-pills stat-type">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white; font-size:18px;">Event Name 1<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Event Name 1</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Event Name 2</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" data-toggle="pill">Event Name 3</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                            <!--Number Changes Based on Dropdown selection-->
                                                            <span style="color:white;font-weight:bold;padding:0;font-size:40px;">145</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="color:gray;padding:2px;text-align:center;">
                                                only users with 10 or previous visits appear here
                                            </div>
                                            <div class="table-responsive">
                                                <table style="text-align:center;border-collapse:collapse;width:100%;">
                                                    <thead style="background:#C2CFD1;color:white;">
                                                        <tr>
                                                            <th style="width:33%;text-align:center;padding:5px;">Username</th>
                                                            <th style="width:33%;text-align:center;padding:5px;">Date</th>
                                                            <th style="width:33%;text-align:center;padding:5px;"># of visits</th>
                                                        <tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="word-break:break-all;padding-top:5px;padding-bottom:5px;">name</td>
                                                            <td style="padding-top:5px;padding-bottom:5px;">12/5/21</td>
                                                            <td style="padding-top:5px;padding-bottom:5px;">45</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="word-break:break-all;padding-top:5px;padding-bottom:5px;">name</td>
                                                            <td style="padding-top:5px;padding-bottom:5px;">12/5/21</td>
                                                            <td style="padding-top:5px;padding-bottom:5px;">45</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
        function removal() {
            confirm("Are you sure?");
        }
    </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>-->
    <!--<script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>-->
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/Chart.js"></script>

    <script>
        //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

        //Total Daily Ticket Sales Chart
        var BarChartData1 = {
            labels: ["VIP Tickets", "General Tickets", "Early Bird"],
            datasets: [{
                    label: "All Tickets",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    highlightFill: "#fff",
                    highlightStroke: "rgba(173,231,241,1)",
                    data: [20, 30, 40],
                }
            ]
        }
        var BarChartData2 = {
            labels: ["Views", "Clicks"],
            datasets: [{
                    label: "All Visits",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    highlightFill: "#fff",
                    highlightStroke: "rgba(173,231,241,1)",
                    data: [20, 30],
                }
            ]
        }
        /*var lineChartData1 = {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 15, 4, 20, 1, 0, 4],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [2, 7, 8, 2, 10, 15, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [12, 2, 5, 6, 11, 0, 2],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }

        ////Total Monthly Ticket Sales Chart
        var lineChartData2 = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 2, 54, 5, 0, 2, 2],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [1, 25, 5, 6, 5, 1, 0],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [5, 4, 2, 3, 5, 4, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }

        //Total Yearly Ticket Sales Chart
        var lineChartData3 = {
            labels: ["2013", "2014", "2015", "2016"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 2, 54, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [1, 25, 5, 6],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [5, 4, 2, 3],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }

        //Daily Ticket Sales Chart for 1 Event
        var lineChartData4 = {
            labels: ["1", "2", "3", "4", "5", "6", "7"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 15, 4, 20, 1, 0, 4],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [2, 7, 8, 2, 10, 15, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [12, 2, 5, 6, 11, 0, 2],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }

        //Monthly Ticket Sales Chart for 1 Event
        var lineChartData5 = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 2, 54, 5, 0, 2, 2],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [1, 25, 5, 6, 5, 1, 0],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [5, 4, 2, 3, 5, 4, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }

        //Total Yearly Ticket Sales Chart
        var lineChartData6 = {
            labels: ["2013", "2014", "2015", "2016"],
            datasets: [{
                    label: "VIP Tickets",
                    fillColor: "rgba( 251, 230, 204,0.5)",
                    strokeColor: "rgba( 251, 230, 204,1)",
                    pointColor: "rgba( 251, 230, 204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba( 251, 230, 204, 1)",
                    data: [5, 2, 54, 5],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "General Admission Tickets",
                    fillColor: "rgba(251,203,204,0.5)",
                    strokeColor: "rgba(251,203,204,1)",
                    pointColor: "rgba(251,203,204,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(251,203,204,1)",
                    data: [1, 25, 5, 6],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }, {
                    label: "Early Bird",
                    fillColor: "rgba(173,231,241,0.5)",
                    strokeColor: "rgba(173,231,241,1)",
                    pointColor: "rgba(173,231,241,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,231,241,1)",
                    data: [5, 4, 2, 3],
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }

            ]


        }*/

        //Total Number of Tickets Sold
        var doughnutData1 = [{
                value: 33, // # of tickets sold 
                color: "#33B0D3",
                highlight: "#33B0D3",
                label: "Tickets Sold"
            }, {
                value: 50 - 33, //Total # of tickets - # of tickets sold
                color: "#D1D3D4",
                highlight: "#D1D3D4",
                label: "Tickets Left"
            },

        ];

        //Total Number of Tickets Returned	
        var doughnutData2 = [{
                value: 5, // # of tickets returned
                color: "#F65359",
                highlight: "#F65359",
                label: "Tickets Sold"
            }, {
                value: 50 - 5, //Total # of tickets - # of tickets returned
                color: "#D1D3D4",
                highlight: "#D1D3D4",
            },

        ];
        /*
        //Number of Tickets Sold for Event1	
        var doughnutData3 = [{
                value: 45, // # of tickets sold 
                color: "#33B0D3",
                highlight: "#33B0D3",
                label: "Tickets Sold"
            }, {
                value: 50 - 45, //Total # of tickets - # of tickets sold
                color: "#D1D3D4",
                highlight: "#D1D3D4",
                label: "Tickets Left"
            },

        ];

        //Number of Tickets Returned for Event1	
        var doughnutData4 = [{
                value: 2, // # of tickets returned
                color: "#F65359",
                highlight: "#F65359",
                label: "Tickets Sold"
            }, {
                value: 50 - 2, //Total # of tickets - # of tickets returned
                color: "#D1D3D4",
                highlight: "#D1D3D4",
            },

        ];

        //Number of Tickets Sold for Event2	
        var doughnutData5 = [{
                value: 45, // # of tickets sold 
                color: "#33B0D3",
                highlight: "#33B0D3",
                label: "Tickets Sold"
            }, {
                value: 50 - 45, //Total # of tickets - # of tickets sold
                color: "#D1D3D4",
                highlight: "#D1D3D4",
                label: "Tickets Left"
            },

        ];

        //Number of Tickets Returned for Event2
        var doughnutData6 = [{
                value: 2, // # of tickets returned
                color: "#F65359",
                highlight: "#F65359",
                label: "Tickets Sold"
            }, {
                value: 50 - 2, //Total # of tickets - # of tickets returned
                color: "#D1D3D4",
                highlight: "#D1D3D4",
            },

        ];

        //Total Sales Based on Age		
        var pieData1 = [{
                value: 300,
                color: "#F65660",
                highlight: "#F65660",
                label: "Under 18",
            }, {
                value: 50,
                color: "#3BC0BD",
                highlight: "#3BC0BD",
                label: "18 - 25",
            }, {
                value: 100,
                color: "#60AAE1",
                highlight: "#60AAE1",
                label: "26 - 35",
            }, {
                value: 40,
                color: "#E08AC8",
                highlight: "#E08AC8",
                label: "Over 35",
            }, {
                value: 120,
                color: "#FAB36B",
                highlight: "#FAB36B",
                label: "Unspecified",
            },

        ];

        //Pie Chart Based on Gender	
        var pieData2 = [{
                value: 300,
                color: "#F65660",
                highlight: "#F65660",
                label: "Under 18",
            }, {
                value: 50,
                color: "#3BC0BD",
                highlight: "#3BC0BD",
                label: "18 - 25",
            }, {
                value: 100,
                color: "#60AAE1",
                highlight: "#60AAE1",
                label: "26 - 35",
            }, {
                value: 40,
                color: "#E08AC8",
                highlight: "#E08AC8",
                label: "Over 35",
            }, {
                value: 120,
                color: "#FAB36B",
                highlight: "#FAB36B",
                label: "Unspecified",
            },

        ];*/
        var ctx_bar_graph1;
        var myBar_sales;
        var ctx_bar_graph2;
        var myBar_visits;
        var ctx_doughnut_returned1;
        var myDoughnut_returned1;
        var ctx_doughnut_returned1;
        var myDoughnut_returned1;
        var ctx_doughnut_sold2;
        var myDoughnut_sold2;
        var ctx_doughnut_returned2;
        var myDoughnut_returned2;
        $(document).ready(function() {
            //TOTAL TICKETS SOLD BY TYPE.
            ctx_bar_graph1 = document.getElementById("total_alltime_sales_bar").getContext("2d");
            myBar_sales = new Chart(ctx_bar_graph1).Bar(BarChartData1, {
                responsive: true,
            });
            
            //TOTAL TICKETS SOLD.
            ctx_doughnut_sold1 = document.getElementById("total_tickets_sold_site_doughnut").getContext("2d");
            myDoughnut_sold1 = new Chart(ctx_doughnut_sold1).Doughnut(doughnutData1, {
                responsive: true,
                animation: false,
                segmentShowStroke: false,
            });
            
            //TOTAL TICKETS REFUNDED.
            ctx_doughnut_returned1 = document.getElementById("total_tickets_returned_site_doughnut").getContext("2d");
            myDoughnut_returned1 = new Chart(ctx_doughnut_returned1).Doughnut(doughnutData2, {
                responsive: true,
                animation: false,
                segmentShowStroke: false,
            });
            /*var ctx = document.getElementById("total_daily_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData1, {
                responsive: true,
                scaleShowVerticalLines: false,
            });

            var ctx = document.getElementById("total_monthly_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData2, {
                responsive: true,
                scaleShowVerticalLines: false,
                animation: false,
            });

            var ctx = document.getElementById("total_yearly_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData3, {
                responsive: true,
                scaleShowVerticalLines: false,
                animation: false,
            });

            var ctx = document.getElementById("event1_daily_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData4, {
                responsive: true,
                scaleShowVerticalLines: false,
                animation: false,
            });

            var ctx = document.getElementById("event1_monthly_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData5, {
                responsive: true,
                scaleShowVerticalLines: false,
                animation: false,
            });

            var ctx = document.getElementById("event1_yearly_sales_line").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData6, {
                //responsive: true,
                scaleShowVerticalLines: false,
                animation: false,
            });

            var ctx = document.getElementById("total_tickets_sold_doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData1, {
                responsive: true,
                animation: false,
                segmentShowStroke: false,
            });

            var ctx = document.getElementById("total_tickets_returned_doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData2, {
                responsive: true,
                animation: false,
                segmentShowStroke: false,
            });*/
            //Trying to fix the problem of graphs not showing up in the non active tabs, still does not work        
            
        });
        function tab2_click() {
            setTimeout(function() {
                // Need to wait for everything to load before we can create the stuff. THERE SHOULD BE A BETTER WAY THOUGH.
                myBar_sales.destroy();
                myDoughnut_sold1.destroy();
                myDoughnut_returned1.destroy();
                
                ctx_bar_graph2 = document.getElementById("total_alltime_visits_bar").getContext("2d");
                ctx_doughnut_sold2 = document.getElementById("total_tickets_sold_visits_doughnut").getContext("2d");
                ctx_doughnut_returned2 = document.getElementById("total_tickets_returned_visits_doughnut").getContext("2d");
                
                myDoughnut_sold2  = new Chart(ctx_doughnut_sold2).Doughnut(doughnutData1, {
                    responsive : true,
                    animation: false,
                    segmentShowStroke : false,
                });
                myDoughnut_returned2 = new Chart(ctx_doughnut_returned2).Doughnut(doughnutData2, {
                    responsive : true,
                    animation: false,
                    segmentShowStroke : false,
                });
                myBar_visits = new Chart(ctx_bar_graph2).Bar(BarChartData2, {
                    responsive: true,
            });
            }, 50);
        }
        function tab1_click() {
            setTimeout(function() {
                // Need to wait for everything to load before we can create the stuff. THERE SHOULD BE A BETTER WAY THOUGH.
                myBar_visits.destroy();        
                myDoughnut_sold2.destroy();
                myDoughnut_returned2.destroy();
                
                ctx_bar_graph1 = document.getElementById("total_alltime_sales_bar").getContext("2d");
                ctx_doughnut_sold1 = document.getElementById("total_tickets_sold_site_doughnut").getContext("2d");
                ctx_doughnut_returned1 = document.getElementById("total_tickets_returned_site_doughnut").getContext("2d");
                
                myDoughnut_sold1 = new Chart(ctx_doughnut_sold1).Doughnut(doughnutData1, {
                    responsive : true,
                    animation: false,
                    segmentShowStroke : false,
                });
                myDoughnut_returned1 = new Chart(ctx_doughnut_returned1).Doughnut(doughnutData2, {
                    responsive : true,
                    animation: false,
                    segmentShowStroke : false,
                });
                myBar_sales = new Chart(ctx_bar_graph1).Bar(BarChartData1, {
                    responsive: true,
            });
            }, 50);
        }
            
        
    </script>
</body>

</html>