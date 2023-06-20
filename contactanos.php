<?php
require_once 'conexion.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre_completo = limpiarDatos($_POST["nombape"]);
    $correo = limpiarDatos($_POST["corelec"]);
    $mensaje = limpiarDatos($_POST["mensaje"]);
    $sql = "INSERT INTO contactanos (nombre_completo,correo,mensaje) VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre_completo, $correo, $mensaje,]);
    echo '<script>alert("NOS CONTACTAREMOS CONTIGO MUY PRONTO");</script>'; 
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