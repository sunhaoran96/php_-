<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『有主机上线』后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/menu/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/menu/css/main.css"/>
    <script type="text/javascript" src="/Public/menu/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/Public/menu/js/jquery-2.2.3.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>自定义菜单</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('home/menu/view');?>"><i class="icon-font">&#xe008;</i>查看菜单</a></li>
                        <li><a href="<?php echo U('home/menu/manage');?>"><i class="icon-font">&#xe005;</i>管理菜单</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>图片素材管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('home/media/addPicture');?>"><i class="icon-font">&#xe017;</i>上传永久图片</a></li>
                        <li><a href="<?php echo U('home/media/managePicture');?>"><i class="icon-font">&#xe037;</i>管理永久图片</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>图文素材管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('home/media/addPictureText');?>"><i class="icon-font">&#xe017;</i>上传永久图文</a></li>
                        <li><a href="<?php echo U('home/media/managePictureText');?>"><i class="icon-font">&#xe037;</i>管理永久图文</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用『有主机上线』后台，建站的首选工具。</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="#"><i class="icon-font">&#xe001;</i>新增作品</a>
                    <a href="#"><i class="icon-font">&#xe005;</i>新增博文</a>
                    <a href="#"><i class="icon-font">&#xe048;</i>新增作品分类</a>
                    <a href="#"><i class="icon-font">&#xe041;</i>新增博客分类</a>
                    <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
           <table class="result-tab" width="100%">
                        <tr>
                            <th width="50px">id</th>
                            <th>title</th>
                            <th>thumb</th>
                            <th>url</th>
                            <th width="50px">操作</th>
                        </tr>
                        <?php if(is_array($medias)): $i = 0; $__LIST__ = $medias;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vo['id']); ?></td>
                                <td><?php echo ($vo['title']); ?></td>
                                <td><?php echo ($vo['thumb']); ?></td>
                                <td><?php echo ($vo['url']); ?></td>
                                <td><a href="/index.php/Home/Media/deletePictureText/id/<?php echo ($vo["id"]); ?>" class="delete"><i class="icon-font"></i></a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
        </div>
        <div class="result-wrap">
            
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        console.log('！');
        $(".delete").click(function () {
            var tag = confirm('真的要删除吗？');
            if(!tag){
                return false;
            }
        })
    })
</script>

</html>