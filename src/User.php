<?php

namespace Nick\Ven;

/**
 * Создать класс User, который будет
 * наследовать класс Model и генерировать SQL код
 * для каждого действия:
 * create, read, update, delete
 */
final class User extends Model
{

    protected $id;
    protected $name;
    protected $email;

    // setters for validation
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
}
?>
