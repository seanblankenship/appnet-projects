<?php

$project = "gallery";

// generates thumbnail
function make_thumb($src,$dest,$desired_width,$desired_height) {
    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    /* find the "desired height" of this thumbnail, relative to the desired width    */
    //$desired_height = floor($height*($desired_width/$width));
    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
    /* copy source image at a resized size */
    imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image,$dest);
}

// returns files from the directory
function get_files($images_dir,$exts = array('jpg')) {
    $files = array();
    if($handle = opendir($images_dir)) {
        while(false !== ($file = readdir($handle))) {
            $extension = strtolower(get_file_extension($file));
            if($extension && in_array($extension,$exts)) {
                $files[] = $file;
            }
        }
        closedir($handle);
    }
    return $files;
}

// returns the file extension
function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);
}

/** settings **/
$images_dir = '../../proofs/';
$thumbs_dir = '../../proofs/thumbs/';
$thumbs_width = 200;
$thumbs_height = 150;

/** generate photo gallery **/
$image_files = get_files($images_dir);
if(count($image_files)) {
    $index = 0;
    $current_letter = '';
    $arr_letters = array();
    
    // array of bad abbreviations
    $bad_abbreviations  = array(' A ', ' By ', ' To ', ' Al ', ' Ak ', ' Az ', ' Ar ', ' Ca ', ' Co ', ' Ct ', ' De ', ' Dc ', ' Fl ', ' Ga ', ' Hi ', ' Id ', ' Il ', ' Ia ', ' Ks ', ' Ky ', ' La ', ' Me ', ' Md ', ' Ma ', ' Mi ', ' Mn ', ' Ms ', ' Mo ', ' Mt ', ' Ne ', ' Nv ', ' Nh ', ' Nj ', ' Nm ', ' Ny ', ' Nc ', ' Nd ', ' Oh ', ' Ok ', ' Or ', ' Pa ', ' Ri ', ' Sc ', ' Sd ', ' Tn ', ' Tx ', ' Ut ', ' Vt ', ' Va ', ' Wa ', ' Wv ', ' Wi ', ' Wy ');
    $good_abbreviations = array(' a ', ' by ', ' to ', ' AL ', ' AK ', ' AZ ', ' AR ', ' CA ', ' CO ', ' CT ', ' DE ', ' DC ', ' FL ', ' GA ', ' HI ', ' ID ', ' IL ', ' IA ', ' KS ', ' KY ', ' LA ', ' ME ', ' MD ', ' MA ', ' MI ', ' MN ', ' MS ', ' MO ', ' MT ', ' NE ', ' NV ', ' NH ', ' NJ ', ' NM ', ' NY ', ' NC ', ' ND ', ' OH ', ' OK ', ' OR ', ' PA ', ' RI ', ' SC ', ' SD ', ' TN ', ' TX ', ' UT ', ' VT ', ' VA ', ' WA ', ' WV ', ' WI ', ' WY ');   
    
    
    foreach($image_files as $index=>$file) {
        $index++;
        $thumbnail_image = $thumbs_dir.$file;
        if(!file_exists($thumbnail_image)) {
            $extension = get_file_extension($thumbnail_image);
            if($extension) {
                make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width,$thumbs_height);
            }
        }
        $title_arr = explode('.', $file);
        $title = $title_arr[0];
        $title_arr = explode('-', $title);
        $title = implode(' ', $title_arr);
        $title = str_replace('_',' ', $title);
        $title2 = ucwords(strtolower($title));
        $title2 = " ".$title2." ";
        $title2 = str_replace($bad_abbreviations, $good_abbreviations, $title2);
        $title2 = substr($title2, 1);
        $title2 = substr($title2, 0, -1);
        
        $first_letter = substr($title2, 0, 1);
        if ($current_letter!=$first_letter) {
            $backlink = '<div class="span12"><a href="#" class="btn btn-primary">Back to Top &rarr;</a><p>&nbsp;</p></div>';
            $display_gallery .= ($current_letter=='') ? '' : $backlink;
            $display_gallery .= "<div id=\"$first_letter\" class=\"span12\"><h2>$first_letter</h2></div>";
            $arr_letters[] = $first_letter;
            $current_letter = $first_letter;
        }
    
        $display_gallery .= '<div class="span3"><h4>'.$title2.'</h4><a href="photo.php?file='.$file.'" title="'.$title2.'"><img src="'.$thumbnail_image.'" height="'.$thumb_height.'" width="'.$thumb_width.'"></a><a href="photo.php?file='.$file.'" title="'.$title2.'" class="btn btn-inverse">View Proof</a></div>';
              
    }
    $display_gallery .= $backlink;
} else {
    $display_gallery = '<div class="span12"><p class="text-error">ERROR: There are no images in this gallery.</p></span>';
}

?><!DOCTYPE html>
<html>
<head>
<title>Appnet Projects :: Proof Gallery</title>
<link rel="shortcut icon" href="http://appnet.com/favicon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>

<?php include "../inc/header.inc.php"; ?>

<div class="container">

    <h1>Proof Gallery</h1>
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