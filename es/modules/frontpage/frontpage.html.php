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

startprototype(1);

startupdowntab ('view1', "1", '', '');
echo "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
In venenatis. Nulla fringilla accumsan odio. Aenean lacinia. 
Fusce vestibulum accumsan mi. Maecenas a sapien et ligula 
ullamcorper suscipit. Vivamus augue enim, eleifend posuere, 
convallis sed, porttitor a, sapien. Vestibulum varius mauris 
eu nisl. Donec porta pulvinar dui. Vestibulum facilisis 
ultricies orci. In scelerisque ipsum vel eros. Praesent nisi. 
Nam sit amet libero vitae ipsum scelerisque fermentum. Duis leo 
turpis, posuere vehicula, suscipit sed, eleifend luctus, ipsum. 
Nam purus. Class aptent taciti sociosqu ad litora torquent per 
conubia nostra, per inceptos hymenaeos. Etiam velit dui, blandit 
vitae, tempor ac, adipiscing ac, lectus.";
endupdowntab();

startupdowntab ('view2', "2", '', '');
echo "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
In venenatis. Nulla fringilla accumsan odio. Aenean lacinia. 
Fusce vestibulum accumsan mi. Maecenas a sapien et ligula 
ullamcorper suscipit. Vivamus augue enim, eleifend posuere, 
convallis sed, porttitor a, sapien. Vestibulum varius mauris 
eu nisl. Donec porta pulvinar dui. Vestibulum facilisis ultricies 
orci. In scelerisque ipsum vel eros. Praesent nisi. Nam sit amet 
libero vitae ipsum scelerisque fermentum. Duis leo turpis, posuere 
vehicula, suscipit sed, eleifend luctus, ipsum. Nam purus. Class 
aptent taciti sociosqu ad litora torquent per conubia nostra, per 
inceptos hymenaeos. Etiam velit dui, blandit vitae, tempor ac, 
adipiscing ac, lectus.";
endupdowntab();

startupdowntab ('view3', "3", '', '');
echo "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
In venenatis. Nulla fringilla accumsan odio. Aenean lacinia. Fusce 
vestibulum accumsan mi. Maecenas a sapien et ligula ullamcorper 
suscipit. Vivamus augue enim, eleifend posuere, convallis sed, 
porttitor a, sapien. Vestibulum varius mauris eu nisl. Donec porta 
pulvinar dui. Vestibulum facilisis ultricies orci. In scelerisque 
ipsum vel eros. Praesent nisi. Nam sit amet libero vitae ipsum 
scelerisque fermentum. Duis leo turpis, posuere vehicula, suscipit 
sed, eleifend luctus, ipsum. Nam purus. Class aptent taciti sociosqu 
ad litora torquent per conubia nostra, per inceptos hymenaeos. 
Etiam velit dui, blandit vitae, tempor ac, adipiscing ac, lectus.";
endupdowntab();

startupdowntab ('view4', "4", '', '');
echo "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
In venenatis. Nulla fringilla accumsan odio. Aenean lacinia. Fusce 
vestibulum accumsan mi. Maecenas a sapien et ligula ullamcorper 
suscipit. Vivamus augue enim, eleifend posuere, convallis sed, porttitor 
a, sapien. Vestibulum varius mauris eu nisl. Donec porta pulvinar 
dui. Vestibulum facilisis ultricies orci. In scelerisque ipsum vel 
eros. Praesent nisi. Nam sit amet libero vitae ipsum scelerisque 
fermentum. Duis leo turpis, posuere vehicula, suscipit sed, eleifend 
luctus, ipsum. Nam purus. Class aptent taciti sociosqu ad litora torquent 
per conubia nostra, per inceptos hymenaeos. Etiam velit dui, blandit 
vitae, tempor ac, adipiscing ac, lectus.";
endupdowntab();

startupdowntab ('close', 'X', '', '');
endupdowntab();

endprototype(1);

?>

