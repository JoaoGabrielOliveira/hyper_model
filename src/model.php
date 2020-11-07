<?php

namespace Hyper\Base;

use Exception;

use Hyper\Base\Model\ModelMethods;
use Hyper\Database\Operations;

class Model
{
    use ModelMethods;

    private $fields;
    private $columns;

    public function __construct(...$params)
    {
        $first_param = $params[0];
        $this->columns = Operations::get_all_collumns(get_called_class());
        $this->fields = (array)$first_param;
    }

    public function __get($field)
    {
        if ($this->field_exist($field))
            return $this->fields[$field];
        throw new Exception;
    }

    public function __set($field,$value)
    {
        if ($this->field_exist($field))
            $this->fields[$field] = $value;
        throw new Exception;
    }

    private function field_exist($field)
    {
        return in_array($field,$this->columns);
    }
}
?>