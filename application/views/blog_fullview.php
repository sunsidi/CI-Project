<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $blog['blog_title'];?></title>
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
<h1 class="title" style="text-align:center;font-family:GillSans;color:white;">
    <a href="<?php echo base_url().'info/blog'?>" style="color:white;"><img src="<?php echo $PATH_IMG?>w1.png"/>Blog</a>
</h1>
<div class="container" style="padding: 4%;">
    <div class="container blog-container">
        <!--Gazette-->   
        <div class="panel" style="margin-top: 80px;background-color: #d7e0e9; border:none ; border-radius: 10px;">
            <div class="panel-heading blog-header" style="position: relative; background-image: linear-gradient(rgba(0,167,157,0.5), rgba(0,167,157,0.5)),url(<?php echo $PATH_IMG?>header_image.png);background-size:100% 200px;;border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <p style="text-align: right; color: white; font-size: 23px;">By. <?php echo $blog['blog_author'];?></p>
                <p style="text-align: center; color: white; font-size: 32px;"><b><?php echo $blog['blog_title'];?></b></p>
                <div class="hidden-bar" style="position:absolute; bottom:0px;left: 0px;background:linear-gradient(rgba(3,90,86,0.8), rgba(3,90,86,0.8)); width: 100%;height: 50px;">
                    <p style="padding: 10px;text-align: center;padding-left: 0px;color: white; font-size: 25px;"></p>
                </div>  
            </div>
            <div class="panel-body" style="background-color: rgb(228,234,239); border-radius: 10px;">
                <div class="row">
                    <div class="col-md-4 related-blog" style="margin-top: 5%;text-align:center;padding-left:30px;">
                        <p style="text-align: center; font-size: 20px;">Posted on</p>
                        <div style="background: rgba(3,90,86,1); margin-left:auto;margin-right:auto;width: 100px; height: 40px;border-radius:10px; -moz-box-shadow:4px 4px 4px rgba(0, 0, 0, .3);-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, .3);box-shadow:4px 4px 4px rgba(0, 0, 0, .3);">
                            <p style="color: white; font-size: 23px;  padding-top:5px;"><b><?php echo date('M d', strtotime($blog['blog_created']));?></b></p>
                        </div>
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
                        <?php if(isset($all_blogs[1])) {?>
                            <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
                            <p style=" font-size: 20px;">Related Posts</p>
                            <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
                            <a href="<?php echo base_url().'blog/blog_info/'.$all_blogs[1]['id'];?>"><img src="<?php echo base_url().'uploads/'.$all_blogs[1]['blog_filename'];?>" style="width: 100%;"></a>
                            <a href="<?php echo base_url().'blog/blog_info/'.$all_blogs[1]['id'];?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b><?php echo $all_blogs[1]['blog_title'];?></b></p></a>
                        <?php
                        }
                        if(isset($all_blogs[2])) {?>
                            <hr style="border-color: grey; width: 70%; border-width: 2px;"/>
                            <a href="<?php echo base_url().'blog/blog_info/'.$all_blogs[2]['id'];?>"><img src="<?php echo base_url().'uploads/'.$all_blogs[2]['blog_filename'];?>" style="width: 100%;"></a>
                            <a href="<?php echo base_url().'blog/blog_info/'.$all_blogs[2]['id'];?>"><p style="padding: 5px; font-size: 15px; color: grey;"><b><?php echo $all_blogs[2]['blog_title'];?></b></p></a>
                        <?php }?>
                    </div>

                    <div class="col-md-offset-1 col-md-6" style="margin-top: 5%;">
                        <a href="#"><img src="<?php echo base_url().'uploads/'.$blog['blog_filename'];?>" style="width: 100%; margin-top: 5%;"></a>
                        <p style="font-size: 20px;"><?php echo $blog['blog_body'];?></p>
                    </div>
                </div>
                <?php if($this->session->userdata('is_logged_in')) {?>
                    <div class="row" style="padding:1% 2% 2%; margin-top:15px;">
                    	<h3><i class="fa fa-comments"></i> Chatbox</h3>
                        <!-- <div style="text-align:center;">-->
                        <div id = "comment-block" class="comment_section">
                        </div>
                        <div hidden>
                                            <div id="blog_temp_chat_loading">
                                            </div>
                                        </div>
                        <script>
                            $(document).ready(function() {
                                setInterval(function() {
                                    //var randomnumber = Math.floor(Math.random() * 100);
                                    $( "#blog_temp_chat_loading" ).load( "<?php echo $commentLocation; ?>","limit=20");
                                    setTimeout(function(){
                                        $("#blog_temp_chat_loading").children('p').each(function() {
                                            $('<input name="blog_chatbox_test" value="'+$(this).html()+'" hidden><button type="submit">Delete</button>').appendTo(this);
                                            $(this).wrap('<?php echo form_open("blog/delete_chatbox_comment/".$blog['id'])?></form>');
                                        });
                                        $("#comment-block").html($("#blog_temp_chat_loading").html());
                                    },50);
                                }, 1000);
                            });
                        </script>    
                        <div class="event-comment-section">
                            <?php echo form_open('blog/blog_comment/'.$blog['id']); ?>
                                <div class="left-inner-addon pull-left event-comment-input">
                                    <span class="glyphicon glyphicon-comment fa-flip-horizontal"></span>
                                    <input type="text" class="form-control event-post-textarea" id="comment" name= "comment" placeholder="send a message!">                       
                                </div>       
                                <!--Submit comment-->
                                <button type="submit" class="btn btn-lg event-post-btn" style="background:#1C74BB;color:white; padding:5px 10px;margin-left:10px;border-radius:8px;">Post Comment</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                <?php }?>
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