<?php

declare(strict_types=1);
class Human
{
    private string $name;
    private string $id;
    protected bool $is_happy;
    protected int $sex;

    function __construct(string $name)
    {
        $this->name=$name;
        echo("Constructing Object $this->name<br/>");
    }

    function __destruct()
    {
        echo("Destructing Object $this->name<br/>");
    }

    function get_name(): string
    {
        return $this->name;
    }

    public function get_is_happy()
    {
        return $this->is_happy;
    }

    public function get_other_is_happy(Human $human)
    {
        return $human->is_happy;
    }

    public function set_is_happy_by_number($score)
    {
        if ($score>50) $this->is_happy = true;
        else $this->is_happy = false;
    }
}

$easteregg423 = new Human('하건영');
$cat = new Human('고먐미');
$dog = new Human('댕댕이');
$easteregg423->set_is_happy_by_number(79);
$cat->set_is_happy_by_number(88);
$dog->set_is_happy_by_number(47);

$objects=[$easteregg423, $cat, $dog];

echo(($easteregg423->get_other_is_happy($cat) ? "행" : "불") . "<br/>");

foreach ($objects as $object){
    $name = $object->get_name();
    $is_happy = $object->get_is_happy();
    echo("${name}는 현재 " . ($is_happy ? "행복" : "불행") . "하다.<br/>");
}