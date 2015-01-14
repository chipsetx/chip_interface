<?php
session_start();

function get_hdd_use($device) {
	$total = shell_exec("df |grep ".$device."|awk '{print $2}'");
	$used = shell_exec("df |grep ".$device."|awk '{print $3}'");
	$div_100=$total/100;
	$pourcentage=($used/$div_100)*2;
	$moyennepourcentage = round ($pourcentage/2);
	echo '<br/>';
	echo '<div style="margin-left:5px;width:50px;float:left;">'.$device.'</div>';

	echo $moyennepourcentage.'%';
	echo '<div style="float:left;background-color:white;width:200px;height:20px;border:1px solid black;">';
	echo '<div style="background-color:#86B404;width:'.$pourcentage.'px;height:20px"></div>';
	echo '</div>';
	echo '<br/>';
	echo '<br/>';
}

get_hdd_use("sda5");

?>
