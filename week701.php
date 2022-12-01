<?php
   class Calculate{
    public $a,$b,$c; //propertie

    function sum(){ //method
        $this->c = $this->a + $this->b;
        return $this->c;
      }

      function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
      }
   }
   $obj1 = new Calculate(); //objact
   $obj1->a = 20;
   $obj1->b = 10;
   print($obj1->sum());

?>