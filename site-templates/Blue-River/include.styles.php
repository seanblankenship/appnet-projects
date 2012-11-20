<link rel="stylesheet" href="style.css?ver=<?php echo filemtime('style.css'); ?>">
<?php 
echo ($dropdownnav=="1") ? '<link rel="stylesheet" href="css/dropdown-style.css">'."\n" : '';
echo ((isset($use_lightbox)) && ($use_lightbox=="yes")) ? '<link rel="stylesheet" href="css/jquery.lightbox-0.5.css">'."\n" : '';
echo ((isset($use_lightbox)) && ($use_s_lightbox=="yes")) ? '<link rel="stylesheet" href="css/s-lightbox.css">'."\n" : '';
if ($mobile=="1") {
    echo '<link rel="stylesheet" href="mq.css">'."\n";
    echo '<meta name="viewport" content="width=device-width,initial-scale=1">'."\n";
}
?>
<style>
    body {background:<?php echo $cSiteBg; ?> url('gradient.png') 50% 0 repeat-y; color:<?php echo $cText; ?>;}
    h1, h2, h3, h4, h5, h6 {border-bottom:1px dotted <?php echo $cBorder; ?>;}
    img.border, iframe {border:1px dotted <?php echo $cBorder; ?>;}
    a:link, a:visited, a:active {color:<?php echo $cLinks; ?>; border-bottom:1px dotted <?php echo $cLinks; ?>;}
    a:hover {color:<?php echo $cLinksHover; ?>; border-bottom:1px dotted <?php echo $cLinksHover; ?>;}
    #topbar {border-top:10px solid <?php echo $cBackgrounds; ?>;}
    nav {background:<?php echo $cSiteBg; ?> url('gradient.png') 50% 0 repeat-y;}
    ul#navlist li a:hover {background:<?php echo $cNavBgHover; ?>;}
    .service-list li {background:<?php echo $cBackgrounds; ?>;}
    footer {background:<?php echo $cBackgrounds; ?>; color:<?php echo $cFootText; ?>;}
    footer a:link, footer a:visited, footer a:active {color:<?php echo $cFootLinks; ?>; border-bottom:1px dotted <?php echo $cBackgrounds; ?>;}
    footer a:hover {color:<?php echo $cFootLinks; ?>; border-bottom:1px dotted <?php echo $cFootLinks; ?>;} 
</style>
