<?php

namespace Nick\Ven;

/**
 * Реализовать абстрактный класс Model.
 * В классе должно быть 4 метода:
 * - статический find($id)
 * - create, update
 * - delete
 */
abstract class Model
{

    public static function findId($id)
    {
        $class_name = explode('\\', strtolower(static::class));

        $sql_com = "SELECT * FROM ".array_pop($class_name)." WHERE id = :id";
        return($sql_com);
    }

    public function create()
    {
        $class_name = explode('\\', strtolower(static::class));

        $arr = array_keys((array) $this);
        $str= "";
        for ($i=0; $i < count($arr); $i++) {
            $str .= "$arr[$i], ";
        }
        $str= substr($str, 0, -2);
        $str1 = str_replace("*", "", $str);
        $str2 = str_replace("*", ":", $str);

        $sql_com = "INSERT INTO ".array_pop($class_name)." (".$str1.") VALUES (".$str2.")";
        return($sql_com);
    }

    public function update()
    {
        $class_name = explode('\\', strtolower(static::class));

        $arr = array_filter((array) $this);
        $arr = array_keys($arr);
        $str= "";
        for ($i=0; $i < count($arr); $i++) {
            $str .= "$arr[$i]=:$arr[$i], ";
        }
        $str= substr($str, 0, -2);
        $str = str_replace("*", "", $str);

        $sql_com = "UPDATE ".array_pop($class_name)." SET ".$str." WHERE id = :id";
        return($sql_com);
    }

    public function delete()
    {
        $class_name = explode('\\', strtolower(static::class));

        $sql_com = "DELETE FROM ".array_pop($class_name)." WHERE id = :id";
        return($sql_com);
    }

    /**
     * Объединить методы
     * create, update в метод save
     * и реализовать механизм автоматического выбора
     * между методами create и $update
     *
     * По задумке метод save должен отрабатывать как для
     * сохранения новой сущности, так и для обновления уже существующей.
     */
    public function save()
    {
        // if everything is empty >>> create else update
        $arr = (array) $this;
        foreach ($arr as $key => $value) {
            if (!empty($value)) {
                return $this->update();
            }
        }
        return $this->create();
    }
}
?>
