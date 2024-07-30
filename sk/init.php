<?php

// Disallow direct access to this file for security reasons
if(!defined("SK"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure you use this within your skBase project. (or define SK if you know what you are doing.)");
}

// Fallback
if(!defined('THIS_SCRIPT'))
{
	define('THIS_SCRIPT', 'unknown');
}

// Attempt root path autodetection
if(!defined('SK_ROOT'))
{
	define('SK_ROOT', __DIR__);
}

define("TIME_NOW", time()); // Set time variable

// initialize main SK class
require_once SK_ROOT.'/conf/main.php';
$sk = new sk();