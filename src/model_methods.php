<?php
namespace Hyper\Base\Model;

use Hyper\Database\CRUD\select;
use Hyper\Database\CRUD\insert;

trait ModelMethods
{
    public static function all()
    {
        return new self(select::execute(self::table_name()));
    }

    public static function find(int $id)
    {
        return new static(select::execute(self::table_name(), '*', ['id' => $id])[0]);
    }

    public static function find_by($params)
    {
        return (object)select::execute(self::table_name(), '*', $params)[0];
    }

    public static function create($params)
    {
        return (object)insert::execute(self::table_name(),$params);
    }

    private static function table_name()
    {
        return strtolower(basename(str_replace("\\", DIRECTORY_SEPARATOR, get_called_class())));
    }
}

?>