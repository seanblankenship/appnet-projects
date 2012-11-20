<?php

$project = "tester";

// web address
if (!empty($_REQUEST['s'])) {
    $sn = $_REQUEST['s'];
    $sn = str_replace('http://','',$sn);
    $sn = "http://".$sn;
} elseif (isset($_REQUEST['clear'])) {
    $sn = "";
} else {
    $sn = "";
}

// this sets the height/width of the iframes (17px is added to account for the scroll bar in chrome)
$iphonePort = 320 + 17;
$iphoneLand = 480 + 17;
$ipadPort   = 768 + 17;
$screenSm   = 1024 + 17;
$screenLg   = 1400 + 17;


?>
<!DOCTYPE html>
<html>
<head>
<title>Appnet Projects :: Media Query Tester</title>
<link rel="shortcut icon" href="http://appnet.com/favicon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<?php if (!empty($sn)) { ?>
<style>
html {overflow-x:scroll; overflow-y:hidden;}
body {background:#444; width:4280px;}
iframe {
    background:#333; 
    border:1px solid #222; 
    border-radius:5px; 
    height:100%; 
    margin:0px 0 0 20px; 
    padding:5px;
}
#iphone-portrait {width:<?=$iphonePort?>px;}
#iphone-landscape {width:<?=$iphoneLand?>px;}
#ipad-portrait {width:<?=$ipadPort?>px;}
#ipad-landscape {width:<?=$screenSm?>px;}
#full-size {width:<?=$screenLg?>px;}      
</style>
<?php } ?>
</head>

<body>

<?php include "../inc/header.inc.php"; ?>

<?php if (empty($sn)){ ?>

<div class="container">
    <h1>Media Query Tester</h1>
    <p class="lead">To test a site at multiple different breakpoints, enter the url below and then process.</p>
    <form class="form-inline" method="post" action="">
        <input type="text" class="input" name="s" <?=(!empty($sn)) ? 'value="'.$sn.'" ' : ''?>placeholder="http://">
        <button type="submit" name="submit" class="btn btn-primary" value="Submit">Process</button>
    </form>
    <?php include "../inc/footer.inc.php"; ?>
</div> <!-- /container -->

<?php } else { ?>

<iframe src="<?=$sn?>" id="iphone-portrait"></iframe>
<iframe src="<?=$sn?>" id="iphone-landscape"></iframe>
<iframe src="<?=$sn?>" id="ipad-portrait"></iframe>
<iframe src="<?=$sn?>" id="ipad-landscape"></iframe>
<iframe src="<?=$sn?>" id="full-size"></iframe>

<?php } ?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script>
var iframe = $('iframe');
var height = $(document).height() - 90;
$(iframe).css('height', height);
$('#refresh').click(function(){
    $(iframe).attr('src', '<?php echo $sn; ?>');
});
</script>

</body>
</html>