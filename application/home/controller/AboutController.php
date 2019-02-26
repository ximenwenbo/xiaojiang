<?php
namespace app\home\controller;


use think\Controller;
use app\home\model\Profiles;
use app\home\model\Picture;

class AboutController extends Controller
{
    public function index()
    {

        //获取seo搜索
        $da= get_seo();

        $this->assign('da',$da);


        //获取联系方式
        $info = get_tel();

        $this->assign('info',$info);

        $p = new Profiles();

        $infos = $p->select()[0];

        $this->assign('infos',$infos);

        //获取图片

        $data = Picture::where('id','in','1,2,3')->select();

       $this->assign('data',$data);





        return $this->fetch();

    }




}


















