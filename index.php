<?php
 $titulo=null;
 $a=0;
 $b=5;
?>
<html>
<meta charset="utf8">
<title><?=$titulo;?></title>
<link type="text/css" rel="stylesheet" href="estilo.css" >
<body>

<?php
/*
Primer codigo de prueba
*/
if(isset($titulo)){
if($titulo!=null){
	echo "Hola Mundo";
}
else{
	echo "Algo sucedio";
}
}

$a=$b;
$b++;

echo "El valor de la variable a=$a y el de b=$b";
?>
<ul>
<?php
for($i=0;$i<$b;$i++){
	echo "<li>Hola mundo $i</li>\n";
}
?>
</ul>

<h1>OTRA FORMA DE HACER LO MISMO</h1>

<ul>

<?php for($i=0;$i<$b;$i++){ ?>
<li><?="Hola mundo $i\n";}?></li>
<?php}?>
</ul>
<h1>VINCULOS</h1>
<h2> TAG "a"</h2>
<a href="pagina1.php">Link a mi página 01</a>
<a href="pagina2.php">Link a mi página 02</a>
</body>
</html>