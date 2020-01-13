<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class IndexController extends Controller
{
    /**
     * 注册
     */
    public function reg()
    {
        $reg_info = [
            'name'  => '坤小',          // 用户名
            'email' => 'kunxiao@qq.com',
            'mobile'    => '13613714757',
            'pass1'     => '123123',
            'pass2'     => '123123',
        ];
        //echo __METHOD__;die;
        //请求passport 注册接口
        $url = 'http://passport.1905.com/user/reg';
        $response = CommonModel::curlPost($url,$reg_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }

    /**
     * 登录
     */
    public function login()
    {
        $login_info = [
            'name'  => '坤小',
            'pass'  => '123123',
        ];
        //请求passport 登录接口
        $url = 'http://passport.1905.com/user/login';
        $response = CommonModel::curlPost($url,$login_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }

    /**
     * 获取数据
     */
    public function getData()
    {
        $token = '34a0db5a3a73d1330d7d';
        $uid = 1;
        //请求passport 获取数据接口
        $url = 'http://passport.1905.com/user/info';
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = CommonModel::curlGet($url,$header);
    }
}
