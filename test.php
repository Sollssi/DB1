<?php
echo "hola mundo\n";
echo "Probando 1 2 3\n";
$variable = "Sol";
echo "La variable es: $variable\n";
$mi_array = ["manzana", "banana", "naranja"];
print_r($mi_array); // Muestra el arreglo correctamente
$mi_array_asociativo = [
    "nombre" => "Juan",
    "edad" => 30
];
echo $mi_array_asociativo["nombre"] . "\n";
class Persona {
    public $nombre;
    public $edad;
    public function saludar() {
        echo "Hola, soy $this->nombre\n";
    }
}
$mi_persona = new Persona();
$mi_persona->nombre = "Juan";
$mi_persona->edad = 30;
$mi_persona->saludar();

$persona[0] = ["apellido" => "Ormeño", "nombre" => "Emilio", "edad" => 30];
$persona[1] = ["apellido" => "Scheffer", "nombre" => "Maru", "edad" => 15];
$persona[2] = ["apellido" => "Gonzalez", "nombre" => "Juan", "edad" => 25];
$persona[3] = ["apellido" => "Varela", "nombre" => "Martín", "edad" => 18];

foreach ($persona as $p) {
    if ($p["edad"] >= 20){
        echo $p["nombre"] . " " . $p["apellido"] . " tiene " . $p["edad"] . " años\n";
    }
}