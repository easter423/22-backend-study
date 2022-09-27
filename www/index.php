<?php

declare(strict_types=1);

class Human
{
    public string $name = "noname";
    protected ?int $sex = null;    //0: 남, 1: 여, null: 기본값

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function go_to_toilet()
    {
        echo("성별이 정의되지 않음<br/>");
    }
}

class Male extends Human
{
    protected ?int $sex=0;
    public function say_name()
    {
        echo("$this->name입니다!");
    }
    public function go_to_toilet()
    {
        echo("남자 화장실은 1층입니다.<br/>");
    }

}

class Female extends Human
{
    protected ?int $sex=1;
    public function go_to_women_toilet()
    {
        $is_men = false;
    }
    public function go_to_toilet()
    {
        echo("여자 화장실은 3층입니다.<br/>");
    }
}


$easteregg423 = new Male('하건영');
$cat = new Female('고먐미');
$dog = new Human('댕댕이');

$humans=[$easteregg423, $cat, $dog];

foreach($humans as $human){
    $human->go_to_toilet();
    echo("{$human->name}은(는) ");
    if($human instanceof Male){
        echo("남자입니다.<br/>");
    }else{
        echo("남자가 아닙니다.<br/>");
    }
    if($human instanceof Human){
        echo("사람입니다.<br/>");
    }else{
        echo("사람이 아닙니다.<br/>");
    }
    echo("<br/>");
}