<?php
namespace app\home\controller;


use think\Controller;
use app\home\model\Contact;
use think\Db;
class ContactController extends Controller
{
    public function index()
    {
        //获取seo搜索
        $da= get_seo();

        $this->assign('da',$da);
        //获取联系方式
        $info = get_tel();


        $this->assign('info',$info);



        $img = Db::table('lf_picture')->where('id','=',7)->find();


        $this->assign('img',$img);

        return $this->fetch();

    }

    public function map(){

        return $this->fetch();
    }




}


















