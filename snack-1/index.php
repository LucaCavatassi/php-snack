<?php
$students = [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'votes' => [8, 5, 7, 6]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'votes' => [10, 2, 4]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'votes' => [2, 8]
        ]
    ];

    foreach ($students as $curStudent) {
        // var_dump($curStudent);
        echo $curStudent["name"]. " ";
        echo $curStudent["lastname"] . " ";
        echo floor(array_sum($curStudent["votes"])/count($curStudent["votes"])) . " ";

    }

    ?>