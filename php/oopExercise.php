<?php
    /*include_once('classes/Bkiict.php');*/
    function __autoload($class_name) {
        include_once 'classes/'.$class_name.'.php';
    }

    $bkiict=new Bkiict();
    echo $bkiict->fullname;

    $student=new Student();
    echo $student->firstname;