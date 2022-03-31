<?php
$conexion = mysqli_connect("localhost", "root", "9804", "db_prueba");
if (!$conexion) {
    echo 'Opps error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos';
}
