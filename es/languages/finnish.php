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

define("USERNAME", "K�ytt�j�tunnus", true); 
define("PASSWORD", "Salasana", true); 
define("TEMPLATE", "Ulkoasu", true); 
define("LOGINFORM", "Kirjautumislomake", true); 
define("LANGUAGE", "Kieli", true); 
define("LOGIN", "Kirjaudu!", true);
define("USER", "K�ytt�j�", true);
define("NOPASS", "Salasana tai k�ytt�j�tunnus on v��rin!", true);
define("WELCOME", "Tervehdys", true);

?>
