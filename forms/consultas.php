<?php
$html = "";
if ($_POST["idActividades"]==1) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST." ".$row["Actividad"]."</option>";	
}
if ($_POST["Actividad"]==2) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["Actividad"]." ".$row["Actividad"]."</option>";
}
if ($_POST["Actividad"]==3) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["Actividad"]." ".$row["Actividad"]."</option>";
}
if ($_POST["Actividad"]==4) {
	$html = "<option value=".$row["idActividades"]." > ".$_POST["Actividad"]." ".$row["Actividad"]."</option>";	
}

echo $html;	
?>