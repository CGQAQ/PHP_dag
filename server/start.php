<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 18-4-24
 * Time: 下午10:08
 */


require_once "./vendor/autoload.php";


use Workerman\Worker;
use PHPSocketIO\SocketIO;


$io = new SocketIO("8080");


$io->on("connection", function ($d){
    var_dump($d);
});

Worker::runAll();