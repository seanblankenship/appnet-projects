<?php $surl = "http://appnetsites.com/projects"; ?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?=$surl?>">Appnet Projects</a>
            <div class="nav-collapse collapse">
                <?=(!empty($sn)) ? '<p class="navbar-text pull-right"><a href="?s='.$sn.'" class="navbar-link">Refresh</a> | <a href="?clear=y" class="navbar-link">Clear</a></p>' : ''?>
                <ul class="nav">
                    <?php $project = (!isset($project)) ? '' : $project ?>
                    <li<?=($project=="gallery") ? ' class="active"' : ''?>><a href="<?=$surl?>/proof-gallery">Proof Gallery</a></li>
                    <li<?=($project=="templates") ? ' class="active"' : ''?>><a href="<?=$surl?>/site-templates">Site Templates</a></li>
                    <li<?=($project=="tester") ? ' class="active"' : ''?>><a href="<?=$surl?>/media-query-tester">Media Query Tester</a></li>
                    <li><a href="http://appnet.com/" target="_blank">Appnet.com</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>