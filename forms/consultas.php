<?php
$html = "";
if ($_POST["idActividades"]==1) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["Actividad"]." ".$row["Actividad"]."</option>";	
}
if ($_POST["idActividades"]==2) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["idActividades"]." ".$row["Actividad"]."</option>";
}
if ($_POST["idActividades"]==3) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["idActividades"]." ".$row["Actividad"]."</option>";
}
if ($_POST["idActividades"]==4) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["idActividades"]." ".$row["Actividad"]."</option>";	
}

echo $html;	
?>