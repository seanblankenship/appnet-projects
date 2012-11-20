<footer>
    <div class="container clearfix">
        <div>
            <ul class="sl clearfix"><?php 
                writeNavigation($mainnav,0,'');
				echo ($pageName == "default") ? '<li class="hsm"><a href="sitemap.php">Sitemap</a></li>' : '';
		    ?></ul>
        </div>
        <div><strong>Address:</strong><?php
            echo (!empty($myAddressOne)) ? '<br>'.$myAddressOne : '';
            echo (!empty($myAddressTwo)) ? '<br>'.$myAddressTwo : '';
            echo (!empty($myCity)) ? '<br>'.$myCity.', '.$myState.' '.$myZip : ''; ?>
        </div>
        <div><strong>Call Us:</strong><?php
            echo (!empty($myPhoneLocal)) ? '<br>Ph: '.$myPhoneLocal : '';
            echo (!empty($myPhoneTollFree)) ? '<br>Ph: '.$myPhoneTollFree : '';
            echo (!empty($myFax)) ? '<br>Fax: '.$myFax : ''; ?>
        </div>        
        <div><strong>Email:</strong><?php 
            echo '<br>';
            emailLink($myEmail); ?>
        </div>
    </div>
</footer>
<small>Copyright &copy; <?php echo($myDate); ?><?php echo (!empty($myCompany)) ? ' '.$myCompany : ''; ?>. <a href="<?php echo($myStateurl[$myState]); ?>"><?php echo($myStatename[$myState]); ?> Web Design</a> by AppNet.com.</small>
