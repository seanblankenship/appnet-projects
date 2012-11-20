<?php

$project = "templates";
    
// which folder to use
$my_root = "C:\\users\\appnetsites.com\\projects\\site-templates";

$current_letter = '';
$arr_letters = array();
$bad_abbreviations  = array(' A ', ' By ', ' To ', ' Al ', ' Ak ', ' Az ', ' Ar ', ' Ca ', ' Co ', ' Ct ', ' De ', ' Dc ', ' Fl ', ' Ga ', ' Hi ', ' Id ', ' Il ', ' Ia ', ' Ks ', ' Ky ', ' La ', ' Me ', ' Md ', ' Ma ', ' Mi ', ' Mn ', ' Ms ', ' Mo ', ' Mt ', ' Ne ', ' Nv ', ' Nh ', ' Nj ', ' Nm ', ' Ny ', ' Nc ', ' Nd ', ' Oh ', ' Ok ', ' Or ', ' Pa ', ' Ri ', ' Sc ', ' Sd ', ' Tn ', ' Tx ', ' Ut ', ' Vt ', ' Va ', ' Wa ', ' Wv ', ' Wi ', ' Wy ');
$good_abbreviations = array(' a ', ' by ', ' to ', ' AL ', ' AK ', ' AZ ', ' AR ', ' CA ', ' CO ', ' CT ', ' DE ', ' DC ', ' FL ', ' GA ', ' HI ', ' ID ', ' IL ', ' IA ', ' KS ', ' KY ', ' LA ', ' ME ', ' MD ', ' MA ', ' MI ', ' MN ', ' MS ', ' MO ', ' MT ', ' NE ', ' NV ', ' NH ', ' NJ ', ' NM ', ' NY ', ' NC ', ' ND ', ' OH ', ' OK ', ' OR ', ' PA ', ' RI ', ' SC ', ' SD ', ' TN ', ' TX ', ' UT ', ' VT ', ' VA ', ' WA ', ' WV ', ' WI ', ' WY '); 
    
// read the directory and spit out all files/directories
if ($handle = opendir($my_root)) {

    // array files to be excluded
    $exclusions = array('.', '..', 'default.php');

    // spit out each site if valid
    while (false !== ($entry = readdir($handle))) {

        // only use the correct folders
        if (!in_array($entry, $exclusions)) {

            // take out the '-' for titles
            $title = str_replace('-', ' ', $entry);
            $title = " ".$title." ";
            $title = str_replace($bad_abbreviations, $good_abbreviations, $title);
            $title = substr($title, 1);
            $title = substr($title, 0, -1);
            
            $first_letter = substr($title, 0, 1);
            if ($current_letter!=$first_letter) {
                $backlink = '<div class="span12"><a href="#" class="btn btn-primary">Back to Top &rarr;</a><p>&nbsp;</p></div>';
                $display_gallery .= ($current_letter=='') ? '' : $backlink;
                $display_gallery .= "<div id=\"$first_letter\" class=\"span12\"><h2>$first_letter</h2></div>";
                $arr_letters[] = $first_letter;
                $current_letter = $first_letter;
            }

            // look for preview.jpg
            $img = (file_exists("$my_root\\$entry\\preview.jpg")) ? '<p><a href="'.$entry.'/" title="'.$title.' - Full Site"><img src="'.$entry.'/preview.jpg" alt="'.$title.'" width="200"></a></p>' : ''; 

            $display_gallery .= '<div class="span3"><h4>'.$title.'</h4>'.$img.'<p><a href="'.$entry.'/" class="btn btn-inverse" title="'.$title.' - Full Site">Full Site</a></p><p><a href="'.$entry.'/?v=mobile" class="btn btn-inverse" title="'.$title.' - Mobile Ready">Mobile Ready</a></p></div>';

        }

    }
    
    $display_gallery .= $backlink;

    closedir($handle);
}

?><!DOCTYPE html>
<html>
<head>
<title>Appnet Projects</title>
<link rel="shortcut icon" href="http://appnet.com/favicon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>

<?php include "../inc/header.inc.php"; ?>

<div class="container">

    <h1>Site Templates</h1>
    <p class="lead">Quick Links: <br><?php
    
    $i=0;
    foreach ($arr_letters as $letter) {
        $divide = ($i!=0) ? ' <small>/</small> ' : '';
        echo "$divide<a href=\"#$letter\">$letter</a>";
        $i++;
    }
    
    ?></p>

    <div id="gallery" class="row"><?=$display_gallery?></div>

    <?php include "../inc/footer.inc.php"; ?>

</div> <!-- /container -->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>