<?php

    //Array multidimensional

    $animales = [
        [

            "Puma",
            "Jaguar",
            "Lince",

        ], 

        [

            "Paloma",
            "Pato",
            "Tucan",

        ],

        [

            "Serpiente",
            "Cocodrilo",
            "Tortuga"

        ]

    ];

    echo $animales[0][0];


    //Con arrays asociativos

    $animales2 = [ 

        "Felinos" => ["Puma", "Jaguar", "Lince"],
        "Aves" => ["Paloma", "Pato", "Tucan"],
        "Reptiles" => ["Serpiente", "Cocodrilo", "Tortuga"],
    
    ];

    echo $animales2["Felinos"][2];


?>