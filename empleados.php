<?php
$empleados = array(
    array("nombre" => "Julia", "cargo" => "Diseñadora"),
    array("nombre" => "Sofia", "cargo" => "Gerente"),
    array("nombre" => "Daniel", "cargo" => "Desarrollador"),
    array("nombre" => "Pedro", "cargo" => "Marketing"),
    array("nombre" => "Luis", "cargo" => "Ventas"),
);

echo "<ul class='list-group'>";
foreach ($empleados as $empleado) {
    echo "<li class='list-group-item'>Nombre: " . $empleado["nombre"] . ", Cargo: " . $empleado["cargo"] . "</li>";
}
echo "</ul>";
?>