<!--
JAGProg
Ejercicios para el aprendizaje

-->

<?php
// obtiene los valores de entrada
$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];
// genera la cadena de caracteres RGB para los datos de entrada
$rgb = $r . ',' . $g . ',' . $b;
?>
R: <?php echo $r; ?>
G: <?php echo $g; ?>
B: <?php echo $b; ?>
<p />
<div style="width:150px; height: 150px;
background-color: rgb(<?php echo $rgb; ?>)" />
<br \><br \>
<br \><br \>
<br \><br \>
<br \><br \>
<br \><br \>
<div>
	<a href='mostrario.html'>volver</a>
</div>					
