<?php
$pageName = "contact";
include "include.config.php";
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]--> 
<!--[if gt IE 9]> <!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php echo $myCompany; ?></title>

<?php include "include.styles.php"; ?>
<?php include "include.scripts.header.php"; ?>

</head>

<body>

<!-- HEADER -->
<?php include "include.header.php"; ?>
 	
<!-- CONTENT -->
<div id="content">
    <div class="container clearfix">
        <article>
            <h1>Contact</h1>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vita.</p>
            
            <?php include "include.contact.php"; ?>
            <?php include "include.moreinfo.php"; ?>
        </article>
        <?php include "include.aside.php"; ?>
    </div>
</div>
 		
<!-- FOOTER -->
<?php include "include.footer.php"; ?>
 
<!-- SCRIPTS -->
<?php include "include.scripts.footer.php"; ?>

</body>
</html>
