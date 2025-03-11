<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
$genres = ['Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Thriller', 'Historical', 'Horror'];

function generateIsbn() {
    return implode('', array_map(fn() => rand(0, 9), range(1, 13)));
}

$books = [];
for ($i = 0; $i < 15; $i++) {
    $books[] = [ 
        'Title' => $faker->sentence(3),
        'Author' => $faker->name,
        'Genre' => $faker->randomElement($genres),
        'Publication Year' => $faker->numberBetween(1900, 2024),
        'ISBN' => generateIsbn(),
        'Summary' => $faker->paragraph(),
    ];
}

echo "<table border='1'>";
echo "<tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Publication Year</th>
        <th>ISBN</th>
        <th>Summary</th>
      </tr>";

foreach ($books as $book) {
    echo "<tr>
            <td>" . htmlspecialchars($book['Title']) . "</td>
            <td>" . htmlspecialchars($book['Author']) . "</td>
            <td>" . htmlspecialchars($book['Genre']) . "</td>
            <td>" . htmlspecialchars($book['Publication Year']) . "</td>
            <td>" . htmlspecialchars($book['ISBN']) . "</td>
            <td>" . htmlspecialchars($book['Summary']) . "</td>
          </tr>";
}

echo "</table>";
?>
