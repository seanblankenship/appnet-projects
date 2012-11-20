<aside>

<?php function writeBullets(){ ?>
    <h3>Important Bullet points</h3>
    <p>Reason we are good to use:</p>
    <ul>
      	<li>The best at what we do, and what we do is be good at our job.</li>
        <li>Still the best at what we do, and what we do is be good at our job.</li>
        <li>The best at what we do, and what we do is be good at our job.</li>
        <li>Still the best at what we do, and what we do is be good at our job.</li>
   </ul>
<?php } ?>

<?php function writeAddressPhone(){
    global $myPhoneLocal, $myPhoneTollFree, $myFax, $myAddressOne, $myAddressTwo, $myCity, $myState, $myZip; ?>
    <h3>Get In Touch</h3>
    <div class="clearfix">
        <div class="address-l">
            <strong>Call Us:</strong><?php
            echo (!empty($myPhoneLocal)) ? '<br>Ph: '.$myPhoneLocal : '';
            echo (!empty($myPhoneTollFree)) ? '<br>Ph: '.$myPhoneTollFree : '';
            echo (!empty($myFax)) ? '<br>Fax: '.$myFax : ''; ?> 
        </div>
        <div class="address-r">
            <strong>Address:</strong><?php
            echo (!empty($myAddressOne)) ? '<br>'.$myAddressOne : '';
            echo (!empty($myAddressTwo)) ? '<br>'.$myAddressTwo : '';
            echo (!empty($myCity)) ? '<br>'.$myCity.', '.$myState.' '.$myZip : ''; ?>   
        </div>
    </div>
<?php } ?>

<?php if($pageName=="default") { ?>
    <h2>Find Us</h2>
    <?php writeGoogleMap("96%","200","13"); ?>
    <?php writeBullets(); ?>
    
<?php } elseif ($pageName=="about") { ?>
  	<h2>Find Us</h2>
    <?php writeGoogleMap("96%","200","13"); ?>       
    <?php writeAddressPhone(); ?>

<?php } elseif ($pageName=="location") { ?>  
	<?php writeGetDirections(); ?>
    <?php writeAddressPhone(); ?> 
	
<?php } elseif ($pageName=="services") { ?>
    <?php writeBullets(); ?>   
    <?php writeAddressPhone(); ?> 
    
<?php } elseif ($pageName=="contact") { ?>
    <h2>Find Us</h2>
    <?php writeGoogleMap("96%","200","13"); ?> 
    <?php writeAddressPhone(); ?> 
        
<?php } else { ?>
    <?php writeAddressPhone(); ?>
<?php } ?> 

</aside>
