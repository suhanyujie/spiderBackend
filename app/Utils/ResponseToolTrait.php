<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2019/2/23
 * Time: 14:51
 */

namespace App\Utils;


trait ResponseToolTrait
{
    protected $ResponseToolData = [];

    public function json1($result=[]):string
    {
        $result = json_encode($result, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        return $result;
    }
}