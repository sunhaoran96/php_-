<?php
namespace Home\Controller;

use Common\Library\Wechat;

class IndexController extends MediaController
{
    public function index()
    {
        $wechatObj = new Wechat();

//1、服务器校验
//$wechatObj->valid();

//接收用户发过来的数据
        $xmlObj = $wechatObj->receiveMessage();
//判断用户发送数据类型
        $type = $xmlObj->MsgType;
        $content = $xmlObj->Content;
        $toUserName = $xmlObj->FromUserName;
        $fromUserName = $xmlObj->ToUserName;
        switch ($type) {
            case 'text':
                switch ($content) {
                    case '图文':
                        $wechatObj = new \Common\Library\Wechat();
                        $accessToken = $wechatObj->getAccessToken();
                        $response = $this->getMediaList($accessToken, 'news', 0, 10);
                        $result = array();
                        $result[] = $response['item'][1]['content']['news_item'][0];
                        $result[] = $response['item'][2]['content']['news_item'][0];
                        $wechatObj->responseImageTextMsg($toUserName, $fromUserName, $result, count($result));
                        break;

                    default:
                        //调用回复文本消息函数
                        $wechatObj->responseTextMsg($toUserName, $fromUserName, '发送图片即可参加比赛');
                        break;
                }
                break;
            case 'image':
                //将图片信息存储数据库
                //error_log('text1'."\r\n",3,'log.log');
                $data = array();
                $data['mediaId'] = $xmlObj->MediaId;
                $data['picUrl'] = $xmlObj->PicUrl;
                $data['filepath'] = $xmlObj->filepath;
                $imagesModel = M('images');
                $imagesModel->add($data);//添加数据

                $wechatObj->responseTextMsg($toUserName, $fromUserName, '参赛成功');
                break;
            case 'event':
                //判断是哪种事件
                switch ($xmlObj->Event) {
                    case 'subscribe':
                        $wechatObj->responseTextMsg($toUserName, $fromUserName, '欢迎来到测试公众号');
                        break;
                    case 'unsubscribe':
                        error_log(date('Y-m-d H:i:s') . $toUserName . '取消关注' . "\r\n", 3, 'record.log');
                        break;
                    case 'SCAN':
                        $wechatObj->responseTextMsg($toUserName, $fromUserName, '欢迎回来');
                        break;
                    case 'LOCATION':
                        $latitude = (float)$xmlObj->Latitude;//维度
                        $longtitude = (float)$xmlObj->Longtitude;//经度
                        $precision = (float)$xmlObj->Precision;//精确度
                        error_log(date('Y-m-d H:i:s') . $latitude . $longtitude . $precision . "\r\n", 3, 'record.log');
                        break;
                    case 'CLICK':
                        switch ($xmlObj->EventKey) {
                            case 'V1002':
                                $wechatObj->responseTextMsg($toUserName, $fromUserName, '智能机器人.....');
                                break;
                            case 'V1001':
                                $sql=M('news');
                                $result=$sql->order('id desc')->limit(4)->select();
                                $wechatObj->responseImageTextMsg($toUserName, $fromUserName, $result, count($result));
                                break;
                        }
                        break;

                }
        }
    }
}