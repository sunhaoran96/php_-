<?php
namespace Home\Controller;

use Think\Controller;

class MenuController extends Controller
{

public function index()
{
//创建菜单
$access_token=\Common\Library\Wechat::getAccessToken();
$url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$access_token";
$menu='{
      "button":[
      {
           "name":"书店介绍",
           "sub_button":[
           {  
               "type":"click",
               "name":"书店首页",
               "key":"V1001"
            },
            {
               "type":"click",
               "name":"门牌号",
               "key":"V1002"
            },
            {
               "type":"view",
               "name":"咨询客服",
               "url":"http://v.qq.com/"
            }]
       },   
     {	
           "name":"新旧精选",
           "sub_button":[
           {	
               "type":"view",
               "name":"新书上架",
               "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx549c629a60d7a7ff&redirect_uri=http%3A%2F%2Fwqba96.cn%2Fhome%2Fjssdk%2Findex&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect"
      
            },
            {
               "type":"click",
               "name":"店铺活动",
               "key":"V1001"
            }]
      },
       {	
          "type":"view",
          "name":"微店",
          "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx549c629a60d7a7ff&redirect_uri=http%3A%2F%2Fwqba96.cn%2Fhome%2Fweui%2Findex&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect"
      }]

 }';
 $result=\Common\Library\Wechat::createMenu($url,$menu);
 dump($result);
}

/**
 * 查看菜单
 */
public function view(){
 $access_token=\Common\Library\Wechat::getAccessToken();
  $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$access_token";

  $menuStr=\Common\Library\Wechat::menuView($url);
  $menu = json_decode($menuStr);
  $this->assign("menu",$menu->menu->button);
  $this->display();
}

/**
 * 创建菜单
 */
public function manage(){
  $access_token=\Common\Library\Wechat::getAccessToken();
  $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$access_token";

  $menuStr=\Common\Library\Wechat::menuView($url);
  $menu = json_decode($menuStr);
  $this->assign("menu",$menu->menu->button);

  $this->display();
}
public function create(){
  $access_token=\Common\Library\Wechat::getAccessToken();
  $url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$access_token";
  $menu=I('menu');//主要是这里数据的组织
  $menuStr=array();
  $menuStr['button']=$menu;
  $menu=json_encode($menuStr,JSON_UNESCAPED_UNICODE);
  error_log($menu,3,'log.txt');
  $result=\Common\Library\Wechat::createMenu($url,$menu);

  echo $result['errmsg'];
}

}