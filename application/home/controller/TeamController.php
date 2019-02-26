<?php
namespace app\home\controller;


use think\Controller;

use app\home\model\Team;
use think\Db;

class TeamController extends Controller
{
    public function index()
    {
        //获取seo搜索
        $da= get_seo();

        $this->assign('da',$da);
        //获取联系方式
        $info = get_tel();

        $this->assign('info',$info);

        $teams = Team::select();

        $this->assign('teams',$teams);


        $img = Db::table('lf_picture')->where('id','=',6)->find();


        $this->assign('img',$img);


        return $this->fetch();

    }



    public function detail(Team $team){
         $this->assign('team',$team);
        $info = get_tel();
        $this->assign('info',$info);
  //获取seo搜索
       $da= get_seo();

       $this->assign('da',$da);
        //获得banner图
       $picture =  Db::table('lf_picture')->where('id','=',8)->find();


        $this->assign('picture',$picture);

         return $this->fetch();


    }






}


















