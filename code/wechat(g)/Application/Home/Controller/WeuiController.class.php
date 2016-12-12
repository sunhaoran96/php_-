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
        $book = M('tb_bookinfo');
        $books = $book->select();
        $this->assign('books',$books);
        $this->display('flxq');
    }

}