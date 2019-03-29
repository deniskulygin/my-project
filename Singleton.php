<?php

final class DatabaseConnection
{
    /** @return DatabaseConnection */
    private static $instances;

    protected function __construct() { }

    protected function __clone() { }

    /** @throws Exception */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a DatabaseConnection class");
    }

    /** @return DatabaseConnection */
    public static function getInstance(): self
    {
        if (!isset(self::$instances)) {
            self::$instances = new self;
        }

        return self::$instances;
    }

    /**
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @return PDO|string
     * @throws \Exception
     */
    public function establishConnection(string $dsn, string $username, string $password)
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
            return $e->getMessage();
       }
    }
}

function testDatabaseConnectionSingleton()
{
    $s1 = DatabaseConnection::getInstance();
    $s2 = DatabaseConnection::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

testDatabaseConnectionSingleton();
