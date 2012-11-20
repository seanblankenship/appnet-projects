<?php
    $title = htmlspecialchars($_GET['title']);
    $file = htmlspecialchars($_GET['file']);
    
    $title_arr = explode('.', $file);
    $title = $title_arr[0];
    $title_arr = explode('-', $title);
    $title = implode(' ', $title_arr);
    $title2 = ucwords(strtolower($title));
    
    $img = "../../proofs/$file";
    
    list($width, $height, $type, $attr) = getimagesize($img);



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title><?=$title2?></title>
<style type="text/css">
    * {margin:0; padding:0;}
    body {background:#111; color:#fff; text-align:center;}
    div {height:<?=$height?>px; width:100%;}
</style>
</head>
<body><div style="background:url('<?=$img?>') 50% 0 no-repeat;"></div></body>
</html>