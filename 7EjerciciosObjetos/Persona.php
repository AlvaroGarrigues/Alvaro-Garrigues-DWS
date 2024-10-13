<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 clases</title>
</head>
<body>
    <h1>Ejercicio Persona</h1>
    <?php

    class Persona {

        private $dni = "";
        private $nombre = "";
        private $email = "";

        public function __construct($d, $n, $e) {
            $this->dni = $d;
            $this->nombre = $n;
            $this->email = $e;
        }

        public function setDni($newDni) {
            $this->dni = $newDni;
        }

        public function setNombre($newNombre) {
            $this->nombre = $newNombre;
        }

        public function setEmail($newEmail) {
            $this->email = $newEmail;
        }

        public function getDni() {
            return $this->dni;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getEmail() {
            return $this->email;
        }

        public function mostrarPersona() {
            echo "Esta persona tiene dni: " . $this->dni . " - nombre: " . $this->nombre . " - y email: " . $this->email . "<br>";
        }
    }

    class Estudiante extends Persona {

        private $numExpediente;
        
        public function __construct($d, $n, $e, $ne) {
            parent::__construct($d,$n,$e);
            $this->numExpediente = $ne;
        }

        public function setNumExpediente($newNe) {
            $this->numExpediente = $newNe;
        }

        public function getNumExpediente() {
            return $this->numExpediente;
        }

        public function mostrarEstudiante() {
            parent::mostrarPersona();
            echo "- numExpediente: " . $this->numExpediente . "<br>";
        }
    }

    $p1 = new Persona("12345678W", "Alvaro", "alv@gmail.com");
    $e1 = new Estudiante("12345678S", "Sara", "sar@gmail.com", 2);

    $p1->mostrarPersona();
    $e1->mostrarEstudiante();

    $p1->setNombre("Wimbeldon");
    $e1->setDni("20807090S");

    $p1->mostrarPersona();
    $e1->mostrarEstudiante();

    ?>
</body>
</html>