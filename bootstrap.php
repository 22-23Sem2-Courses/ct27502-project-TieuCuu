<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load(); // Load .env file into $_ENV

//print_r($_ENV);

try {
    $PDO = new PDO(
        'mysql:host=' . $_ENV['DB_HOST'] .
            ';dbname=' . $_ENV['DB_NAME'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
    );
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage() . '<br/>');
}

$sql = "
    SELECT *
    FROM users
";
$stmt = $PDO->prepare($sql);
$stmt->execute();

// Fetch as associative array
echo "Return next row as an array indexed by column name\n";
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
