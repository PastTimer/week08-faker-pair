<?php
require_once 'vendor/autoload.php';

$host = 'localhost';
$db = 'phil_dbase';
$user = 'root';
$password = 'root';

$connection = new mysqli($host, $user, $password, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}  else {
    echo "Connected successfully";
}

$faker = Faker\Factory::create('en_PH');


for ($i = 0; $i < 200; $i++) {
    $lastName = $faker->lastName;
    $firstName = $faker->firstName;
    $office_id = $faker->numberBetween($min = 1, $max = 200);
    $address = $faker->city;

}

for ($i = 0; $i < 50; $i++) {
    $name = $faker->company;
    $contactnum = $faker->phoneNumber;
    $email = $faker->email;
    $address = $faker->address;
    $city = $faker->city;
    $country = $faker->country;
    $postal = $faker->postcode;
}

for ($i = 0; $i < 500; $i++) {
    $employee_id = $faker->numberBetween(1, 200); 
    $office_id = $faker->numberBetween(1, 50); 
    $datelog = $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d H:i:s'); 
    $action = $faker->word;
    $remarks = $faker->words(5, true); 
    $documentcode = $faker->uuid;
}

?>