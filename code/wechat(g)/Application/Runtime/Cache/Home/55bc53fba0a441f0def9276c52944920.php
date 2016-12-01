<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>JS-SDK测试</title>
	<link href="/Public/css/weui.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<a href="#" class="weui_btn weui_btn_primary"  id="photo">从手机相册选图片</a>
<a href="#" class="weui_btn weui_btn_primary"  id="scan">扫一扫</a>
</body>
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
	wx.config({
		debug: true,
		appId: "<?php echo ($signPackage['appId']); ?>",
		timestamp: "<?php echo ($signPackage['timestamp']); ?>",
		nonceStr: "<?php echo ($signPackage['nonceStr']); ?>",
		signature: "<?php echo ($signPackage['signature']); ?>",
		jsApiList: ['chooseImage','scanQRCode']
	});
	wx.ready(function(){
		//加载完成就检测网络情况
		wx.getNetworkType({
			success: function (res) {
				var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi
			}
		});
	});

	document.getElementById("photo").onclick=function(){
		wx.chooseImage({
			count: 1, // 默认9
			sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
			sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
			success: function (res) {
				var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
			}
		});
	}
	document.getElementById("scan").onclick=function(){
		wx.scanQRCode({
			needResult: 1, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
			scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
			success: function (res) {
				var result = res; // 当needResult 为 1 时，扫码返回的结果
				for(var i in res){
					alert(res[i]);
				}

				return false;
			}
		});
	}
</script>
</html>