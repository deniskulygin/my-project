<?php

final class DatabaseConnection
{
    /** @return \PDO */
    private static $db;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a DatabaseConnection class");
    }

    /**
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @return \PDO
     * @throws Exception
     */
    public static function getDbConnection(string $dsn, string $username, string $password): \PDO
    {
        if (static::$db == null) {
            static::$db = static::establishConnection($dsn, $username, $password);
        }

        return static::$db;
    }

    /**
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @return \PDO
     * @throws \Exception
    */
    private static function establishConnection(string $dsn, string $username, string $password)
    {
        try {
            $connection = new \PDO($dsn, $username, $password);
            if($connection->errorCode()) {
                //Set common attributes
                $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return $connection;
            }

            throw new \Exception("Can`t connect to Database");

        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}
