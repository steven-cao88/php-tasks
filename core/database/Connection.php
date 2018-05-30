<?php
/**
 * Connection.php
 */
class Connection
{

    public static function make($config)
    {
        try {
            $connection = "{$config['connection']};dbname={$config['name']}";

            return new PDO(
                $connection,
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}