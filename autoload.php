<?php
//include_once('definition_file.php');
//include_once('course.php');

function __autoload($class_name){
    include_once 'class26j/'.$class_name.'.php';

   // $filePath =(".$class_name.".'php');
    //include_once($filePath);


}


//$bkiict=new Bkiict();
//echo $bkiict->fullname;

$sclass=new Sclass();
echo $sclass->name;
$scourse= new Scourse();

//echo $sclass->name;
echo $scourse->sub;
