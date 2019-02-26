<?php
namespace app\home\controller;



use app\admin\model\NewsCategory;
use think\Controller;
use app\home\model\News;
use think\Request;
use think\Db;
use think\Route;


class NewsController extends Controller
{

     public function jump($url,$info=null,$sec=3)
    {
        if(is_null($info)){
            header("Location:$url");
        }else{
            // header("Refersh:$sec;URL=$url");
            echo"<meta http-equiv=\"refresh\" content=".$sec.";URL=".$url.">";
            echo $info;
        }
        die;
    }

    public function next($id,$cat_id){
     $infos  = Db::name('news')
         ->where('id','<',$id)
         ->where('category_id','=',$cat_id)
         ->order('id desc')
         ->limit(1)
         ->find();

     if ($infos !== null){

         $this->assign('info',$infos);
         return $this->fetch('detail');
     }else{
         echo"<script>alert('已经是最后一页');history.go(-1);</script>";
         //$this->jump("home/news/detail/?id=$id",'已经是最后一条',1);

     }


    }
    public function last($id,$cat_id){







         $news = new News();
        $infos  = $news->where('id','>',$id)
            ->where('category_id','=',$cat_id)
            ->order('id')
            ->limit(1)
            ->find();



        if ($infos !== null){

            $this->assign('info',$infos);
            return $this->fetch('detail');
        }else{
            echo"<script>alert('已经是第一页');history.go(-1);</script>";
            //$this->jump("home/news/detail/?id=$id",'已经是第一条',1);

        }


    }

public function index(){

    //获取联系方式
    $info = get_tel();



    $this->assign('info',$info);

    $data = NewsCategory::select();
    $this->assign('data',$data);
    //获取新闻信息
    $news = new News();
    //获取seo搜索
    $da= get_seo();

    $this->assign('da',$da);


    $link = mysqli_connect('localhost','root','123456');
    mysqli_select_db($link,'admin')  ;
    mysqli_set_charset($link,'utf-8');

    /**
     *
     */

    $sql = "select * from lf_news as a where 6>(select count(*) from lf_news 
 where category_id=a.category_id and create_time > a.create_time )
order by a.category_id,a.create_time desc";

    $dat  = mysqli_query($link,$sql);

    $infos = mysqli_fetch_all($dat,MYSQLI_ASSOC);







    //分配到模板
    $this->assign('infos',$infos);


    //获取banner图
    $img = Db::table('lf_picture')->where('id','=',5)->find();



    $this->assign('img',$img);
    //展示模板
    return $this->fetch();


}

public function detail(News $news){


  //获取新闻信息
    $new = new News();
    //获取seo搜索
    $da= get_seo();

    $this->assign('da',$da);

    $this->assign('info',$news);
    //展示到详情页
    return $this->fetch();

}





}


















