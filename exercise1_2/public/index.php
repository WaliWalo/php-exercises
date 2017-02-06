<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/2/2017
 * Time: 11:33 AM
 */

require_once __DIR__ . '/../src/Person.php';

    $person1 = new Person();
    $person1->setName("Matt");
    $person2 = new Person();
    $person2->setName("Joelle");
    print 'Name of person1 is: '; $person1->getName();
    print "<br/>";
    print 'Name of person2 is: '; $person2->getName();


