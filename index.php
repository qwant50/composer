<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/14/16
 * Time: 4:10 PM
 */
use mynamespace\Test;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$loader = require __DIR__ . '/vendor/autoload.php';


require __DIR__ . '/src/Test.php';

$blabla = new Test();
$blabla->myM();



