<?php
namespace Home\Controller;

use Think\Controller;

class JssdkController extends Controller
{

public function index()
{
  $jssdk=new \Common\Library\JSSDK('wx30d73c86c732e528','b39472e0cd806f3ee24814aadda595d7');
  $signPackage = $jssdk->getSignPackage();

  $this->assign('signPackage',$signPackage);

  $this->display();

}


}