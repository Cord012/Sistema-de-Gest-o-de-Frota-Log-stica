<?php
declare (strict_types= 1);
require_once 'Veiculo.php';
require_once 'Motorista.php';
require_once 'Viagem.php';

$motorista1 = new Motorista("João Silva", "MG12345678",  "12345678900", "2025-12-31");
$motorista2 = new Motorista("Maria Souza", "MG09876543", "09876543210", "2024-12-31");

$veiculo1 = new Veiculo("Toyota Corolla", "ABC1234", 50.0);
$veiculo2 = new Veiculo("Honda Civic", "XYZ5678", 40.0);

$viagem1 = new Viagem("São Paulo", 200.0, $motorista1, $veiculo1);

?>
