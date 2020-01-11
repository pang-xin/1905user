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
        $url = "http://www.lijiaxin.xyz/user/reg";
        $data = [
            'user_name' => 'zhangsan3',
            'user_email' => 'zhang2@qq.com',
            'user_tel'=>'123123323',
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
        $url = "http://www.lijiaxin.xyz/user/login";
        $response = Common::curlPost($url,$login_info);
        print_r($response);
    }

    public function getData()
    {
        $token = 'dadd6db9e34b16dfbcf056741dd4e1c2';
        $uid = '2';
        $url = "http://www.lijiaxin.xyz/user/token";
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = Common::curlGet($url,$header);
        print_r($response);
    }
}
