<?php

declare(strict_types=1);

namespace MyApp\Model;

use PDO;
use PDOException;

class Database
{
    public function __construct(array $config)
    {
        try {
            $this->createConnection($config);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    private function createConnection(array $config): void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";

        $this->conn = new PDO(
            $dsn,
            $config['user'],
            $config['password'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public function getProducts()
    {
        try {
            $query = "SELECT id, name, category, price, image, created_at FROM products";

            $result = $this->conn->query($query);
            $products = $result->fetchAll(PDO::FETCH_ASSOC);

            return $products;
        } catch (\Throwable $e) {
            echo ($e->getMessage());
        }
    }
}
