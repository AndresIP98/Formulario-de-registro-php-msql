<?php
include 'conexiondb.php';
//Se reciben los datos para almacenarlos
$nombre = $_POST ['nombre'];
$apellidos = $_POST ['apellidos'];
$correo = $_POST ['correo'];
$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];
$telefono = $_POST ['telefono'];
//consulta para insertar
$insertar = "INSERT INTO funcionarios(nombre, apellidos, correo, usuario, clave, telefono) VALUES ('nombre',  apellidos', 'correo', 'usuario', 'clave', 'telefono')";
//ejecutar consulta pasando la conex
$query = mysqli_query($conexion, $insertar);
//si falla
if ($query) {
    echo 'Opps error al registrarse';
    //si funciona
}   else {
    echo 'Usuario registrado correctamente';
}
//cerrar conexion
mysqli_close($conexion);