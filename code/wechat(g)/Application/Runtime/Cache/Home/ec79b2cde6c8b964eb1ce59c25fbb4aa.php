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
    <link href="/wechat(g)/Public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/wechat(g)/Public/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/wechat(g)/Public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/wechat(g)/Public/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
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
                                <a href="adminInfo.html">查看管理员信息</a>
                            </li>
                            <li>
                                <a href="register.html">添加管理员</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa fa-edit fa-fw"></i>自定义菜单<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="menu.html">查看菜单</a>
                            </li>
                            <li>
                                <a href="manageMenu.html">管理菜单</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                                <li class="active">
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>素材管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active">
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>图片素材管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addPicture.html">上传图片素材</a>
                            </li>
                            <li>
                                <a href="managePicture.html">管理图片素材</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                            <li>
                                <li class="active">
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>图文素材管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addPictureText.html">上传图文素材</a>
                            </li>
                            <li>
                                <a href="managePictureText.html">管理图文素材</a>
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
                                <a href="manageBooks.html">管理图书</a>
                            </li>
                            <li>
                                <a href="manageBookType.html">管理图书分类</a>
                            </li>
                            <li>
                                <a href="addBook.html">添加图书</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i>订单管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="order1.html">查看订单信息</a>
                            </li>
                            <li>
                                <a href="order2.html">管理订单</a>
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
                <h5><a href="#">首页</a>&nbsp;&nbsp;>>&nbsp;订单管理</h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        管理订单
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Rendering engine: activate to sort column descending" style="width: 174px;" aria-sort="ascending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Browser: activate to sort column ascending" style="width: 201px;">订单号</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Platform(s): activate to sort column ascending" style="width: 183px;">图书编号</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">订购产品</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">订购数量</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">订单状态</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">收货状态</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">总价</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label=
                                        "Engine version: activate to sort column ascending" style="width: 151px;">操作</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>


                            </tr>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>

                            </tr>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>

                            </tr>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>

                            </tr>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>

                            </tr>
                            <tr class="gradeA">
                                <td class="sorting_1">01</td>
                                <td>20161130001</td>
                                <td>123456789</td>
                                <td>小王子（精装）</td>
                                <td>1</td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
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
                                    </form>
                                </td>
                                <td>
                                    <form action="?action=edit&amp;edit=status&amp;id=10" method="post" name="wfform10">
                                        <select name="wfstatus" onchange="document.wfform10.submit()">
                                            <option value="">--请选择--</option>
                                            <option value="未收货">未收货</option>
                                            <option value="已签收">已签收</option>
                                            <option value="已确认">已确认</option>
                                            <option value="拒收">拒收</option>
                                            </select>
                                    </form>
                                </td>
                                <td>￥18.99</td>
                                <td><a href="?set=ddinfo&amp;action=edit&amp;id=10" class="g">【查看详情】</a>
                                    <br><a href="?action=del&amp;delok=0&amp;id=10" class="r" onclick=
                                            "return confirm('确认要删除订单吗？请慎重哦！')">【× 删除】</a>
                                </td>

                            </tr>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- /.col-lg-6 -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/wechat(g)/Public/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/wechat(g)/Public/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/wechat(g)/Public/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/wechat(g)/Public/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/wechat(g)/Public/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/wechat(g)/Public/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/wechat(g)/Public/admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>