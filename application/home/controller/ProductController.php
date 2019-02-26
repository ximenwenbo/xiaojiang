<?php
namespace app\home\controller;


use app\home\model\ProductCategory;
use think\Controller;
use app\home\model\Product;
use think\Db;



class ProductController extends Controller
{
    public function index()
    {
        //获取seo搜索
        $da= get_seo();

        $this->assign('da',$da);
        //获取联系方式
        $info = get_tel();

        $this->assign('info',$info);

            //获取产品分类列表
          $category  =   ProductCategory::select();
          $this->assign('category',$category);
         //获取产品列表
        $product = Product::select();

        //获取banner图
        $img = DB::table('lf_picture')->where('id','=',4)->find();


$this->assign('img',$img);


        $this->assign('product',$product);








        return $this->fetch();

    }




}


















