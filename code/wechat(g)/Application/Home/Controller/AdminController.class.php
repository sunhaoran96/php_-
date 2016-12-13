<?php
namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller
{

    public function index()
    {

    }




//管理图书
    public function manageBooks()
    {
        $bookTypeModel = M('tb_bookinfo');
        $books = $bookTypeModel->select();
        $this->assign('books', $books);
        $this->display('manageBooks');
        //dump($books);
    }
//添加图书
    public function addBook(){
        $book=M('tb_bookinfo');
//        $condition=array();
//        $condition['bookid']=1;
        $book=$book->select();
        $this->assign('book',$book);
        $this->display();
    }
    //添加图书后跳转
    public function store(){
        //获取post数据
        $data=I('post.');
//        $data['bookid']=2;
//        $data['bookname']=1;
//        $data['booktypename']=1;
//        $data['bookstoremount']=1;

        //dump($data);
        //插入到数据表中
        $books = M('tb_bookinfo');
        $result = $books->add($data);

        //dump($result);
        // 善后处理
        if ($result) {
            $this->success( '数据添加成功！','/home/admin/manageBooks');
        } else {
            header("Location:../../manageBooks");
        }
    }


    //获取要修改图书的内容
    public function revamp(){
        $btype=M('tb_booktypeinfo');
        $condition=array();
        //$condition['bookid']=1;  //外键中分类id为1
        $btype=$btype->where($condition)->select();
        $this->assign('btype',$btype);

        $bookid =I('get.bookid');
        $books=M('tb_bookinfo');
        $dd['bookid']=$bookid;
        //dump($dd);
        $books=$books->where($dd)->select();
        $books=$books[0];
        //dump($books);
        $this->assign('books',$books);
        $this->display();
    }
    //修改内容
    public function update(){
        //获取post数据
        $data=I('post.');
        //dump($data);
        $id =I('get.id');
        //dump($id);
        $bgoods=M('tb_bookinfo');
        $dd['bookid']=$id;
        //dump($dd);
        $result=$bgoods->where($dd)->save($data);
        if ($result) {
            $this->success( '数据修改成功！','/home/admin/manageBooks');
        } else {
            header("Location:../../manageBooks");
        }
    }

    //删除图书
    public function deletebook(){
        $bookid = $_GET['bookid'];
        $booktype = M('tb_bookinfo');
        if($booktype->where("bookid=$bookid")->delete()){
            header("Location:../../manageBooks");
        }else{
            $this->error('删除失败');
        }
    }

    //管理图书分类
    public function manageBookType()
    {
        $TypeModel = M('tb_booktypeinfo');
        $types = $TypeModel->select();
        $this->assign('types', $types);
       $this->display('manageBookType');
        //dump($types);
    }
    //添加图书分类
    public function addBookType(){
        $type = M('tb_booktypeinfo');
//        $condition=array();
//        $condition['bookid']=1;
        $type=$type->select();
        $this->assign('type',$type);
        $this->display();
        //dump($type);
    }
    //添加图书分类后跳转
    public function store1(){
        //获取post数据
        $data=I('post.');
        //dump($data);
        //插入到数据表中
        $types=M('tb_booktypeinfo');
        //dump($types);
        $result=$types->add($data);

        //dump($result);
        // 善后处理
        if ($result) {
            $this->success( '数据添加成功！','/home/admin/manageBookType');
        } else {
            header("Location:../../manageBookType");
        }
    }
    //获取要修改图书分类的内容
    public function revampType(){
        $btype=M('tb_booktypeinfo');
        $condition=array();
        //$condition['bookid']=1;  //外键中分类id为1
        $btype=$btype->where($condition)->select();
        $this->assign('btype',$btype);

        $id =I('get.id');
        $books=M('tb_booktypeinfo');
        $dd['id']=$id;
        //dump($dd);
        $books=$books->where($dd)->select();
        $books=$books[0];
        //dump($books);
        $this->assign('types',$books);
        $this->display();
    }
    //修改图书分类内容
    public function update2(){
        //获取post数据
        $data=I('post.');
        //dump($data);
        $id =I('get.id');
        //dump($id);
        $btypes=M('tb_booktypeinfo');
        //$dd['id']=$id;
        //dump($dd);
        $result=$btypes->where("id=$id")->save($data);
        if ($result) {
            $this->success( '数据修改成功！','/home/admin/manageBookType');
        } else {
            header("Location:../../manageBookType");
        }
    }

    //删除图书类型
    public function deletetype()
    {
        $id = $_GET['id'];
        $booktype = M('tb_booktypeinfo');
        if ($booktype->where("id=$id")->delete()) {
            header("Location:../../manageBookType");
        } else {
            $this->error('删除失败');
        }
    }
    //管理订单
    public function order1()
    {
        $bookTypeModel = M('tb_order');
        $orders = $bookTypeModel->select();
        $this->assign('orders', $orders);
        $this->display('order1');
        //dump($books);
    }

    //获取订单详情的内容
    public function details(){
//        $btype=M('tb_bookinfo');
//        $condition=array();
//        $condition['bookid']=1;  //外键中分类id为1
//        $btype=$btype->where($condition)->select();
//        $this->assign('btype',$btype);


        $id =I('get.id');
        $orders=M('tb_order');
//        $dd['id']=$id;
//        dump($dd);
        $orders=$orders->where("id=$id")->select();
        //dump($orders);
        $orders=$orders[0];
        //dump($bgoods);
        $this->assign('orders',$orders);
        $this->display();
    }
    //修改订单详情
    public function update1(){
        //获取post数据
        $data=I('post.');
        //dump($data);
        $id =I('get.id');
        //dump($id);
        $bgoods=M('tb_order');
//        $dd['id']=$id;
        //dump($id);
        $result=$bgoods->where("id=$id")->save($data);
        //dump($result);
        if ($result) {
            $this->success( '数据修改成功！','/home/admin/order1');
        }else {
            header("Location:../../order1");
        }
    }
    //删除订单
    public function deleteorder()
    {
        $orderid = $_GET['orderid'];
        $booktype = M('tb_order');
        if ($booktype->where("orderid=$orderid")->delete()) {
            header("Location:../../order1");
        } else {
            $this->error('删除失败');
        }
    }

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
    public function deletemanager(){
        $id = $_GET['id'];
        $manage = M('tb_manager');
        if($manage->where("id=$id")->delete()){
            header("Location:../../admininfo");
        }else{
            $this->error('删除失败');
        }
    }
        /**
         * 管理员--结束
         */


    /**
    *登陆验证
    */

    //验证是否账号密码
    function checklogin()
    {
        //此处多余可自行改为Model自动验证
        if (empty($_POST['username'])) {
            $this->error('帐号不能为空！');
        } elseif (empty($_POST['password'])) {
            $this->error('密码不能为空！');
        }
        $adminTable = M('tb_manager');
        $map = array();
        $map['AdminName'] = $_POST['username'];
        $map['AdminPwd'] = $_POST['password'];
        $user = $adminTable->where($map)->select();
        //dump($user);
        if(empty($user)){
            $this->error('账号密码错误！');
        }else{
            $this->success('欢迎您'.$map['AdminName'],"/home/admin/manageBooks");
    }


    }

    //退出登录操作
    function logout()
    {
        if (!empty($_SESSION[C('USER_AUTH_KEY')])) {
            unset($_SESSION[C('USER_AUTH_KEY')]);
            $_SESSION = array();
            //session_destroy();
            $this->assign('jumpUrl', '/home/admin/login');
            $this->success('登出成功');
        } else {
            $this->error('已经登出了');
        }
    }
}
