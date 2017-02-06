<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/2/2017
 * Time: 11:43 AM
 */

    class Person
    {
        public $name;

        function setName($personName){
            $this->name = $personName;
        }

        function getName(){
            echo $this->name;
        }
    }


