<?php
$html = "";
if ($_POST["idActividades"]==1) {
	$html = '<option value="<?php echo $row['idActividades']; ?> " ><?php echo $row['Actividad'];?></option>';	
}
if ($_POST["idActividades"]==2) {
	$html = '<option value="<?php echo $row['idActividades']; ?> " ><?php echo $row['Actividad'];?></option>';	
}
if ($_POST["idActividades"]==3) {
	$html = '<option value="<?php echo $row['idActividades']; ?> " ><?php echo $row['Actividad'];?></option>';	
}
if ($_POST["idActividades"]==4) {
	$html = '<option value="<?php echo $row['idActividades']; ?> " ><?php echo $row['Actividad'];?></option>';	
}

echo $html;	
?>