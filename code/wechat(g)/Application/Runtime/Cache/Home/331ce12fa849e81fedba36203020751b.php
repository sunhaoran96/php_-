<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『有主机上线』后台管理</title>
    <link rel="stylesheet" type="text/css" href="/wechat1024/Public/menu/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/wechat1024/Public/menu/css/main.css"/>
    <script type="text/javascript" src="/wechat1024/Public/menu/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/wechat1024/Public/menu/js/jquery-2.2.3.min.js"></script>
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
                    <a href="#"><i class="icon-font">&#xe018;</i>素材管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('home/media/add');?>"><i class="icon-font">&#xe017;</i>上传素材</a></li>
                        <li><a href="<?php echo U('home/media/manage');?>"><i class="icon-font">&#xe037;</i>管理素材</a></li>
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
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
<div class="result-content">
    <ul class="sys-info-list">
        <form action="<?php echo U('home/menu/create');?>" method="post" >
        <?php $i=1;?>
        <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <input type="text" value="<?php echo ($vo->name); ?>" name="name"/>
            <span>
                <?php $type=$vo->type; ?>
                <?php if($type=='click'): ?><input type="radio" value="click" name="type<?php echo ($i); ?>" checked/>点击
                <input type="radio" value="view" name="type<?php echo ($i); ?>" /> 链接
                <?php else: ?>
                    <input type="radio" value="click" name="type<?php echo ($i); ?>" /> 点击
                    <input type="radio" value="view" name="type<?php echo ($i); ?>" checked="checked" /> 链接<?php endif; ?>
            </span>
            <input type="text" name="value" value="<?php echo ($vo->key); echo ($vo->url); ?>"/>&nbsp;<a href="#" class="add"><i class="icon-font"></i></a>&nbsp;<a href="#" class="delete"><i class="icon-font"></i></a>
            <ul style="margin-left:2em;">

                <?php $sub_button = $vo->sub_button;$j=1;?>
                <?php if(is_array($sub_button)): $i = 0; $__LIST__ = $sub_button;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_vo): $mod = ($i % 2 );++$i;?><li>
                <input type="text" value="<?php echo ($sub_vo->name); ?>" name="name"/><span>
                <?php $type=$sub_vo->type; ?>
                <?php if($type=='click'): ?><input type="radio" value="click" name="type<?php echo ($i); echo ($j); ?>" checked/> 点击
                <input type="radio" value="view" name="type<?php echo ($i); echo ($j); ?>" /> 链接
                <?php else: ?>
                    <input type="radio" value="click" name="type<?php echo ($i); echo ($j); ?>" />点击 
                    <input type="radio" value="view" name="type<?php echo ($i); echo ($j); ?>" checked="checked" /> 链接<?php endif; ?>
            </span>
            <input type="text" name="value" value="<?php echo ($sub_vo->key); echo ($sub_vo->url); ?>"/>&nbsp;<a href="" class="delete"><i class="icon-font"></i></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </li>
        <?php $i++; endforeach; endif; else: echo "" ;endif; ?>
        <input type="button" value="创建菜单" id="createMenu" />
        </form>
    </ul>
</div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://user.qzone.qq.com/913737303/infocenter?ptsig=fwuIGucgSq7VB3N8vMjtbG8F-lEbvyN44NaOi-8MrHw_" title="有主机上线设计" target="_blank">jscss.me</a></span>
                    </li>
                    <li>
                        <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="http://user.qzone.qq.com/913737303/infocenter?ptsig=fwuIGucgSq7VB3N8vMjtbG8F-lEbvyN44NaOi-8MrHw_"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="JS-前端开发" title="JS-前端开发"></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
$("#createMenu").click(function(){
var menu = new Array(); //存储菜单对象
    //一级菜单
    $(".sys-info-list>form>li").each(function(){
         var menuObj=new Object();
         menuObj.
         name=$(this).children("input[name='name']").val();
         menuObj.type=$(this).children('span').children("input[type='radio']").val();
         if(menuObj.type=="click"){
            menuObj.key=$(this).children("input[name='value']").val();
         }else{
            menuObj.url=$(this).children("input[name='value']").val();
         }
         //组织子菜单数据
         menuObj.sub_button=new Array();
         $(this).children("ul").children("li").each(function(){
            var sub_menuObj=new Object();
             sub_menuObj.name=$(this).children("input[name='name']").val();
             sub_menuObj.type=$(this).children('span').children("input[type='radio']").val();
             if(sub_menuObj.type=="click"){
                sub_menuObj.key=$(this).children("input[name='value']").val();
             }else{
                sub_menuObj.url=$(this).children("input[name='value']").val();
             }
             menuObj.sub_button.push(sub_menuObj);
         });
        menu.push(menuObj);
    });
    var url=$("form").attr('action');
    $.post(url,{'menu':menu},function(data){
        if(data=='ok'){
            alert('菜单创建成功');
        }else{
            alert(data);
            window.loacation.href="<?php echo U('home/menu/view');?>";
        }
    });
    
}) ;
//点击添加按钮时，添加一个子菜单
var num=46;
$(".sys-info-list a.add").click(function(){
    if($(this).parent().children('ul').children().length>=5){
        alert("最多添加5个子菜单");
        return false;
    }
    var i =$(this).parent().index()+1;
    var j=$(this).parent().children('ul').children().length+1;
    //创建li后再添加li
    var li = $("<li></li>");
    var name='<input type="text" value="" name="name">';
    var span='<span> <input type="radio" value="click" checked name="type'+i+j+'"> 点击 <input type="radio" value="view" name="type'+i+j+'"> 链接 </span>';
    var a='&nbsp;<a href="#" class="delete"><i class="icon-font"></i></a> ';
    var value='<input type="text" name="value" value="">';
    li.append(name);
    li.append(span);
    li.append(value);
    li.append(a);
    $(this).parent().children('ul').append(li);
    num++;
    return false;
});
//点击删除按钮时，删除相应的菜单（只是在客户端删除）
$(".sys-info-list a.delete").click(function(){
    $(this).parent().remove();
    window.setTimeout("alert('此菜单已临时删除，单击创建菜单按钮即会彻底删除')",300)
    return false;
});
</script>
</html>