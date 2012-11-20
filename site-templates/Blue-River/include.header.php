<header>
    <div id="topbar"></div>
    <div class="container">
        <div id="logo"><a href="default.php" title="<?php echo $myCompany; ?>"><img src="logo.jpg" alt="<?php echo $myCompany; ?> Logo"></a></div>
        
    	<nav><?php include "include.navigation.php"; ?></nav>
    	<div id="fader"><?php
    		if ($pageName == "default" && $fader=="1") { 
    			writeImgs("fader","1",".jpg");
    		} else {
    			if(file_exists("fader1-sub.jpg")) {		// <-- if fader1-sub.jpg exists, display it
    				writeRandomImg("fader","1","-sub.jpg");
    			} elseif(file_exists("fader1.jpg")) {	// <-- else display fader1.jpg if it exists
    				writeRandomImg("fader","1",".jpg");
    			}
    		} 
        ?></div>
    </div>
</header>
