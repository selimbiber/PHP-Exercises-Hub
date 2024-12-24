<?php
function solution(array $planets, int $num): array {
    $validPlanets = array_filter($planets, function($planet): bool {
        return $planet !== '' && $planet !== NULL;
    });

    $randomKeys = array_rand($validPlanets, $num);

    $randomPlanets = array_map(function($key) use ($validPlanets) {
        return $validPlanets[$key];
    }, $randomKeys);

    return $randomPlanets;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(solution($planets, 2));
print_r(solution($planets, 3));
print_r(solution($planets, 2));
print_r(solution($planets, 4));
print_r(solution($planets, 5));

/*
Array
(
    [0] => Mercury
    [1] => Jupiter
)
Array
(
    [0] => Venus  
    [1] => Earth  
    [2] => Uranus 
)
Array
(
    [0] => Mercury
    [1] => Earth
)
Array
(
    [0] => Mercury
    [1] => Venus
    [2] => Earth
    [3] => Saturn
)
Array
(
    [0] => Mercury
    [1] => Venus
    [2] => Mars
    [3] => Uranus
    [4] => Neptune
)
*/