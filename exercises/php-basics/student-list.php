<?php

$students = [
    [
        "name" => "Edith",
        "course" => "Digital Solutions Engineering"
    ],
    [
        "name" => "John",
        "course" => "Software Engineering"
    ],
    [
        "name" => "Mary",
        "course" => "Data Science"
    ]
];

foreach ($students as $student) {
    echo "Name: " . $student["name"] . PHP_EOL;
    echo "Course: " . $student["course"] . PHP_EOL;
    echo "----------------" . PHP_EOL;
}

?>