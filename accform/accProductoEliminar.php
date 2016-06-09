<?php
include("../librerias.php");
$oPro=new Producto();
foreach ($_POST as $id){
	$oPro->Elimina($id);	
};
?>

<script>
	document.location.href="<?=PATHURL?>frmDelOferta.php";
</script>