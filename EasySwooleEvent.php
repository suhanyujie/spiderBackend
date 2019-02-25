<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/5/28
 * Time: 下午6:33
 */

namespace EasySwoole\EasySwoole;


use App\Process\HotReload;
use EasySwoole\EasySwoole\Console\DefaultModule\Server;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        // TODO: Implement initialize() method.
        date_default_timezone_set('Asia/Shanghai');
    }

    public static function mainServerCreate(EventRegister $register)
    {
        // 热重载
        $swooleServer = ServerManager::getInstance()->getSwooleServer();
        $swooleServer->addProcess((new HotReload("HotReload",["disableInotify"=>false]))->getProcess());
        //连接dom解析器
//        $client = new \swoole_client(SWOOLE_SOCK_TCP);
//        if ($client->connect('127.0.0.1',8001,2)) {
//            echo "dom解析服务连接不上！\n";
//            return;
//        }
//        for ($i=0;$i<10;$i++) {
//            $con = "<h1 id='list'>hello world<dd><a href='http://www.baidu.com'>test link</a></dd></h1>";
//            $ok = $client->send("11111111");
//            if (!$ok) {
//                echo "向dom解析服务发送异常！\n";
//                return;
//            }
//            sleep(2);
//        }
//        $data = $client->recv();
//        var_dump($data);
        $fp = fsockopen("tcp://127.0.0.1",8001,$errno,$error,2);
        var_dump($fp);
        echo "{$error}";
        return;
        fwrite($fp, "11111",5);
        while (!feof($fp)) {
            echo fgets($fp, 128);
        }
        fclose($fp);
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        // TODO: Implement onRequest() method.
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }
}