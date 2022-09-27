<?php

declare(strict_types=1);
class Human
{
    private string $name;
    private string $id;

    function set_name(string $name)
    {
        $this->name = $name;
    }

    function get_name(): string
    {
        return $this->name;
    }
}

class Animal
{
    private string $name;
    private string $id;

    function set_name(string $name)
    {
        $this->name = $name;
    }

    function get_name(): string
    {
        return $this->name;
    }
}

$easteregg423 = new Human();
$cat = new Animal();

$easteregg423->set_name('하건영');
$cat ->set_name('고먐미');

echo($easteregg423->get_name());
echo($cat->get_name());

$objects=[$easteregg423, $cat];

foreach ($objects as $object){
    if ($object instanceof Human){
        echo($object->get_name() . "은 Human입니다.");
    }else{
        echo($object->get_name() . "은 Human이 아닙니다.");
    }
    
    echo ("<br/>");
}