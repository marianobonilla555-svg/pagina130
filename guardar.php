<?php

$conexion = mysqli_connect("localhost","root","","proveedores");

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono_residencial = $_POST['telefono_residencial'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql = "INSERT INTO datos_proveedor
(nombre, direccion, telefono_residencial, celular, email)

VALUES
('$nombre','$direccion','$telefono_residencial','$celular','$email')";

mysqli_query($conexion, $sql);

echo "Datos guardados correctamente";

?>