<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<title>Chat</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<head>
<meta http-equiv="refresh" content="10">
</head>

<body>

 <?php
    echo form_open('chat/message/'.$otherUser);
    //echo 'message2 <br>';
    echo $currentUser;
    ?>

<input type="text" id="comment" name="comment">
<!--<div id="comment-block" style="overflow: scroll; width: 200px; height: 600px;"></div>-->
<div id="comment-block"></div>
<?php echo form_close() ?>
  
  <script>
  $( "#comment-block" ).load( "<?php echo $chatLocation; ?>",);//"http://localhost/WP_intern-messaging/application/views/chats/text.html");

  </script>

</body>
</html>






</div>


    