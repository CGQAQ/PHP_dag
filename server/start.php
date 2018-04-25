<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 18-4-24
 * Time: 下午10:08
 */

namespace Game;

require_once "./vendor/autoload.php";
use Workerman\Worker;
use PHPSocketIO\SocketIO;
use Stringy\StaticStringy as S;

use Game\Beans\Room;

//region auto load
function autoload($class){
    if(S::startsWith($class, 'Game'))
    {
        $path = S::replace($class, '\\', '/');
        $parray = S::split($path, '/');
        array_splice($parray, 0, 1);
        $path = implode('/', $parray);
        require_once __DIR__ . '/' . $path . ".php";
    }
}
spl_autoload_register('\Game\autoload');
//endregion





$io = new SocketIO("8080");
$r = new Room();


//hall
$io->on("connection", function ($client){
    var_dump($client->id);
    $client->broadcast->emit('get online', $client->id);
    $client->on('message', function ($m) {
        var_dump($m);

    });
});






Worker::runAll();