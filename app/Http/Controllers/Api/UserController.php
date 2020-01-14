<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Model\Common;

class UserController extends Controller
{
    public function reg()
    {
        $url = "http://1905passport.com/user/reg";
        $data = [
            'user_name' => 'zhangsan4',
            'user_email' => 'zhang3@qq.com',
            'user_tel'=>'123123324',
            'user_pwd'=>'ljx123',
            'user_pwd1'=>'ljx123'
        ];

        $response = Common::curlPost($url,$data);
        print_r($response);
    }

    public function login()
    {
        $login_info = [
            'user_name'=>'xin',
            'user_pwd'=>'ljx123'
        ];
        $url = "http://1905passport.com/user/login";
        $response = Common::curlPost($url,$login_info);
        print_r($response);
    }

    public function getData()
    {
        $token = '0beea5452de1461d8a1a45b190b763ab';
        $uid = '2';
        $url = "http://1905passport.com/user/token";
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = Common::curlGet($url,$header);
        print_r($response);
    }

    public function a()
    {
        echo 111;
    }
}
