<?php


   class Road {
     protected $mode;
       public function move(string $mode)
       {
          $this->mode  = $mode;
          return $this;
       }
   }



   class leftRoad extends Road {

   }

   class rightRoad extends Road {

   }


   $left = new leftRoad();
   $left->move("Left Mode");

   $right = new rightRoad();
   $right->move("Right Mode");

   print_r($left);
   print_r($right);