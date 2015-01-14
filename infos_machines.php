<?php
session_start();
$total = shell_exec("free |grep -i 'Mem'|awk '{ print $2}'");
$used = shell_exec("free |grep -i 'Mem'|awk '{ print $3}'");
$div_100=$total/100;
$pourcentage=($used/$div_100)*2;
$moyennepourcentage = round ($pourcentage/2);
//echo '<div id="infos_machine_gauche">';
echo '<br/>';

echo '<div style="margin-left:10px;width:50px;float:left;">ram</div>';


echo '<div style="float:left;background-color:white;width:200px;height:20px;border:1px solid black;">';
echo '<div style="background-color:#B18904;width:'.$pourcentage.'px;height:20px"></div>';
echo '</div>';
echo $moyennepourcentage.'%';
echo '<br/>';
echo '<br/>';
// proc
$nb_procs = shell_exec("cat /proc/cpuinfo | grep processor | wc -l");
$nb_procs = $nb_procs-1;

for($nb=0;$nb<=$nb_procs;$nb++){
if (!isset($_SESSION['prev_idle'.$nb]) && !isset($_SESSION['prev_total'.$nb])) {
  $_SESSION['prev_total'.$nb] = 0;
  $_SESSION['prev_idle'.$nb]=0;
}

$proc= shell_exec("sed -n 's/^cpu".$nb."\s//p' /proc/stat");

$vars = explode(" ", $proc);
$total=0;
for($i=0;$i<=9;$i++){
$total=$total+$vars[$i];
}
if (is_numeric($_SESSION['prev_idle'.$nb]) && is_numeric($_SESSION['prev_total'.$nb]) ) {
$diff_iddle=$vars[3]-$_SESSION['prev_idle'.$nb];
$diff_total=$total-$_SESSION['prev_total'.$nb];
}
$DIFF_USAGE=(100*($diff_total-$diff_iddle)/$diff_total)*2;
  $_SESSION['prev_idle'.$nb]=$vars[3];
  $_SESSION['prev_total'.$nb]=$total;
echo '<div style="margin-left:10px;width:50px;float:left;">core'.$nb.'</div>';
echo '<div style="float:left;background-color:white;width:200px;height:20px;border:1px solid black;">';
echo '<div style="background-color:#5858FA;width:'.$DIFF_USAGE.'px;height:20px"></div>';
echo '</div>';
$moyennepourcentage_diff_usage = round ($DIFF_USAGE/2);
echo $moyennepourcentage_diff_usage.'%';
echo '<br/>';
echo '<br>';
}

?>

