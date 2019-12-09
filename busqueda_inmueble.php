<?php

include('busqueda.php');
include('class/class_Db.php');


$datos = $_POST['datos'];
$precio_minimo = $_POST['precio_minimo'];
$precio_maximo = $_POST['precio_maximo'];
$recamaras = $_POST['recamaras'];
$baños = $_POST['baños'];



$inmueble = new Operaciones;

// Código para búsquedas por Ciudad y Estado, o CP

$b_inmueble = $inmueble->busqueda_inmueble($mysqli,$estado,$ciudad,$codigo_postal,$precio_minimo,$precio_maximo,$recamaras,$baños);

echo "<br> Número de casas: " . count($b_inmueble);

for ($i=0; $i<count($b_inmueble);$i++){
    echo "<br> Calle: " .$b_inmueble[$i]->getCalle();
    echo "<br> ID: " . $b_inmueble[$i]->get_id_casa($mysqli);
}

$rango = $casas->rango_precios($mysqli);
echo "De: " . $rango[0] . " a " . $rango[1];


