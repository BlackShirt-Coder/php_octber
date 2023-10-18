<?php
class tostring_invoke{
    public $name="mgmg";
public function __toString(): string
{
    return "this class no properties or methods";
}
public function __invoke()
{
    echo "your trying to call object as method";
}
public function __clone(): void
{
    echo "Hey Your Cloning Me";
}
}
$obj=new tostring_invoke();
$aa=clone($obj);
