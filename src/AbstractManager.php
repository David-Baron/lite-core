<?php 
namespace Lite\Core;

use Lite\Core\Factory\PdoFactory;

class AbstractManager
{

    public function db()
    {
        $connection = new PdoFactory("mysql","espace_client","localhost:3308", "root", "");
        return $connection->pdo();
    }
}