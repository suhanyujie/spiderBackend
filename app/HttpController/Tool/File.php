<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 2019/4/17
 * Time: 10:26
 */

namespace App\HttpController\Tool;

use App\HttpController\Index;

class File extends Index
{
    // /Tool/File/index
    public function index()
    {
        $request = $this->request();
        $file = $request->getUploadedFile('files');
        $post = $request->getParsedBody();
        var_dump($request->getHeaders(),$file,$post);

        return $this->json1([$file]);
    }
}
