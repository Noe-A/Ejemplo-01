<?php
$codigo= $_POST['carrera'];
switch ($codigo) {
    case 'CI':
        echo "Carrera de Computación e Informática";
        break;
    case 'C':
        echo "Carrera de Contabilidad";
        break;
    case 'ET':
        echo "Carrera de Enfermeria Técnica";
        break;
    default:
        echo "No EXISTE ese Código de Carrera";
        break;
}
?>