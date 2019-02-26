<?php
namespace app\admin\controller;


use think\Controller;
use think\Request;
use app\admin\model\Manager;

class ManagerController extends Controller{

    public function login(Request $request){

        if ($request->ispost()){

            //判断验证码
            $code = $request->post('verify_code');


         $online = $request->post('online');
            $name = $request->post('mg_name');
            $pwd = $request->post('mg_pwd');








            if (captcha_check($code)) {

                //获得账号信息

                $name = $request->post('mg_name');
                $pwd = $request->post('mg_pwd');

                $exists = Manager::where(['mg_name' => $name, 'mg_pwd' => $pwd])->find();
                if ($exists) {

                    session('mg_id', $exists->mg_id);
                    session('mg_name', $exists->mg_name);
                    if ($online){
                        setcookie('name',$name,time()+3600);
                        setcookie('pwd',$pwd,time()+3600);
                    }



                    //跳转到后台页面
                    $this->redirect('index/index');
                } else {
                    $this->assign('errorinfo', '用户名或密码错误');
                }
            }else{
                $this->assign('errorinfo','验证码错误');
            }
        }

        return $this->fetch();

    }

    public function out(){
        //清除session
        session(null);
        //跳转到登录页面
        $this->redirect('/admin/admin');
    }
}