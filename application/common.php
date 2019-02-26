<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use app\home\model\Tel;

function get_tel(){
    //获取联系方式
    $data = Tel::select();

    //因为只有一条数据 所以直接取出即可 省去在模板遍历
    return $data[0];
}

function get_seo(){
    $da = \think\Db::name('seo')->select();

    return $da[0];

}
