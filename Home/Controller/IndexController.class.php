<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $userModel = D('User');
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $p = I('p')?I('p'):1;
        $list = $userModel->where(1)->order('user_id')->page($p.',8')->select();
        $this->assign('list',$list);// 赋值数据集
        $count = $userModel->where(1)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        if (IS_POST) {
          if (!$userModel->create()){
               // 如果创建失败 表示验证没有通过 输出错误提示信息
               exit($userModel->getError());
          }else{
               //验证码检测
               $code = I('post.verify');
               $verify = new \Think\Verify();
               if(!$verify->check($code)) {
                 $this->error('验证码写错','',2);
               }
               // 验证通过 可以进行其他数据操作
               $result = $userModel->add(); // 写入数据到数据库
               if($result){
                    // 如果主键是自动增长型 成功后返回值就是最新插入的值
                  $insertId = $result;
                  $this->success('新增成功,页面跳转中', '',3);
                }else {
                  $this->error('新增失败');
                }

          }
        }else {
          $this->display();
        }
    }
    public function vcode() {
      $code = new \Think\Verify();
      $code->fontSize = 20;
      $code->length = 3;
      $code->entry();
    }
}
