<?php

$students = [
    [
        "name" => "Edith",
        "grade" => 88
    ],
    [
        "name" => "John",
        "grade" => 72
    ],
    [
        "name" => "Mary",
        "grade" => 54
    ]
];

foreach ($students as $student) {

    echo $student["name"] . ": ";

    if ($student["grade"] >= 80) {
        echo "Grade A";
    } elseif ($student["grade"] >= 60) {
        echo "Grade B";
    } else {
        echo "Grade C";
    }

    echo PHP_EOL;
}

?>