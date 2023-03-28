<?php

    require_once 'SubClass.php';


    $baseobj = new BaseClass();
    $subobj = new SubClass();

    #access parent public property
    // print $subobj->publicProperty . PHP_EOL;

    #access protected property by baseclass
    // print $baseobj->protectedProperty . PHP_EOL;

    #access the protected propert of parentclass via the function by subclass
    //print $subobj->getParentProtectedProperty();

    #access the private property of the base class in the global
    //print $baseobj->privateProperty; //Fatal error: Uncaught Error: Cannot access private property BaseClass::$privateProperty
    // print $subobj->privateProperty; //Undefined property: SubClass::$privateProperty

    #access the private property of the base class in the global
    // print $subobj->getParentPrivateProperty();

    print $baseobj->getParentPrivateProperty(); //Fatal error: Uncaught Error: Call to protected method BaseClass::getParentProtectedProperty() from global scope

?>