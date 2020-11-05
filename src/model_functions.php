<?php
namespace Hyper\Base\Model;

use Hyper\Database\CRUD\select;

trait ModelMethods
{
    public static function all()
    {
        return select::execute(get_called_class());
    }

    public static function find(int $id)
    {
        return (object)select::execute(get_called_class(), '*', ['id' => $id])[0];
    }

    public static function find_by($params)
    {
        return (object)select::execute(get_called_class(), '*', $params)[0];
    }
}

?>