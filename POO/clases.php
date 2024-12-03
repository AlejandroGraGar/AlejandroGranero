<?php 


class Persona {
    private $dni;
    private $nombre;
    private $email;

    public function __construct($dni, $nombre, $email) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function __toString() {
        $cadena = 'DNI: ' . $this->dni . '</br>';
        $cadena .= 'Nombre: ' . $this->nombre . '</br>';
        $cadena .= 'Email: ' . $this->email .'</br>';
        return $cadena;    }
}

class Estudiante extends Persona {
    private $numExpediente;

    public function __construct($dni, $nombre, $email, $numExpediente) {
        parent::__construct($dni, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }

    public function getNumExpediente() {
        return $this->numExpediente;
    }

    public function setNumExpediente($numExpediente) {
        $this->numExpediente = $numExpediente;
    }

    public function __toString() {
        $cadena = parent::__toString();
        $cadena .= 'Numero de Expediente: '. $this->numExpediente;
        return $cadena;
    }
}


?>