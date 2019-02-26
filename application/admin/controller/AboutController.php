<?php
namespace app\admin\controller;


use app\admin\model\Tel;
use think\cache\driver\Redis;
use think\Controller;
use think\Db;
use think\Request;
use think\Route;
use app\admin\model\Shouye;

class AboutController extends Controller
{

    public function tel(){

        //获取信息
        $infos = Tel::select();






          $count  = count($infos);




        $this->assign('infos',$infos);
        $this->assign('count',$count);
 

        return $this->fetch();

    }

    public function xiugai(Request $request,tel $tel){


        if ($request->isPost()){

            $infos = $request->post();

            /***商品logo图片修改维护01***/
            if(strpos($infos['code_img'],'picstmp')!==false){

                //① 判断有上传新banner图片才维护
                //② 删除当前对应的旧图片(删除物理图片)
                if(!empty($tel->code_img) && file_exists($tel->code_img)){
                    unlink($tel->code_img);
                }

                //③ 创建"年月日"的文件目录
                $path = './uploads/pics/'.date('Ymd');
                if(!file_exists($path)){
                    mkdir($path,0777,true);
                }
                //制作图片终极路径名
                $finalPathName = str_replace('picstmp','pics',$infos['code_img']);
                //图片从临时位置 挪到终极位置
                rename($infos['code_img'],$finalPathName);
                //设置 终极图片路径名 存储到数据库中
                $infos['code_img'] = $finalPathName;

            }elseif(empty($infos['code_img']) && !empty($tel->code_img)){
                //B. 清除商品原有的旧图片
                if(file_exists($tel->code_img)){
                    unlink($tel->code_img);
                }
            }else{
                //C. 保持原有logo图片不变(不要修改)
                unset($infos['code_img']);
            }

           //做更新操作
            $rst = $tel->update($infos);  //返回修改记录条数
            if($rst){


                return   ['info'=>1];
            }else{
                return  ['info'=>0];
            }

        }else{
            //依赖注入获取对象
            $this->assign('tel',$tel);

            //展示修改表单
            return $this->fetch();
        }



    }

    //前台首页两个模块
    public function shouye(){
        return $this->fetch();
    }


    //首页公司文化和公司业务编辑
    public function edit(Request $request){
        $data = $request->post();
        $shouye = new shouye();

        $rst = $shouye->update($data);

        if($rst){


            return   ['status'=>'success'];
        }else{
            return  ['status'=>'failure'];
        }






    }


    public function index(){

          $infos = Shouye::select();
          $info = $infos[0];


          $this->assign('info',$info);

          return $this->fetch();

    }

    public function pics_up(Request $request)
    {
        //接收客户端传递过来的附件，并存储到服务器上
        //$request调用file()方法就可以获得被上传附件
        //以"think\File"类对象形式返回
        $file = $request -> file('mypics');
        //dump($file);  //think\File类对象

        $path = "./uploads/picstmp/";  //图片存储目录

        //图片上传,move()方法执行成功会返回think\File类对象
        //       上传失败会返回false信息
        //think\File 内部通过算法会给每个上传图片定义一个唯一名字
        $result = $file -> move($path);
        if($result){
            //获得上传好的图片信息
            //获得上传好图片路径名信息
            $filename = $result->getSaveName(); //20160820\42a79759f284b767dfcb2a0197904287.jpg

            $pathfilename = $path.$filename; //拼装图片完整路径名
            $pathfilename = str_replace('\\','/',$pathfilename);//"\"替换为"/"

            return ['status'=>'success','pathfilename'=>$pathfilename];
        }else{
            //上传图片失败
            $errorinfo = $file -> getError();
            return ['status'=>'failure','errorinfo'=>$errorinfo];
        }
    }


    /**
     * @return  seo设置
     */
        public function seo(Request $request){
                if ($request->isPost()){
                       $data = $request->post();
                   $res = Db::name('seo')->where('id','=',1)->update($data);

                     if ($res){
                         return ['info'=>1];
                     }else{
                         return ['info'=>0];
                     }
                }else{

                    $info = Db::name('seo')->select();

                  $info = $info[0];

                  $this->assign('info',$info);
                    return $this->fetch();
                }
        }


}


















