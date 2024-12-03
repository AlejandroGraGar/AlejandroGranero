<?php
class Player {
    
    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCards;
    private $redCards;

    
    public function __construct($Nombre,$Apellidos,$Fecha,$Pais,$Dorsal,$Posicion,$G, $PJ, $M,$TA,$TR) {
        $fecha_mal = DateTime::createFromFormat('d/m/Y', $Fecha);
        $fecha_format = $fecha_mal->format('Y-m-d');
        $this->name = $Nombre . $Apellidos;
        $this->birthDay = $fecha_format;
        $this->country = $Pais;
        $this->dorsal = $Dorsal;
        $this->position = $Posicion;
        $this->goals = $G;
        $this->matches = $PJ;
        $this->minutes = $M;
        $this->yellowCards = $TA;
        $this->redCards = $TR;
    }

    
    public function getAge() {
        $birthDate = new DateTime($this->birthDay);
        $today = new DateTime();
        $age = $today->diff($birthDate)->y;
        return $age;
    }

    
    public function sumScore() {
        $this->goals++;
    }

    
    public function addCard(int $color) {
        if (strtolower($color) == "amarilla" ) { 
            $this->yellowCards++;
        } elseif (strtolower($color) == "roja") { 
            $this->redCards++;
        }
    }

    
    public function playMinutes(int $min) {
        $this->minutes += $min;
    }


    
    public function __toString() {

        $cadena = "<td>".$this->name."</td>";
        $cadena .= "<td>".$this->getAge(). "</td>";
        $cadena .= "<td>".$this->country. "</td>";
        $cadena .= "<td>".$this->dorsal. "</td>";
        $cadena .= "<td>".$this->position. "</td>";
        $cadena .= "<td>".$this->goals. "</td>";
        $cadena .= "<td>".$this->matches. "</td>";
        $cadena .= "<td> ".$this->minutes. "</td>";
        $cadena .= "<td> ".$this->yellowCards. "</td>";
        $cadena .= "<td> ".$this->redCards. "</td></tr>"; 
        return $cadena;
    }
    
    
    public function addMatch() {
        $this->matches++;
    }
}




class Team {
    
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;

    
    public function __construct($name, $players ) {
        $this->name = $name;
        $this->players[] = []; 
        $this->matches = 0;
        $this->won = 0;
        $this->lost = 0;
        $this->tie = 0;
        $this->scoreGoals = 0;
        $this->concededGoals = 0;
    }

    
    public function signPlayer(Player $player) {
        $this->players[] = $player;
    }


    
    public function __toString() {
        $cadena = "<div class='card mb-3'>";
        $cadena .= "<div class='card-body'>";
        $cadena .= "<h2 class='card-title text-center '>" . $this->name . "</h2>";
        $cadena .= "<p class='card-text'><strong>Partidos jugados:</strong> " . $this->matches . "</p>";
        $cadena .= "<p class='card-text'><strong>Ganados:</strong> " . $this->won . "</p>";
        $cadena .= "<p class='card-text'><strong>Perdidos:</strong> " . $this->lost . "</p>";
        $cadena .= "<p class='card-text'><strong>Empatados:</strong> " . $this->tie . "</p>";
        $cadena .= "<p class='card-text'><strong>Goles marcados:</strong> " . $this->scoreGoals . "</p>";
        $cadena .= "<p class='card-text'><strong>Goles recibidos:</strong> " . $this->concededGoals . "</p>";
        $cadena .= "<h3 class='mt-4'>Jugadores:</h3>";
        return $cadena;
    }
    
}

?>