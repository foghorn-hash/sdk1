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

require_once 'Zend/Db.php';

$params = array ('host'     => $config->database->dbhost,
                 'username' => $config->database->dbuser,
                 'password' => $config->database->dbpasswd,
                 'dbname'   => $config->database->database);

$db = Zend_Db::factory($config->database->type, $params); 

?>