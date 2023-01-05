<?php

class Person{

      public $name;
      // public $age;
      // public $gender;

      public function __construct($name){
            $this->name=$name ;
           
      }

      // function set_age($age){
      //       $this->age ;
           
      // }

      // function set_gender($gender){
      //       $this->gender;
           
      // }


      }
      $person = new Person('sang');

      echo $person->name;
?>
