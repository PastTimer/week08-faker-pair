<?php
require_once 'vendor/autoload.php';
use Faker/Factory;

$faker =Factory::create();
$genres = ['Fiction', 'Mystery', 'Science Fiction',  'Fantacy',  'Romance', 'Thriller', 'Historical', 'Horror'];

function generateIsbn() {
    $isbn = '';
    for ($i=0; $i<13; $i++) {
        $isbn .= rand(0, 9);
    }
    return $isbn
}

$books = [];
for ($i=0; $i <15;$i++){
$books = [ 'Title' => $faker->words(3, true),
            'Author' => $faker->name,
            'Genre' => $faker->randomElement($genres),
            'Publication Year' => $faker->numberBetween(1900, 2024),
            'ISBN' => generateIsbn(),
            'Summary' => $faker->paragraph,
        ];
        $books[] = $book;
}
?>