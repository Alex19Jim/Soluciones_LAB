<?php
require_once 'conexion.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre_completo = limpiarDatos($_POST["nombape"]);
    $correo = limpiarDatos($_POST["corelec"]);
    $mensaje = limpiarDatos($_POST["mensaje"]);
    $celular = limpiarDatos($_POST["numcel"]);
    $sql = "INSERT INTO trabajadores (nombre_completo,correo,mensaje,celular) VALUES(?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre_completo, $correo, $mensaje, $celular]);
    echo '<script>alert("Gracias por registrarte");</script>'; 
    echo '<script>window.location.href = "inicio.html";</script>';
exit();
} 
function limpiarDatos($data){
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
}

?>