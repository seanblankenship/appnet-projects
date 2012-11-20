<?php

// ================================================================
// 	Site variables
// ================================================================

$myCompany       = "Black Pearl, LLC";
	
$serverFolder    = "something.com";
	
$myDomain        = "http://".$serverFolder;
$myEmail         = "info@".$serverFolder;
		
$publishdate     = "2012";
	
$myAddressOne    = "7883 Hwy 105 S";
$myAddressTwo    = "Suite 3";
$myCity          = "Boone";
$myState         = "NC"; // use two-letter abbreviation
$myZip           = "28607";
	
$myPhoneLocal    = "828-963-7286";
$myPhoneTollFree = "800-555-5555";
$myFax           = "555-444-3333";

// colors (if you are using the hex value, be sure to include the #)
$cText          = '#000';
$cLinks         = '#4a8ac8';
$cLinksHover    = '#900';
$cFootText      = '#000';
$cFootLinks     = '#fff';

$cBorder        = '#000';
$cBackgrounds   = '#4a8ac8';
$cNavBgHover    = '#4a8ac8';
$cSiteBg        = '#ededed';   
	

// ================================================================
// 	Site Add-Ons // 1=yes 0=no // instructions in README
// ================================================================

// Spam Protection
$hideme="0";	
$server_folder_name=$serverFolder;

// Image Fader
$fader="1"; 
$faderHeight="320px";

// Dropdown Navigation
$dropdownnav="0"; 

// Validate Reach Quickly Form
$quickCommentForm="1";

// Adaptive / Responsive
$mobile="0";

// Display Twitter
$twitter_display="0";
$twitter_pageName="default";	// this is the same as the $pageName variable at the top of the desired page (ie $pageName="default" or $pageName="404b")
$twitter_name="twitter";		// this is their @whatever name
$twitter_tweets="5";			// this is the number of latest tweets you would like to be displayed


// ================================================================
// 	include all functions (unless key_f.php)
// ================================================================     

$filename = basename($_SERVER['SCRIPT_NAME']);
if ($filename!="key_f.php"){ include "inc/functions.php"; }
