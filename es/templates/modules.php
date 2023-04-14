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
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">
<h1><?php echo $lang[$_GET['module']] ?></h1>
<?php echo WELCOME; ?>, <?php echo $user; ?>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
	<!-- left align -->
	<div align="left">
	
	<?php if (file_exists('modules/'.$_GET['module'].'/'.$_GET['module'].'.html.php')) 
	{ include ('modules/'.$_GET['module'].'/'.$_GET['module'].'.html.php'); } 
	else { include ('modules/error/error.html.php'); } ?>
	
	</div>
	<!-- left align -->
	</td>
  </tr>
</table>
