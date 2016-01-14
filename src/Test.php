<?php

/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/14/16
 * Time: 4:16 PM
 */

namespace  mynamespace;

class Test
{
    public function myM() {
        $log = new \Monolog\Logger('name');
        $log->pushHandler(new \Monolog\Handler\StreamHandler('app.log', \Monolog\Logger::WARNING));
        $log->addWarning('Foo');
    }
}