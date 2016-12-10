<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{


/**
 * 管理员--开始
 */
    public function Register(){
    $this->display();
}
 
//添加管理员 
public function insret(){
        $Form   =   D('tb_manager');
        if($Form->create()) {

            $result =   $Form->add();

            if($result) {

                $manager=$Form->select();
                $this->assign('manager',$manager);
                $this->display('adminInfo');

            }else{

                $this->error('写入错误！');
            }

        }

    }

//查看管理管理员    
   public function adminInfo(){
        $Form=D('tb_manager');
        $manager = $Form->select();
        $this->assign('manager',$manager);
        $this->display('adminInfo');
    }

//删除管理员
 public function del(){
  
  $Form = D("tb_manager"); //获取当期模块的操作对象 
  $id = $_GET['id'];
   $where = 'id='.$id; 
  //dump($where); 
  $list=$Form->where($where)->delete();  
  //dump($list);
  if($list!==false) {
     $this->success("成功删除{$list}条！", U("home/admin/adminInfo")); 
  }else{   
    $this->error('删除失败！');  
  } 
}
/**
 * 管理员--结束
 */

}

