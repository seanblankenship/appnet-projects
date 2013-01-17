<!DOCTYPE html>
<html>
<head>
<title>Appnet Projects</title>
<link rel="shortcut icon" href="http://appnet.com/favicon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>

<?php include "inc/header.inc.php"; ?>

<div class="container">

    <h1>Appnet Projects</h1>
    <p class="lead">Appnet Projects is just a place for us to more easily keep track of some of the things that make our jobs a little easier. Nothing in here is all that awesome or really meant to be seen by the outside world...move along now.</p>
    <p>&nbsp;</p>

    <hr>

    <div class="row">
        <div class="span4">
            <h4>Proof Gallery</h4>
            <p>A proof gallery that allows us a way to easily view multiple iterations of all current proofs out to clients.</p>
            <p><a class="btn btn-success" href="<?=$surl?>/proof-gallery">Proof Gallery &raquo;</a></p>
            <p>&nbsp;</p>
        </div>
        <div class="span4">
            <h4>Site Templates</h4>
            <p>A collection of a few of the site templates that we offer... this section is considered to be under construction.</p>
            <p><a class="btn btn-success" href="<?=$surl?>/site-templates">Site Templates &raquo;</a></p>
            <p>&nbsp;</p>
        </div>
        <div class="span4">
            <h4>Media Query Tester</h4>
            <p>A super quick and dirty way to test media queries on a site... since it isn't optimized, it works best in Chrome.</p>
            <p><a class="btn btn-success" href="<?=$surl?>/media-query-tester">Media Query Tester &raquo;</a></p>
            <p>&nbsp;</p>
        </div>
    </div>

    <?php include "inc/footer.inc.php"; ?>

</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>