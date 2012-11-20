<header>
    <div id="tophead" class="clearfix">
        <a href="default.php" title="<?php echo $myCompany; ?>" id="logo" class="nobord"><img src="logo.png" alt="<?php echo $myCompany; ?> Logo"></a>
        <p class="contactinfo">
            <strong>Phone:</strong> <?php echo $myPhoneLocal; ?><br>
            <strong>Toll Free:</strong> <?php echo $myPhoneTollFree; ?><br>
            <strong>Email:</strong> <?php emailLink($myEmail); ?>
        </p>
    </div>
    <div id="fader"><?php
        if ($pageName == "default") { 
            writeImgs("fader","1",".jpg");
        } else {
            if(file_exists("fader1-sub.jpg")) {		// <-- if fader1-sub.jpg exists, display it
                writeRandomImg("fader","1","-sub.jpg");
            } elseif(file_exists("fader1.jpg")) {	// <-- else display fader1.jpg if it exists
                writeRandomImg("fader","1",".jpg");
            }
        } 
    ?></div>
    <nav><?php include "inc/navigation.inc.php"; ?></nav>  
</header>
