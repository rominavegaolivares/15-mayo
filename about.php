<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Desde pequeños nos vemos rodeados de medios digitales que muchas veces reproducen contenidos que reflejan opiniones, muchas veces conservadoras, de la sociedad. Dichos contenidos influyen en la construcción de ideas y percepciones sobre temáticas importantes en la vida de una persona, como lo es la maternidad. Las mujeres en particular nos vemos rodeadas por juegos, películas y series infantiles que muestran una idealización del hecho de ser madre, provocándonos un sentimiento de obligación de tener hijos.</p>

</section>
<?php include('pie.php');?>
