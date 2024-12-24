# [Kodluyoruz - Basic PHP Homework 2](https://academy.patika.dev/tr/courses/php-temel/php-dizi-odev)

Write a function that creates an array of random values by cleaning the empty elements in the given array. (Use the array_map(), array_filter(), and array_rand() functions.)

## Examples

```php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 3));
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 4));
print_r(sizinFonksiyonunuz($planets, 5));
```

## Results

```php
Array
(
    [0] => Venus
    [1] => Mars
)
Array
(
    [0] => Earth
    [1] => Jupiter
    [2] => Uranus
)
Array
(
    [0] => Mars
    [1] => Uranus
)
Array
(
    [0] => Venus
    [1] => Earth
    [2] => Jupiter
    [3] => Neptune
)
Array
(
    [0] => Mercury
    [1] => Earth
    [2] => Saturn
    [3] => Uranus
    [4] => Neptune
)
```