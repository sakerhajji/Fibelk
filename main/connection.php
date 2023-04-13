<?php

class config
{
    private static $pdo = null;

    public static function getConnexion()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=crud',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
                echo "connected successfully" ;
            } catch (Exception $e) {
                echo "connection failed : " . $e->getMessage() ; 
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>
