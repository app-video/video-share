<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: bluse
 * Date: 15/9/12
 * Time: 下午12:20
 */
class WelcomeController extends Controller
{
    public function index()
    {
        $obj = (object)'123';
        echo $obj->scalar;
        $arr = [];
        $arr['key'] = 'website';
        $arr['value'] = 'www.baidu.com';
        $a = serialize($arr);
        echo $a.'\n';
        $a = unserialize($a);
        dd($a);
        echo (int)((0.1 + 0.7)*10);
        echo "hello world";
    }
}