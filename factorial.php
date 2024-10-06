<?php
if (isset($_POST['numero'])) {
    $n = intval($_POST['numero']);

    function factorial($n) {
        if ($n < 0) return "Error: No se puede calcular el factorial de un número negativo.";
        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    echo "El factorial de $n es: " . factorial($n);
} else {
    echo "No se recibió un número.";
}
?>