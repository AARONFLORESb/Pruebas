<html>
<head>
<meta charset='UTF-8'>
<title>pRACTICA PHP Aaron</title>
<STYLE type='text/css'>
<title { text-align: center}>
</STYLE>
<link rel='stylesheet' type='text/css'
href='css/bootstrap.min.css'>
<style type='text/ss'>
#cuerpo{
margin: 150px;
}
</style>
</head>
<body>
<body background='fondo.jpg'>
<CENTER>
<?php echo '<h1> Practica 2 inicio de PHP </h1>' ; ?>
<?php echo '<h2> Aaron Flores Bernal  </h2>' ; ?>

<?php echo '<div id="titulo2"><h3> Tipo de datos en php </h3>' ; ?>

<?php
$cero = 5;
$ocho1 = 8;
$ocho = -3;
echo "Cero: $cero <BR>";
echo "0cho: $ocho <BR>";
echo "0cho: $ocho1 <BR>";
?>
<?php echo '<div id="titulo3"><h3> Arreglos en php </h3>' ; ?>
<?php
$MiArray[12] = 'Ingenieria en computacion';
$MiArray[1] = 7121142876;
echo "Mensaje Guardado: $MiArray[12] <BR>";
echo "Numero almecenado de telefono: $MiArray[1] <BR>";
?>
<?php echo '<div id="titulo4"><h3> Estructuras de control </h3>' ; ?>
<?php
if ($cero > $ocho1) {
    echo "$cero es mayor que $ocho1";
} elseif ($cero == $ocho1) {
    echo "$cero es igual que $ocho1";
} else {
    echo "$cero es mayor que $ocho1";
}
?>

<?php echo '<div id="titulo5"><h3> Dias de la semana </h3>' ; ?>
<?php
echo "Hoy es <B>";
$dia =date("D");

if($dia =="Mon"){
	echo "Lunes";
} elseif($dia == "Tue"){
	echo "Martes";
} elseif($dia == "Wed"){
	echo "Mieroles";
} elseif($dia == "Thu"){
	echo "Jueves";
} elseif($dia == "Fri"){
	echo "Viernes";
} elseif($dia == "Sat"){
	echo "sabado";
} else {
	echo "Domingo";
}
echo "</B>";
?>
</CENTER>
</body>
</html>


