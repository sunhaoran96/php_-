<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>新旧书店后台</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <h2 style="color: indigo">&nbsp;&nbsp;新旧书店后台管理系统</h2>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    欢迎您,**
                </a>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>设置</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>退出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> 管理员<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('home/admin/adminInfo');?>">查看管理员信息</a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/register');?>">添加管理员</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>素材管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i>图片素材管理<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo U('home/media/addPicture');?>">上传图片素材</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo U('home/media/managePicture');?>">管理图片素材</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i>图文素材管理<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo U('home/media/addPictureText');?>">上传图文素材</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo U('home/media/managePictureText');?>">管理图文素材</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>图书管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('home/admin/manageBooks');?>">管理图书</a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/addBook');?>">添加图书</a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/manageBookType');?>">管理图书分类</a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/addBookType');?>">添加图书分类</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i>订单管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('home/admin/order1');?>">查看订单信息</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h5><a href="#">首页</a>&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;订单详情</h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        订单修改
                    </div>
                    <div class="panel-body">
                        <div class="row" style="margin: auto" />
                        <div class="col-lg-6">
                            <form action="/home/admin/update1/id/<?php echo ($orders["id"]); ?>" method="post" id="myform" name="myform" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>订单状态</label>
                                    <select class="form-control" name="poststatus" value="<?php echo ($orders["poststatus"]); ?>">
                                        <option value="未处理">未处理</option>
                                        <option value="未发货">未发货</option>
                                        <option value="已发货">已发货</option>
                                        <option value="已签收">已签收</option>
                                        <option value="已确认">已确认</option>
                                        <option value="拒收">拒收</option>
                                        <option value="短信确认">短信确认</option>
                                        <option value="短信撤单">短信撤单</option>
                                        <option value="电话不通">电话不通</option>
                                        <option value="联系不上">联系不上</option>
                                        <option value="不要了">不要了</option>
                                        <option value="考虑中">考虑中</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>收货状态</label>
                                    <select class="form-control" name="recevstatus">
                                        <option value="未收货">未收货</option>
                                        <option value="已签收">已签收</option>
                                        <option value="已确认">已确认</option>
                                        <option value="拒收">拒收</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>配送方式</label>
                                    <select class="form-control" name="mode" value="<?php echo ($books["mode"]); ?>">
                                        <option>书店送货</option>
                                        <option>到店自提</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>收货地址</label>
                                    <input type="text" class="form-control" name="receiveaddress" value="<?php echo ($orders["receiveaddress"]); ?>">
                                </div>
                                <div class="form-group">
                                    <label>收货人联系方式</label>
                                    <input type="text" class="form-control" name="receivertel" value="<?php echo ($orders["receivertel"]); ?>">
                                </div>
                                <button type="submit" class="btn btn-info">修改</button>
                                <button type="submit" class="btn btn-default">返回</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/Public/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/Public/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/Public/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>