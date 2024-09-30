<?php
$personas = array(
    array('nombre' => 'Alejandro',
        'altura' => 1.72,
        'email' => 'alegragar3@alu.edu.gva.es'
),
    array('nombre' => 'Pau',
        'altura' => 1.72,
        'email' => 'paunavcar@alu.edu.gva.es'
),
    array('nombre' => 'Ivan',
        'altura' => 1.83,
        'email' => 'ivaolmber@alu.edu.gva.es'
),
    array('nombre' => 'Miguel',
        'altura' => 1.72,
        'email' => 'miggin@alu.edu.gva.es'
),
    array('nombre' => 'Jaume',
        'altura' => 1.74,
        'email' => 'jaugarfra@alu.edu.gva.es'
)

);

for ($i = 1; $i < count($personas); $i++){
    echo '<p>-----------------------------</p>';
    echo($personas[$i]['nombre']);
    echo '<br>';
    echo($personas[$i]['altura']);
    echo '<br>';
    echo($personas[$i]['email']);
    echo '<br>';
}


?>