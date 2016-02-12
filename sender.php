<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1"/>
<title>Documento sin título</title>

<style>*{margin:0px; padding:0px; text-align:center; vertical-align:central;}
#my{background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(150,0,2,1)), color-stop(44%,rgba(40,0,6,1)), color-stop(57%,rgba(40,0,6,1)), color-stop(100%,rgba(150,0,2,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(150,0,2,1) 0%,rgba(40,0,6,1) 44%,rgba(40,0,6,1) 57%,rgba(150,0,2,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(150,0,2,1) 0%,rgba(40,0,6,1) 44%,rgba(40,0,6,1) 57%,rgba(150,0,2,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(150,0,2,1) 0%,rgba(40,0,6,1) 44%,rgba(40,0,6,1) 57%,rgba(150,0,2,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(150,0,2,1) 0%,rgba(40,0,6,1) 44%,rgba(40,0,6,1) 57%,rgba(150,0,2,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960002', endColorstr='#960002',GradientType=0 ); /* IE6-9 */ width:100%; height:556px; padding-top:150px;}
a{color:#00C; text-decoration:none; text-shadow:2px 2px 8px white;}
h1{color:white;}
#me{color:white; font-size:24px; text-shadow:1px 1px 9px white;}
</style>

<link rel="icon" type="image/x-icon" href="images/favaxtel.ico" />
</head>

<body>


<?php 

$fecha = date("d-m-Y");
$hora = date("H:i:s");
$destino = 'soporte@axtelweb.com';
$asunto = " AXTELWEB ";
$desde =  'From: ' .$_POST[email];
$comentario = "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Telefono: $_POST[telefono]\n
Peticion: $_POST[mensaje]\n
Enviado: $fecha alas $hora\n

\n
";
mail($destino, $asunto, $comentario, $desde)


?> 

<div id="my"><p id="me">TU MENSAJE HA SIDO ENVIADO SATISFACTORIAMENTE</p><br><br>
<h1>Gracias por elegir Axtelweb. Analizaremos tu solicitud y en breve nos pondremos en contacto contigo.</h1><br><br><br>
<H2><a  href="index.html">REGRESAR</A> </H1>

</div>
</body>
</html>