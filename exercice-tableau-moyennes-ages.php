<?php
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

/**
 * I split my array, and get back the information into $values
 */

foreach ($students as $key => $value){
    echo "$key a $value ans" . PHP_EOL ;
}

/**
 * I count the number of students
 */

$count_nb_students = count($students) ;
echo $count_nb_students . PHP_EOL ;

/**
 * I add all the ages together
 */
$add_values = array_sum($students) ;
echo $add_values . PHP_EOL ;

/**
 * I calculate the average of all the students' ages
 */

$average = $add_values / $count_nb_students ;
echo "La moyenne des ages des étudiants est de $average". PHP_EOL ;

?>