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

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Appnet Projects</h1>
        <p>This is the home of our random projects...hopefully they are of use to someone.</p>
        <div class="btn-group">
            <a class="btn btn-inverse btn-large" href="proof-gallery/">Proof Gallery &raquo;</a>
            <a class="btn btn-inverse btn-large" href="site-templates/">Site Templates &raquo;</a>
            <a class="btn btn-inverse btn-large" href="media-query-tester/">Media Query Tester &raquo;</a>
        </div>
    </div>
    
    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Proof Gallery</h2>
            <p>Gallery of all of our current proofs out to clients.</p>
            <p><a class="btn btn-primary" href="proof-gallery/">View Project &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Site Templates</h2>
            <p>Gallery of sites for a few of our cheaper site templates.</p>
            <p><a class="btn btn-primary" href="site-templates/">View Project &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Media Query Tester</h2>
            <p>Test any url in multiple sized iframes on the same page.</p>
            <p><a class="btn btn-primary" href="media-query-tester/">View Project &raquo;</a></p>
        </div>
    </div>
    
    <?php include "inc/footer.inc.php"; ?>

</div> <!-- /container -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>