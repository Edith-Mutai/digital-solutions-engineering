<?php

$student = [
    "name" => "Edith",
    "course"=> "Digital Solutions Engineering",
    "age" => 25,
    "city" => "Nairobi"
];

echo "Student Information" . PHP_EOL;
echo "-------------------" . PHP_EOL;

foreach ($student as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}

?>
