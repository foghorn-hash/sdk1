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

function startprototype ($sptype) {
global $url_prefix, $links, $lang;
    if (!isset($links)) { $links = ""; }
	if ($sptype == 1){
	echo "\n <div id=\"container\">
	  <div id=\"header\">
	  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"header-td\">
  <tr>
    <td valign=\"middle\">
	  ".$links
	  ."</td>
  </tr>
</table>
	  </div>
      <div id=\"content\">
	\n ";}
}

function endprototype ($eptype) {
if ($eptype == 1){
echo "</div></div> \n <script type=\"text/javascript\">
		Element.cleanWhitespace('content');
		init();
	</script> \n";}
}


function startupdowntab ($suptitle, $stitle, $sstyle, $sclass) {
echo "\n"
.'<h3 class="display" title="'
.$suptitle.'" style="'
.$sstyle.'"><a href="#'.$suptitle
.'" style="'.$sclass.'">'.$stitle
.'</a></h3><div class="stretcher">'
."\n";
}

function endupdowntab () { echo "</div>\n"; }


function starttabpane ($tbtitle) { 
echo "<div class=\"tab-pane\" id=\""
.$tbtitle."\">\n"; }

function endtabpane () { echo "</div>\n"; }

function starttabpage ($tabpage) {
echo "<div class=\"tab-page\">
      <h2 class=\"tab\">".$tabpage."</h2>\n";
}


function endtabpage () { echo "</div>\n"; }

function startsubtabpage ($tabpage) {
echo "<div class=\"tab-page\" style=\"border: "
."0px; padding: 0px; margin: 0px; top: 0px;\">
      <h2 class=\"tab\">".$tabpage."</h2>\n";
}

function endsubtabpage () { echo "</div>\n"; }

function checkallscript () {

echo "\n\n<script language=\"JavaScript\" type=\"text/javascript\"> 
function all(form) { 
\n\n
  for (var i = 1; i < form.elements.length; i++) {    
\n\n
    eval(\"form.elements[\" + i + \"].checked = form.elements[0].checked\");  
\n\n
  } 
\n\n
} \n
</script>\n\n"; 

}

function checkallbox () {
echo "\n<input name=\"aa\" type=\"checkbox\" onClick=\"all(this.form);\" />\n";
}

?>
