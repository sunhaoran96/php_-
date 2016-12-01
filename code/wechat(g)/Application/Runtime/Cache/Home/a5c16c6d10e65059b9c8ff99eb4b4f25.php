<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>收货地址</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet"/>
    <link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<!--表单开始-->
<div class="weui_cells weui_cells_form">
    <div class="weui_media_box weui_media_text">
        <h4 class="weui_media_title">新增收货地址</h4>
    </div>
    <div class="weui_panel_hd">联系人</div>
    <div class="weui_cell">
        <div class="weui_cell_hd"><label class="weui_label">姓名</label></div>
        <div class="weui_cell_bd weui_cell_primary">
            <input class="weui_input" type="tel" placeholder="请填写收货人的姓名">
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_hd"><label class="weui_label">手机</label></div>
        <div class="weui_cell_bd weui_cell_primary">
            <input class="weui_input" type="tel" placeholder="请填写收货手机号码">
        </div>
    </div>
    <div class="weui_panel_hd">收货地址</div>
    <div class="weui_cell">
        <div class="weui_cell_hd"><label class="weui_label">地址</label></div>
        <div class="weui_cell_bd weui_cell_primary">
            <input class="weui_input" type="tel" placeholder="请填写收货地址">
        </div>
    </div>
<!--表单结束-->
    <!--提交按钮开始-->
    <a href="javascript:;" class="weui_btn weui_btn_plain_primary">提交</a>
    <!--提交按钮结束-->
</body>
</html>