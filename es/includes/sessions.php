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

if (!defined($config->security->secretkey)) { die("Please use index.php!"); }

// session start
session_start();
$sid = session_id();
define($sid, null);
$_SESSION['id'] = $config->security->id;
$_SESSION['sid'] = $sid;
if (isset($_SESSION['sid']) && isset($_SESSION['id'])) { 
if ($_SESSION['sid'] != $sid || $_SESSION['id'] != $config->security->id) 
{ 
session_destroy();
redirect ("index.php"); 
# Exit is important
ob_clean();
exit();
}
}

if (!isset($_SESSION['sid'])) { 
session_destroy();
redirect ("index.php");
# Exit is important
ob_clean();
exit(); 
}

?>