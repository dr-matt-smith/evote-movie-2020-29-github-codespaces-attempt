<?php


namespace Tudublin;


class Category
{
    const CREATE_TABLE_SQL =
        <<<HERE
    CREATE TABLE IF NOT EXISTS category (
        id integer PRIMARY KEY AUTO_INCREMENT,
        name text,
        description text
    )
    HERE;

    private $id;
    private $name;
    private $description;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}