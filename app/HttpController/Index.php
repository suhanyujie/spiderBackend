<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2019/2/23
 * Time: 13:10
 */

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use App\Utils\ResponseToolTrait;

class Index extends Controller
{
    use ResponseToolTrait;

    public function index()
    {
        $date = date('Y-m-d H:i:s');
        $result = [
            '1231231',
            "123",
            "{$date}"
        ];
        $result = $this->json1($result);
        return $this->response()->write($result);
    }
}