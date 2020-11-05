<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Hyper\Base\Model;
use Hyper\Database\CRUD\select;
use Hyper\Database\DbConnection as Connection;

class tb_cliente extends Model {}

Connection::set_instance([
    'db' => [
        "driver" => "sqlite",
        "path" => "/home/bionexo/Documents/projetos_paralelos/PHP/db_operations/main/db/database.db"
    ]
]);

 //print_r (tb_cliente::all());

 $object = tb_cliente::find(1);

 print_r ( $object );

 //print_r ( tb_cliente::find_by(['nome' => 'Cleber']) );


?>