<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Influencia de los juegos, películas y series infantiles, como reflejo de la sociedad, en el sentimiento de obligación de las mujeres de ser madres.</p>

</section>
<?php include('pie.php');?>
