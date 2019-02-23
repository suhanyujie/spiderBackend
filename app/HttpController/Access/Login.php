<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2019/2/23
 * Time: 15:44
 */

namespace App\HttpController\Access;

use App\Utils\ResponseToolTrait;
use EasySwoole\Http\AbstractInterface\Controller;

class Login extends Controller
{
    use ResponseToolTrait;
    public function index()
    {
        // TODO: Implement index() method.
        return $this->response()->write("Hello Login...");
    }
}