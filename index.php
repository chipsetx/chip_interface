<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Positionnement CSS</title>
<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
  function ()
  {
    $('#infos_machines_gauche').load('infos_machines.php').fadeIn("slow");
  }, 500); // rafraichis toutes les 10000 millisecondes
var auto_refresh2 = setInterval(
  function ()
  {
    $('#infos_machines_droite').load('infos_machines2.php').fadeIn("slow");
  }, 1000); // rafraichis toutes les 10000 millisecondes

</script>

</head>
<body>
<div id="page">
	<div id="bandeau">
		<div id="barre"> user </div>
		<img src="images/logo.png" style="display:block;border:0px;width:150px;max-height:300px;" alt="">
		<div id="barre"> <center>Chip interface</center> </div>
	</div>
	<div id="menu">
		<div id="barre"> Machines </div>

		<div id="machines_list">
                       
                        <div id="bouton_vm_clicker">
                        <img src="images/ubuntu_gray.jpeg" style="display:block;border:0px;width:50px;max-height:150px;" alt="">
                        </div>
                        <div id="petite_barre"></div>
			<div id="bouton_vm"> 
			<img src="images/windows.jpeg" style="display:block;width:50px;max-height:150px;" alt="">
			</div>
			<div id="petite_barre"></div>
			<div id="bouton_vm">
			<img src="images/debian.jpeg" style="display:block;border:0px;width:50px;max-height:150px;" alt="">
			</div>
			<div id="petite_barre"></div>
			<div id="bouton_vm">
			<img src="images/debian.jpeg" style="display:block;border:0px;width:50px;max-height:150px;" alt="">
			</div>
			<div id="petite_barre"></div>
                        <div id="bouton_vm">			
			<img src="images/windows.jpeg" style="display:block;border:0px;width:50px;max-height:150px;" alt="">
			</div>
			<div id="petite_barre"></div>
		 </div>
		<div id="ajout_vm">
		<img src="images/ajouter_vm.png" style="width:30px;height:30px;">
		</div> 
		<div id="nav_vms">< 1 2 3 ></div>
		<br/>
		<br/>
		<div id="barre"> Sites </div>
                
<table>
   <tr>
       <td>Carmen</td>
   </tr>
   <tr>
       <td>Michelle</td>
   </tr>
</table>
	<div id="ajout_vm">
		<img src="images/ajouter_vm.png" style="width:30px;height:30px;">
		</div> 
		<div id="nav_vms">< 1 2 3 ></div>
                <br/>                <br/>
                <div id="barre"> Applications </div>
<table>
   <tr>
       <td>PXE</td>
   </tr>
   <tr>
       <td>VPN</td>
   </tr>
   <tr>
       <td>Depot</td>
   </tr>
   <tr>
       <td>File gestion</td>
   </tr>
   <tr>
       <td>Torrent</td>
   </tr>
   <tr>
       <td>FTP</td>
   </tr>
</table>


	<div id="ajout_vm">
		<img src="images/ajouter_vm.png" style="width:30px;height:30px;">
		</div> 
		<div id="nav_vms">< 1 2 3 ></div>
                <br/>                <br/>
	</div>

	<div id="contenu">
		<div id="infos_machines_gauche"></div>
		<div id="infos_machines_droite"></div>
		
	</div>
	<div id="pied_page">		
		<div id="barre"> </div>

	</div>
</div>
</body>
</html>
