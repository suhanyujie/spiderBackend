<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2019/2/25
 * Time: 17:29
 */

namespace App\Process;


use EasySwoole\Component\Process\AbstractProcess;
use Swoole\Process;

class SpiderProcess extends AbstractProcess
{
    public function run($args)
    {

    }

    public function onShutDown()
    {
        // TODO: Implement onShutDown() method.
    }

    public function onReceive(string $str)
    {
        // TODO: Implement onReceive() method.
    }
}