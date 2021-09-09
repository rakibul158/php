<?php
    echo "<b> For Loop Array Count</b>";
    echo "<br>";
    $cars = [
        "Valvo",
        "Toyta",
        "X-Corola"
    ];
    $arraylenght = count($cars);
    for($x=0; $x<$arraylenght; $x++)
    {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";

    echo "<b> ForEach Array Count</b>";
    echo "<br>";
    foreach($cars as $car){
        echo $car;
        echo "<br>";
    }

    echo "<br>";
    
    $friends = [
        [
            "name" => 'Md Rakibul Hasan',
            "age" => 24
        ],
        [
            "name" => 'Md Tipu Farazi',
            "age" => 24
        ],
        [
            "name" => 'Shahriar Alam Sajib',
            "age" => 24
        ]
    ];

    foreach($friends as $friend)
    {
        echo "Name: ".$friend['name']."<br>Age: ".$friend['age']."<br>";
    }
?>