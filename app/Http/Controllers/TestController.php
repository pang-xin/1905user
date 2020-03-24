<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Swiper;
use App\Model\Nav;

class TestController extends Controller
{
    public function images()
    {
        $arr = [
            ['image'=>'/pages/images/1.jpg', 'text'=>'下午茶'],
            ['image'=>'/pages/images/2.jpg', 'text'=>'微信托管代运营'],
            ['image'=>'/pages/images/3.jpg', 'text'=>'视频']
        ];

        return json_encode($arr);
    }

    public function navigation()
    {
        $arr = [
            ['id'=>1,'title'=>'精选'],
            ['id'=>2,'title'=>'爱看'],
            ['id'=>3,'title'=>'战役情'],
            ['id'=>4,'title'=>'上课啦'],
            ['id'=>5,'title'=>'电视剧'],
            ['id'=>6,'title'=>'电影']
        ];

        return json_encode($arr);
    }

    public function cate()
    {
        $cate_id = $_GET['id'];

        $arr = [
            ['count'=>'这是分类id为'.$cate_id.'的内容']
        ];

        echo json_encode($arr);
    }

    public function search()
    {
        $arr = [
            ['id'=>1,'text'=>'爱情公寓'],
            ['id'=>2,'text'=>'爱情保卫战'],
            ['id'=>3,'text'=>'爱情从天降'],
        ];

        echo json_encode($arr);
    }

    public function hotel_image()
    {
        $data = Swiper::where(['status'=>1])->get()->toArray();

        return json_encode($data);
    }

    public function hotel_title()
    {
        $data = Nav::get()->toArray();

        return json_encode($data);
    }

    public function hotel_cate()
    {
        $nav_id = $_GET['nav_id'];

        $data = Nav::where(['nav_id'=>$nav_id])->first()->toArray();

        $data = [$data];

        echo json_encode($data);
    }
}
