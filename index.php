<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dsn = "mysql:host=ostrawebb.se;dbname=wsp2526_marpet;charset=utf8";
$db = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);

$statement = $db->prepare("SELECT * FROM movies");
$statement->execute();
$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    foreach ($movies as $movie) {
        echo '<p>' . $movie['title'] . '</p>';
    }

    ?>

</body>

</html>