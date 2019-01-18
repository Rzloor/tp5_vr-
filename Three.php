<?php
namespace app\index\controller;
use think\Controller;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17
 * Time: 15:05
 */
class Three extends  Controller
{
    public function three()
    {
        return $this->fetch("360");
    }
    public function Jspush_arr()
    {
        return $this->fetch("js_arr");
    }
}