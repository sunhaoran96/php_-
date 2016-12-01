<?php
namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller
{

    public function index()
    {

    }
    public function adminInfo(){

            $access_token=\Common\Library\Wechat::getAccessToken();
            $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$access_token";

            $menuStr=\Common\Library\Wechat::menuView($url);
            $menu = json_decode($menuStr);
            $this->assign("menu",$menu->menu->button);

            $this->display();
        }
}