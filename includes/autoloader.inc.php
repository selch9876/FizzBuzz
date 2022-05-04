<?php
spl_autoload_register('myAutoloader');

function myAutoloader($classname)
{
   $path = 'rules/';
   $extension = '.class.php';
   $fullpath = $path . $classname . $extension;

   include_once $fullpath;
}