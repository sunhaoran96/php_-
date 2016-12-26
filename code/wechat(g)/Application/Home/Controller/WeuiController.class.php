<?php
//控制微店页面
namespace Home\Controller;

use Think\Controller;

class WeuiController extends Controller
{
    //全部商品
    public function index()
    {
        $book = M('tb_bookinfo');
        $books = $book->select();
        $this->assign('books',$books);
        $this->display();
    }
    
    //搜索
    public function search(){
        header("Content-type:text/html;charset=utf-8");
        $Search =D('tb_bookinfo');
        $keywords=$_GET['keywords'];
        $data=$Search->field('bookname')->select();
        // dump($data);
        $str = serialize($data);
        //dump($str);
        if(strstr($str, $keywords)){
            $result= $Search->where("BookName like '%$keywords%'")->select();
            $this->assign('book',$result);
            $this-> display(search);
        }else{

            $this->display(none);
        }
    }

    //分类精选
    public function xjfl()
    {
        $bookTypeModel = M('tb_booktypeinfo');
        $bookTypes = $bookTypeModel->select();
        //var_dump($bookTypes);
        $this->assign('bookTypes',$bookTypes);
        $this->display('xjfl');
        //dump($books);
    }

    //分类详情页
    public function flxq()
    {
        $booktypeid =I('get.booktypeid');
        $booktype=M('tb_booktypeinfo');
        //dump($booktype);
        $typename = $booktype->where("booktypeid=$booktypeid")->getField('booktypename');
        //dump($typename);
        $book = M('tb_bookinfo');
        $books = $book->where("booktypename='$typename'")->select();
        $this->assign('books',$books);
        $this->display('flxq');
    }


    //buy.html获取数据
    public function buy(){
        $bookid =I('get.bookid');
        $books=M('tb_bookinfo');
        $dd['bookid']=$bookid;
        //dump($dd);
        $books=$books->where($dd)->select();
        $books=$books[0];
        //dump($books);
        $this->assign('books',$books);
        $this->display('buy');
    }

    //order.html 
    public function order(){
        //将表单内容提交到order表
        $data=I('post.');
        //dump($data);
        //插入到数据表中
        $types=M('tb_order');
        // //dump($types);
        $result=$types->add($data);
        // //dump($result);

        //从bookinfo获取数据
        $bookid = I('get.bookid');
        //dump($bookid);
        $books = M('tb_bookinfo');
        $order = M('tb_order');
        $dd['bookid']=$bookid;
        //dump($dd);
        $order=$order->where($dd)->select();
        $order=$order[0];
        //dump($books);
        $books=$books->where($dd)->select();
        $books=$books[0];
        $this->assign('books',$books);
        $this->assign('order',$order);
        $this->display('order');
    }
    //完善订单内容
    public function update(){
        //获取post数据
        $data=I('post.');
        dump($data);
        $id =I('post.id');
        dump($id);
        $bgoods=M('tb_order');
        //$dd['id']=$id;
        //dump($id);
        $result=$bgoods->where("id=$id")->save($data);
        //ump($result);
        if ($result) {
            $this->redirect('/home/weui/allOrder');
        }else {
            $this->error('提交失败！');
        }
    }

    //全部订单页
    public function allOrder(){
        $order = M('tb_order');
        $orders = $order->select();
        $this->assign('orders',$orders);
        $this->display('allOrder');

    }

}