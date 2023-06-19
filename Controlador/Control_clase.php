<?php

$flag = $_GET['flag'];
$descripcionA = "";
$descripcionB = "";

if ($flag == "a") {
    header("Location: ../Vistas/clase_UnirPalabras.html?descripcion=$descripcionA");
} else if ($flag == "b") {
    header("Location: ../Vistas/clase_SumarCirculos.html?descripcion=$descripcionB");
} else {
    header('Location: ../Vistas/');
}
