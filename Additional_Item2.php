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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mt-5 mb-4">Fake Book List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                <th>Summary</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= htmlspecialchars($book['Title']) ?></td>
                    <td><?= htmlspecialchars($book['Author']) ?></td>
                    <td><?= htmlspecialchars($book['Genre']) ?></td>
                    <td><?= htmlspecialchars($book['Publication Year']) ?></td>
                    <td><?= htmlspecialchars($book['ISBN']) ?></td>
                    <td><?= htmlspecialchars($book['Summary']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>