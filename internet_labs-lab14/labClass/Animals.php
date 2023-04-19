<?php
require_once('interface.php');
require_once('trait.php');

class Animals implements Animals_interface
{
    private $color;
    private $name;

    use Message;

    function __construct(string $name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->Message();
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor():string
    {
        return $this->color;
    } 

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    } 
}
?>