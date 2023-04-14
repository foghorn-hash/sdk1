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
<!-- loading screen -->
<script type="text/javascript">
document.writeln('<div id="myelementid" style="z-index: 500; position: fixed;">');
document.writeln('<img src="templates/images/loading.gif" alt="loading" style="position: fixed; left: 50%; top: 50%;" />');
document.writeln('<div style="z-index: 500; position: fixed; left: 0px; top: 0px; width:100%; height: 100%; background-color:#000000; -moz-opacity: 0.6; opacity:.60; filter: alpha(opacity=60);"></div>');
document.write("</div>");
</script>
<!-- loading screen -->