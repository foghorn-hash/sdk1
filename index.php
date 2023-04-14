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

require_once ('es/config.inc.php');
require_once 'Zend/Config.php';
$config = new Zend_Config($configArray);
header('Location: '.$url_prefix.'es/'); 


?>