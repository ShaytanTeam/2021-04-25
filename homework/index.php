<?php
echo "<br>";
echo "<strong>1. Išvesti į ekraną 10 kartų Labas<br><br></strong>";

$word = "Labas";
for ($i=1; $i<=10; $i++) {
    echo "$word <br>";
}

echo "<br>";
echo "<strong>2. Išvesti į ekraną skaičius nuo 1 iki 10<br><br></strong>";

for ($i=1; $i<=10; $i++) {
    echo "$i <br>";
}

echo "<br>";
echo "<strong>3. Išvesti į ekraną skaičius nuo 10 iki 1<br><br></strong>";
for ($i=10; $i>=1; --$i) {
    echo "$i <br>";
}

echo "<br>";
echo "<strong>4. Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100<br><br></strong>";
for ($i=1; $i<=100; $i++) {
    if ($i%2==0)
        echo "$i <br>";
}

echo "<br>";
echo "<strong>5. Išvesti į ekraną visus masyvo elementus (skaičių masyvas)<br><br></strong>";
$digits = [-10, -8, -6, -4, -2, 0, 1, 3, 5, 7, 9];
var_dump($digits);

echo "<br>";
echo "<br>";
echo "<strong>5. Išvesti į ekraną visų masyvo elementų sumą<br><br></strong>";
echo array_sum($digits);


echo "<br>";
echo "<br>";
echo "<strong>6. Išvesti į ekraną visų masyvo elementų sandaugą [NESIGAUNA]<br><br></strong>";

function multiply($value) {
    $value *= $value;
    return $value;
}
foreach ($digits as $value)
    echo multiply($value);

echo "<br>";
echo "<br>";
echo "<strong>7. Išvesti į ekraną kas antrą masyvo elementą<br><br></strong>";

for ($i=0; $i<=count($digits); $i+=2)
{
    var_dump ($digits[$i]);
}

echo "<br>";
echo "<br>";
echo "<strong>8. Funkciją, kuri apverstų masyvo elementus<br><br></strong>";

function reverseDigits($digits) {
    return array_reverse($digits);
}
var_dump (reverseDigits($digits));

echo "<br>";
echo "<br>";
echo "<strong>9. Sukurti Fibonacci seką (tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu<br><br></strong>";

function fibonacci($number) {
    $fib_array = [0, 1];
    for ($i = 2; $i < $number; $i++) {
        $fib_array[$i] = $fib_array[$i - 1] + $fib_array[$i - 2];
    }
    return $fib_array;
}
var_dump((fibonacci(10)));

echo "<br>";
echo "<br>";
echo "<strong>10. Išveskite visų masyvo elementų vidurkį (foreach) [BE FOREACH]<br><br></strong>";

$averagedigit=array_sum($digits)/count($digits);
echo "$averagedigit <br>";

echo "<br>";
echo "<strong>11. Išvesti automobilis masyvą į ekraną (dvilypis masyvas)<br><br></strong>";

$vehicles = [
    [
        "make" => "Audi",
        "model"=> "A6",
        "engine_capacity" => 2000,
        "horse_power" => 150,
    ],
    [
        "make" => "BMW",
        "model"=> "5",
        "engine_capacity" => 3500,
        "horse_power" => 200,
    ],
    [
        "make" => "Opel",
        "model"=> "Insignia",
        "engine_capacity" => 1600,
        "horse_power" => 120,
    ]
];

var_dump($vehicles);