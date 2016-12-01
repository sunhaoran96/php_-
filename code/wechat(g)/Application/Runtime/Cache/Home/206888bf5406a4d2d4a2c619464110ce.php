<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>购物车</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet">
    <link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet">
    <style>
        html,body{
            height:100%;
        }
        .swiper-container {
            width: 100%;
        }

        .swiper-container img {
            display: block;
            width: 100%;
        }
        .weui_tab_bd .content img{
            width:100%;
            display:block;
        }
    </style>
</head>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">
        <!--导航栏开始-->
        <div class="weui_tab">
            <div class="weui_navbar">
                <a class="weui_navbar_item weui_bar_item_on">
                    购物车
                </a>
            </div>
            <div class="weui_tab_bd">
                <!--第一个选项卡-->
                <div class="content">
                    <div style="height: 20px">
                        <a class="weui_cell" href="index.html">
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/c1.jpg" alt="icon" style="width:15px;height:15px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_ft">
                                选择商品
                            </div>
                        </a>
                    </div>
                    <div class="weui_cells weui_cells_access">
                        <span class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd" style="margin-right: 10px" id="allcheck">
                                <input type="checkbox"  name="checkAll" id="checkAll" onclick="setSelectAll();">
                            </div>
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a5.jpg" alt="icon" style="width:40px;height:40px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>从你的全世界路过</p>
                            </div>
                            <div class="weui_cell_ft">
                                ￥19.9
                            </div>
                        </span>
                        <span class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd" style="margin-right: 10px" id="allcheck" />
                                <input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();">
                            </div>
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a5.jpg" alt="icon" style="width:40px;height:40px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>从你的全世界路过</p>
                            </div>
                    <div class="weui_cell_ft">
                        ￥19.9
                    </div>
                        </span>
                        <span class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd" style="margin-right: 10px" id="allcheck">
                                <input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();" >
                            </div>
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a5.jpg" alt="icon" style="width:40px;height:40px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>从你的全世界路过</p>
                            </div>
                            <div class="weui_cell_ft">
                                ￥19.9
                            </div>
                        </span>
                        <span class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd" style="margin-right: 10px" id="allcheck">
                                <input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();">
                            </div>
                            <div class="weui_cell_hd">
                                <img src="/wechat(g)/Public/bookstore/images/a5.jpg" alt="icon" style="width:40px;height:40px;margin-right:5px;display:block">
                            </div>
                            <div class="weui_cell_bd weui_cell_primary">
                                <p>从你的全世界路过</p>
                            </div>
                            <div class="weui_cell_ft">
                                ￥19.9
                            </div>
                        </span>
                        <span class="weui_cell" href="flxq.html">
                            <div class="weui_cell_hd" style="margin-right: 10px">
                                <input type="radio" name="radio" id="selAll" onclick="selectAll();"/>全选
                            </div>
                            <div >
                                <p>￥19.9</p>
                            </div>
                        </span>

                    </div>

                </div>
                <!--第一个选项卡-->


            </div>
        </div>
        <!--导航栏结束-->
    </div>

    <div class="weui_tabbar" height="100">

        <a href="index.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f5.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">全部商品</p>
        </a>
        <a href="xjfl.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f8.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">分类精选</p>
        </a>
        <a href="list.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f7.jpg" alt="" >
            </div>
            <p class="weui_tabbar_label">我的订单</p>
        </a>
        <a href="list_fengcai.html" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="/wechat(g)/Public/bookstore/images/f6.jpg" alt="">
            </div>
            <p class="weui_tabbar_label">购物车</p>
        </a>
    </div>
</div>
</div>
</body>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/wechat(g)/Public/bookstore/js/swiper.js' charset='utf-8'></script>
<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
    $(".weui_navbar .weui_navbar_item").click(function () {
        $(".weui_navbar .weui_navbar_item").removeClass(
                "weui_bar_item_on"
        );//谁都没有weui_bar_item_on
        $(this).addClass("weui_bar_item_on");//点谁谁有
        //判断点击的是第几个选项卡
        var which=$(this).index();

        //让所有的内容区域隐藏
        $(".weui_tab_bd .content").hide();

        //按索引显示对应的内容
        $(".weui_tab_bd .content:eq("+which+")").show();
        console.log(which);


    })
</script>
<script language="javascript">

    //选中全选按钮，下面的checkbox全部选中
    var selAll = document.getElementById("selAll");
    function selectAll()
    {
        var obj = document.getElementsByName("checkAll");
        if(document.getElementById("selAll").checked == false)
        {
            for(var i=0; i<obj.length; i++)
            {
                obj[i].checked=false;
            }
        }else
        {
            for(var i=0; i<obj.length; i++)
            {
                obj[i].checked=true;
            }
        }

    }

    //当选中所有的时候，全选按钮会勾上
    function setSelectAll()
    {
        var obj=document.getElementsByName("checkAll");
        var count = obj.length;
        var selectCount = 0;

        for(var i = 0; i < count; i++)
        {
            if(obj[i].checked == true)
            {
                selectCount++;
            }
        }
        if(count == selectCount)
        {
            document.all.selAll.checked = true;
        }
        else
        {
            document.all.selAll.checked = false;
        }
    }

    //反选按钮
    function inverse() {
        var checkboxs=document.getElementsByName("checkAll");
        for (var i=0;i<checkboxs.length;i++) {
            var e=checkboxs[i];
            e.checked=!e.checked;
            setSelectAll();
        }
    }

</script>
</html>