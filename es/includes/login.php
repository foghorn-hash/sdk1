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
session_start();
$sid = session_id();
define($sid, null);
if (isset($_POST['Login!'])) { 

	$username = $_POST['username'];
	$password = md5($_POST['password']);

$result = $db->fetchRow(
    "SELECT * FROM ".$config->database->dbprefix
	."_users WHERE username = :username "
	."AND password = :password",
    array('username' => $username, 
	'password' => $password)
);


	if($password == $result['password'] 
	&& $username == $result['username'] 
	&& $result['active'] == 1)
	
		{
		$_SESSION['user'] = $result['username'];
		redirect ("logged.php?"
		."&module=frontpage&task=none&id=0&xid=0"
		."&subtask=default&yid=0&zid=0&layout="
		.$_GET['layout']."&lang=".$_GET['lang']);
	    }
		
		else { $msg = NOPASS; }
		
}

?>