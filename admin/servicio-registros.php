<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
$sql1= "SELECT @@global.sql_mode; ";
$sql2 = " SET @@global.sql_mode = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'; ";
$sql3 = " SELECT fecha_registro, COUNT(*) AS resultado FROM registrados GROUP BY DATE(fecha_registro) ORDER BY fecha_registro; ";
$conn->query($sql1);
$conn->query($sql2);
$resultado = $conn->query($sql3);
$arreglo_registros = array();

while ($registro_dia = $resultado->fetch_assoc()){
    $fecha = $registro_dia['fecha_registro'];
    $registro['fecha'] = date('Y-m-d', strtotime($fecha));
    $registro['cantidad'] = $registro_dia['resultado'];
    $arreglo_registros[] = $registro;
}


echo json_encode($arreglo_registros);
