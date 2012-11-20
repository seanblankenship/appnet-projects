<footer class="clearfix">
    <div class="l">
        <ul class="ci clearfix">
            <li><strong>Address:</strong><?php
                echo (!empty($myCompany)) ? '<br>'.$myCompany : '';
                echo (!empty($myAddressOne)) ? '<br>'.$myAddressOne : '';
                echo (!empty($myAddressTwo)) ? ', '.$myAddressTwo : '';
                echo (!empty($myCity)) ? '<br>'.$myCity.', '.$myState.' '.$myZip : ''; ?></li>
            <li><strong>Phone:</strong><?php
                echo (!empty($myPhoneLocal)) ? '<br>Ph: '.$myPhoneLocal : '';
                echo (!empty($myPhoneTollFree)) ? '<br>Ph: '.$myPhoneTollFree : '';
                echo (!empty($myEmail)) ? '<br>Email: <a href="mailto:'.$myEmail.'">'.$myEmail.'</a>' : ''; ?></li>
        </ul>
    </div>
    <div class="r">
        <ul class="sl clearfix"><?php 
            writeNavigation($mainnav,0,'');
            echo ($pageName == "default") ? '<li><a href="sitemap.php">Sitemap</a></li>' : '';
        ?></ul>
        <small>Copyright &copy; <?php echo($myDate); ?><?php echo (!empty($myCompany)) ? ' '.$myCompany : ''; ?>. <a href="<?php echo $myStateurl[$myState]; ?>"><?php echo $myStatename[$myState]; ?> Web Design</a> by AppNet.com.</small>
    </div>
</footer>
