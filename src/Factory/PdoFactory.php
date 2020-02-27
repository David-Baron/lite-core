<?php 
namespace Lite\Core\Factory;
class PdoFactory
{
    protected $pdo;

    public function __construct(string $dbms, string $dbname, string $host, string $user, string $pass)
    {
        $this->pdo = new \PDO("$dbms:dbname=$dbname;host=$host", $user, $pass);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    }

    public function pdo()
    {
        return $this->pdo;
    }
}