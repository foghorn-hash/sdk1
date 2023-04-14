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

echo "<script type=\"text/javascript\" src=\""
.$url_prefix."es/includes/js/moo.fx/scripts/prototype.lite.js\"></script>\n
<script type=\"text/javascript\" src=\""
.$url_prefix."es/includes/js/moo.fx/scripts/moo.fx.js\"></script>\n
<script type=\"text/javascript\" src=\""
.$url_prefix."es/includes/js/moo.fx/scripts/moo.fx.pack.js\"></script>
\n\n

<script type=\"text/javascript\">
	\n\n

	//the main function, call to the effect object \n
	function init(){
	\n\n
	
		var stretchers = document.getElementsByClassName('stretcher'); //div that stretches \n
		var toggles = document.getElementsByClassName('display'); //h3s where I click on
         \n\n
		//accordion effect \n
		var myAccordion = new fx.Accordion( \n
		\n	toggles, stretchers, {opacity: true, duration: 400}
		);
		\n\n
		//hash function
		\n\n
		function checkHash(){ \n
			var found = false; \n
			toggles.each(function(h3, i){ \n
				if (window.location.href.indexOf(h3.title) > 0) { \n
					myAccordion.showThisHideOpen(stretchers[i]); \n
					found = true; \n
				} \n
			}); \n
			return found; \n
		} \n \n
		
		if (!checkHash()) myAccordion.showThisHideOpen(stretchers[0]); \n
	} \n \n
	
	</script> \n";

?>



<script type="text/javascript">

//based on prototype's ajax class
//to be used with prototype.lite, moofx.mad4milk.net.

ajax = Class.create();
ajax.prototype = {
	initialize: function(url, options){
		this.transport = this.getTransport();
		this.postBody = options.postBody || '';
		this.method = options.method || 'get';
		this.onComplete = options.onComplete || null;
		this.update = $(options.update) || null;
		this.request(url);
	},

	request: function(url){
		this.transport.open(this.method, url, true);
		this.transport.onreadystatechange = this.onStateChange.bind(this);
		if (this.method == 'get') {
			this.transport.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			if (this.transport.overrideMimeType) this.transport.setRequestHeader('Connection', 'close');
		}
		this.transport.send(this.postBody);
	},

	onStateChange: function(){
		if (this.transport.readyState == 4 && this.transport.status == 200) {
			if (this.onComplete) 
				setTimeout(function(){this.onComplete(this.transport);}.bind(this), 10);
			if (this.update)
				setTimeout(function(){this.update.innerHTML = '';}.bind(this), 10);
			this.transport.onreadystatechange = function(){};
		}
	},

	getTransport: function() {
		if (window.ActiveXObject) return new ActiveXObject('Microsoft.XMLHTTP');
		else if (window.XMLHttpRequest) return new XMLHttpRequest();
		else return false;
	}
};
</script>

<?php 
    if (isset($_SESSION['sid'])) {
	echo "\n <script type=\"text/javascript\"> \n
		function myFunction(request){ \n
		} \n
		window.onload = function(){ \n
			new ajax('logged.php?module=".$_GET['module']."&task=".$_GET['task']."&id="
			.$_GET['id']."&xid=".$_GET['xid']."&subtask=".$_GET['subtask']."&yid="
			.$_GET['yid']."&zid=".$_GET['zid']."&layout=".$_GET['layout']."&lang="
			.$_GET['lang']."', {postBody: 'sleep=3', update: $('myelementid'), onComplete: myFunction}); \n
		} \n
     </script> \n ";
	 } else {
	 if (!isset($_GET['layout'])) { $_GET['layout'] = $config->defaultlayout; }
	 if (!isset($_GET['lang'])) { $_GET['lang'] = $config->defaultlang; }
	 	echo "\n <script type=\"text/javascript\"> \n
		function myFunction(request){ \n
		} \n
		window.onload = function(){ \n
			new ajax('index.php?layout=".$_GET['layout']."&lang=".$_GET['lang']."', {postBody: 'sleep=3', update: $('myelementid'), onComplete: myFunction}); \n
		} \n
     </script> \n ";
	 }
	// tabpane
echo "\n<script type=\"text/javascript\" src=\"".$url_prefix
."es/includes/js/tabpane/js/tabpane.js\"></script>\n<link type=\"text/css\" rel=\"StyleSheet\" href=\""
.$url_prefix."es/templates/".$_GET['layout']."/css/tabpane.css\" />\n";
	// end 
 ?>