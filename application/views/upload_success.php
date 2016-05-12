<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div>
        <span>
            <img src = "<?php echo base_url()."uploads/".$file_name?>" />
            Succesfully upload image!!!!!
            <?php echo "image name: ".$file_name; ?>
            <br><br>
            <div>
                <span>
                    Redirecting in a few seconds...
                    <?php header("refresh:5; url=../showroom/profile");?>
                    or
                    <a href="../showroom/profile">click here to redirect</a>
                </span>
            </div>
        </span>
    </div>
</body>
</html>