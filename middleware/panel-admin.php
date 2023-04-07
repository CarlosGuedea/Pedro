<?php
//Establecer la conexión a la base de datos
$db = new Base;
$conn=$db->ConexionBD();

//Llenar la vista
$stmt = $conn->prepare("SELECT Orden.ID, Usuario.Nombre, Usuario.Email, Descripcion,Fecha_Inicio, Ruta_archivos
FROM Orden
INNER JOIN Usuario
ON Usuario.ID = Orden.ID_Usuario");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $conn->prepare("SELECT * FROM Usuario");
$stmt2->execute();
$resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
