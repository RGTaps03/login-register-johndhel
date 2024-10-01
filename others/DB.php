<?php

class DB
{
    private static $instance = null;

    private function __construct()
    {
        // Prevent direct instantiation
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            $db_info = [
                "host" => "localhost",
                "port" => "3306",
                "user" => "root",
                "pass" => "",
                "name" => "greatwall",
                "charset" => "utf8" // Set charset directly
            ];

            try {
                self::$instance = new PDO(
                    "mysql:host=" . $db_info['host'] . ";port=" . $db_info['port'] . ";dbname=" . $db_info['name'],
                    $db_info['user'],
                    $db_info['pass']
                );

                // Set the error mode to exception
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->exec("SET NAMES " . $db_info['charset']); // Use exec for setting names
            } catch (PDOException $error) {
                // Handle exception
                die("Database connection failed: " . $error->getMessage());
            }
        }

        return self::$instance;
    }
}