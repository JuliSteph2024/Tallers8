<?php
if (isset($_POST['edades'])) {
    $edades = $_POST['edades'];
    
    function calcularPromedio($edades) {
        return array_sum($edades) / count($edades);
    }

    echo "La edad promedio es: " . calcularPromedio($edades);
} else {
    echo "No se recibieron edades.";
}
?>