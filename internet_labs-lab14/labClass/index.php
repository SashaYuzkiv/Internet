<?php
require_once('Animals.php');

class Alces extends Animals {
    
    use Message;

    public function Speak()
    {
        echo "I`m Alces, my name is ". $this->getName().", and my color is ".$this->getColor()."!"."<br>";
    }
}

$Alces1 = new Alces("Edmont", "Brown");
$Alces1->Speak();
$Alces2 = new Alces("Snowflake", "White");
$Alces2->Speak();

?>