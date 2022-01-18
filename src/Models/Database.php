<?php

declare(strict_types=1);

namespace MyApp\Models;

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
}
