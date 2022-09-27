<?php

declare(strict_types=1);
class Human
{
    private string $name;
    private string $id;

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
}

$easteregg423 = new Human('하건영');
$cat = new Human('고먐미');

$objects=[$easteregg423, $cat];

foreach ($objects as $object){
    $name = $object->get_name();
    echo("${name}<br/>");
}