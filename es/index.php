<?php 

/**
 * Teknologiaplaneetta - Enterprise Solution
 *
 * LICENSE: Open Source (GNU GPL)
 *
 * @copyright  2007 Teknologiaplaneetta
 * @license    http://www.gnu.org/copyleft/gpl.html  GNU GPL Version 2
 * @version    $Id$ 0.1.3
 * @link       http://www.teknologiaplaneetta.com
 */ 


require('config.inc.php');
require_once 'Zend/Config.php';
$config = new Zend_Config($configArray);
$url_prefix = $config->urlprefix;
define($config->security->secretkey, null);
require('includes/db.php');
include ('includes/functions.php');
if (!isset($_GET['layout'])) {$_GET['layout']
 = $config->defaultlayout;} // IMPORTANT!!!!!
if (!isset($_GET['lang'])) {$_GET['lang']
 = $config->defaultlang;} // IMPORTANT!!!!!

if (file_exists('languages/'.$_GET['lang'].'.php')) 
{ include ('languages/'.$_GET['lang'].'.php'); }
else { $_GET['lang'] = $config->defaultlang;
include ('languages/'.$config->defaultlang.'.php'); }

include ('includes/login.php');

if (file_exists('templates/'.$_GET['layout']
.'/login.php')) 
{ include ('templates/'.$_GET['layout']
.'/login.php'); }
else { $_GET['layout'] = $config->defaultlayout;
include ('templates/'.$config->defaultlayout
.'/login.php'); }

?>