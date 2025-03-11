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
echo "table border='1'";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Author</th>";
echo "<th>Genre</th>";
echo "<th>Publication Year</th>";
echo "<th>ISBN</th>";
echo "<th>Summary</th>";
echo "</tr>";

for each ($books as $book) {
    echo "<tr>";
    echo "<td>";
$book['Title'] . "</td>";
    echo "<td>" .
$book['Author'] . "</td>";
echo "<td>" .
$book['Genre'] . "</td>";
echo "<td>" .
$book['Publication Year'] . "</td>";
echo "<td>" .
$book['ISBN'] . "</td>";
echo "<td>" .
$book['Summary'] . "...</td>";
echo "</tr>"
}
echo "</table>"
?>