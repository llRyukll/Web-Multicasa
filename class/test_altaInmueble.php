<?php
include("class_inmueble_dal.php");

$encabezado = $_POST["encabezado"];
$descripcion = $_POST["descripcion"];
$direccion = $_POST["direccion"];
$codigoPostal = $_POST["codigoPostal"];
$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];
$costo = $_POST["costo"];
$recamaras = $_POST["recamaras"];
$baños = $_POST["baños"];
$estacionamientos = $_POST["estacionamientos"];
$area = $_POST["area"];
$email = $_POST["email"];
$latitud = $_POST["latitud"];
$longitud = $_POST["longitud"];
//Rutas  donde se guardaran las imagenes
$target_dir = "../uploads/";
$imagen=$_FILES["exterior"]["tmp_name"];
echo $imagen;
$target_file = $target_dir . basename($_FILES["exterior"]["name"]);
$tipoarchivoexterior = strtolower(pathinfo($_FILES["exterior"]["name"],PATHINFO_EXTENSION));
$tipoarchivointerior1 = strtolower(pathinfo($_FILES["interior1"]["name"],PATHINFO_EXTENSION));
$tipoarchivointerior2 = strtolower(pathinfo($_FILES["interior2"]["name"],PATHINFO_EXTENSION));
$rutaexterior = $target_dir . $encabezado . "_1." . $tipoarchivoexterior; 
$rutainterior1 = $target_dir . $encabezado . "_2." . $tipoarchivointerior1;
$rutainterior2 = $target_dir . $encabezado . "_3." . $tipoarchivointerior2; 

$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["exterior"]["tmp_name"]);
    $check2 = getimagesize($_FILES["interior1"]["tmp_name"]);
    $check3 = getimagesize($_FILES["interior2"]["tmp_name"]);
    if($check !== false && $check2 !== false && $check3 !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($rutaexterior) == true || file_exists($rutainterior1) == true || file_exists($rutainterior2) == true) {
    echo '<script type="text/javascript">';
    echo 'alert("Un archivo de imagen ya existe")';
    echo '</script>';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["exterior"]["size"] > 500000 || $_FILES["interior1"]["size"] > 500000 || $_FILES["interior2"]["size"] > 500000) {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo de imagen del exterior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
// Allow certain file formats
if($tipoarchivoexterior != "jpg" && $tipoarchivoexterior != "png" && $tipoarchivoexterior != "jpeg" ) {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
elseif($tipoarchivointerior1 != "jpg" && $tipoarchivointerior1 != "png" && $tipoarchivointerior1 != "jpeg") {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo 1 de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
elseif($tipoarchivointerior2 != "jpg" && $tipoarchivointerior2 != "png" && $tipoarchivointerior2 != "jpeg") {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo 2 de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["exterior"]["tmp_name"], $rutaexterior)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["interior1"]["tmp_name"], $rutainterior1)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["interior2"]["tmp_name"], $rutainterior2)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
//Creacion de objetos para el insert
$estatus = "En venta";
$obj = new inmueble($encabezado,$descripcion,$direccion,$costo,$recamaras,$baños,$estacionamientos,$estatus,$ciudad,$estado,$codigoPostal,$area,$email,$latitud,$longitud,$rutaexterior,$rutainterior1,$rutainterior2);
$obj2 = new inmueble_dal(); 
$resultado = $obj2->insertar($obj);
if($resultado == 1){
    echo '<script type="text/javascript">';
    echo 'alert("Inmueble Registrado!")';
    echo '</script>';
    header('refresh:0; ../inicio_publico.php');
}
else{
    echo '<script type="text/javascript">';
    echo 'alert("Ocurrio un error al registrar el Inmueble")';
    echo '</script>';
    header('refresh:0; ../inicio_publico.php');
}
?>