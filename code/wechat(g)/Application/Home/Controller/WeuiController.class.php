<?php
namespace Home\Controller;

use Think\Controller;

class WeuiController extends Controller
{
    public function index()
    {
   		//接收code的值
   		$code=I('code');
//   		dump($code);

   	//2、获取access_token的值
   	$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxfd74994b21325e2d&secret=7de309fbc9c84519564a505efd505492&code=$code&grant_type=authorization_code";
   	$curl = curl_init ($url);
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    $result = curl_exec ($curl);
    curl_close ($curl);
    if(curl_errno()==0){
    	$result = json_decode($result);
//   	dump($result);
    	//3、拉取用户信息
    	$access_token=$result->access_token;
    	$openid=$result->openid;
    	$url2="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
    	$curl = curl_init ($url2);
    	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    	curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
    	curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
   		$result2 = curl_exec ($curl);
   		if(curl_errno()==0){
   			//dump(json_decode($result2));
        //把用户信息分配到视图文件中
        $this->assign('user', json_decode($result2));

   		}else{
   			dump(curl_errno($curl));
   		}
      }else {
        dump(curl_errno($curl));
    }
      $signature = $this->signature();
      $this->assign('signature',$signature);
      $this->display();

    }

    /**
     * 获取签名
     */
    public function signature(){
      $time = time();

      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      $string='jsapi_ticket=sM4AOVdWfPE4DxkXGEs8VJqf87y-P2qGzhjBna19ysKwjPlGWKOA2kNzKlLWR2MPFC6EBBdHpiLettgLMd2UFw&noncestr=zhangzhimin&timestamp='.$time.'&url='.$url;
     // $string="jsapi_ticket=sM4AOVdWfPE4DxkXGEs8VJqf87y-P2qGzhjBna19ysKwjPlGWKOA2kNzKlLWR2MPFC6EBBdHpiLettgLMd2UF&noncestr=zhangzhimin&timestamp=1476750043&url=http://wechat.wbblqz.com/home/weui/index";
      $signature=sha1($string);
      $arr=array();
      $arr['signature']=$signature;
      $arr['time'] = 1476750043;

      return $arr;
    }
    public function deletePicture(){
       $id = $_GET['id'];
        $imagetext = M('images');
        if($imagetext->where("id=$id")->delete()){
            header("Location:../../managePicture");
        }else{
            $this->error('删除失败');
        }
    }
}