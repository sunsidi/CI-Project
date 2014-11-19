<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notifications</title>

<script>

function myFunction()
{
document.getElementById("herdzz").innerHTML = " ";

}



</script>
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<? echo $PATH_BOOTSTRAP?>css/main.css" rel="stylesheet">
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
<div id='sentMessage'><?php if ($this->session->flashdata('message')) echo '<p id="sentStyle" style="margin-left:auto;margin-right:auto; margin-top:20px;width: 40%; background-color:#4EA48B; color: white;text-align:center;font-size:20px;">'.$this->session->flashdata('message').'</p>';?></div>  
<!-- Extra? <div class="container" style="padding-bottom:50px;">-->
  <div class="container">
  <div class="row" style="margin-top:5%;">
    <div class="col-md-6 col-md-offset-3 notification">
          
        
          <div class="panel" style="background:#d9e3ea;border:none;border-radius:10px;">
          <div class="panel-header"><h3 class="panel-title notify_header" style="text-align:center; background:#3e8fbb; color:white; padding:13px;border-top-left-radius:10px;border-top-right-radius:10px;">Your Notifications</h3></div>
                <div class="panel-body" style="padding:10px;">
                    <?php if(isset($all_notifications)) {
                        for($i = 0; $i < $number_of_notes; $i++) {?>
                            <li role="presentation" style="list-style-type: none;"><!--<a role="menuitem" tabindex="-1">-->
                                <div style="padding:10px; text-align:left;">
                                    <p style="color:#414042; text-align:center;"><?php echo $all_notifications[$i]['time_sent'];?> &nbsp;&nbsp;</p>
                                        <p><img src="<?php echo base_url()."uploads/".$all_notifications[$i]['other_picture'];?>" style="width:55px; height:55px;border-radius: 150px;border:2px solid #7874A2;z-index:5;position:relative;"><span style="color:white;background:#7874A2; padding:5px 12px 5px 30px; border-radius:5px;margin-left:-20px;z-index:3;"><?php echo $all_notifications[$i]['other_fullname']?> </span>  
                                            &nbsp;<b style="color:#414042;"><?php echo $all_notifications[$i]['message'];?>.</b></p>
                                            <?php if(strpos($all_notifications[$i]['message'], "friend request")) {?>
                                                    <form action="<?php echo base_url().'main/accept_decline/'.$all_notifications[$i]['email_explode'][0].'/'.$all_notifications[$i]['email_explode'][1].'/'.$all_notifications[$i]['id'];?>" method="post" accept-charset="utf-8">
                                                        <button type="submit" name = "submit" value = "Accept">Accept</button>
                                                        <button type="submit" name = "submit" value = "Decline">Decline</button>
                                                    </form>
                                            <?php }?>
                                            
                                            
                                </div>
                                
                            <!--</a>--></li>
                <?php }}
                      else {?>
                            <div>
                                <p>You have no new notifications</p>
                            </div>
                <?php }?>
                </div>
           </div>
  </div>
</div>
<!--end of content-->

<?php $this->load->view('footer');?>
  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
   
    <script src="<?php echo $PATH_BOOTSTRAP?>js/bootstrap.js"></script>
    <script src="<? echo $PATH_BOOTSTRAP?>js/dropdown.js"></script>
    <script src="<?php echo $PATH_JAVASCRIPT?>Notifications.js"></script>
</body>
</html> 