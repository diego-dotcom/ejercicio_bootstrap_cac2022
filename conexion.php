<?php

$conexion = mysqli_connect("", "", "", "");

if (mysqli_connect_errno()) {
    echo "Se produjo un error en la conexión a la base de datos";
}
