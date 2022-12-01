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
   $obj2 = new Calculate();


   $obj1->a = 20;
   $obj1->b = 10;
   print("Objact1 = ".$obj1->sum())."<br />";


   $obj2->a = 50;
   $obj2->b = 30;
   print("Objact2 = ".$obj2->sub());
?>