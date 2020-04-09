<?php
class person {
    public $name;

    public function __construct($x)
    {
        $this->getname($x);
    }
    public function getname($v)
    {
        $this->name = $v;
    }
}

class employee extends person{

}
class people extends person{

}


$new = new people('kennedy');
echo $new->name
?>