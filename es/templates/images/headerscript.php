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

if (!defined($secretkey)) { die("Please use index.php!"); } 

echo "<script type=\"text/javascript\" "
."src=\"".$url_prefix."es/includes/js/mootools/js/"
."mootools.v1.1.1.js\"></script> \n\n";

?>



<?php 
    if (isset($_SESSION['sid'])) {
	echo "\n <script type=\"text/javascript\"> \n
				
				
		window.onload = function(e){ \n
		
		

			
				e = new Event(e).stop();
 
	var url = \"".$url_prefix."es/logged.php?module="
	.$_GET['module']."&task=".$_GET['task']."&id="
	.$_GET['id']."&xid=".$_GET['xid']."&subtask="
	.$_GET['subtask']."&yid=".$_GET['yid']."&zid="
	.$_GET['zid']."&layout=".$_GET['layout']."&lang="
	.$_GET['lang']."\";"
 
	."/**"
	."* The simple way for an Ajax request, "
	 ."use onRequest/onComplete/onFailure"
	."* to do add your own Ajax depended code."
	 ."*/ \n"
	."\n new Ajax(url, {"
	."		method: \"get\", "
	."	clean: $(\"myelementid\")"
	." }).request(); "
	
		."} \n"
     ."</script> \n "; }
	// tabpane
echo "\n<script type=\"text/javascript\" src=\""
.$url_prefix."es/includes/js/tabpane/js/tabpane.js\">"
."</script>\n<link type=\"text/css\" rel=\"StyleSheet\" href=\""
.$url_prefix."es/templates/".$_GET['layout']."/css/tabpane.css\" />\n";
	// end 
 ?>