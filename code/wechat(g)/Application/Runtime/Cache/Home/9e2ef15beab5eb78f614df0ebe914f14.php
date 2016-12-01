<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>新旧书店</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="/wechat(g)/Public/bookstore/lib/weui.min.css" type="text/css" rel="stylesheet"/>
	<link href="/wechat(g)/Public/bookstore/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
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
        .class{width: 3000px; height: 219px;background: url("/wechat(g)/Public/bookstore/images/img1.png") 
        no-repeat;

}
        .class1{ height: 219px;background: url("/wechat(g)/Public/bookstore/images/img2.jpg") no-repeat;
}
        .class2{ height: 219px;background: url("/wechat(g)/Public/bookstore/images/img3.jpg") no-repeat;
}
        .class3{ height: 219px;background: url("/wechat(g)/Public/bookstore/images/img4.jpg") no-repeat;
}
#div{text-align:bottom;margin-top: -40px; color: white;}
    </style>
</head>
<body>
	<div class="weui_tab">
  <div class="weui_tab_bd">
        <!--顶部幻灯片开始-->
      <div class="swiper-container" data-space-between='5' data-pagination='.swiper-pagination' data-autoplay="1000">
          <div class="swiper-wrapper">
              <a href="content.html" class="swiper-slide"><div class="class"></div>
              <p id="div">说走就走！一次奇幻冒险的旅行</p></a>
              <a  href="content.html" class="swiper-slide"><div class="class1"></div>
              <p id="div">世界上的另一个我</p></a>
              <a href="content.html" class="swiper-slide"><div class="class2"></div>
              <p id="div">爱是拯救世界的唯一方式</p></a>
              <a  href="content.html" class="swiper-slide"><div class="class3"></div>
              <p id="div">一个人住的第几年</p></a>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
      </div>
      <!--顶部幻灯片结束-->
         <!--导航栏开始-->
        <div class="weui_tab">
            <div class="weui_navbar">
                <a class="weui_navbar_item ">
                    新书推荐
                </a>
                <a class="weui_navbar_item">
                    畅销书单
                </a>
                <a class="weui_navbar_item">
                    其他
                </a>
            </div>
            <div class="weui_tab_bd">
                <!--第一个选项卡-->
                <div class="content">
                    <div class="weui_cells weui_cells_access">
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/img5.jpg" alt="" height="80px">
                            
                            
                               <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|11月新书推荐</p>
                                  <p style="color:gray;font-size:4px">特德·姜是绝无仅有的为世界科幻界认可的华裔科幻作家。自1990年创作《巴比伦塔》至今...</p>
                                </article>
                            </div>
                            
                          
                     
                        </a>
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/img7.jpg" alt="" height="80px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|10月新书推荐</p>
                                  <p style="color:gray;font-size:4px">以一条中西通道为切口关照世界历史的发展进程，角度新颖，...</p>
                                </article>
                            </div>
                           
                        </a>
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/img8.jpg" alt="" height="80px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|9月畅销书榜</p>
                                  <p style="color:gray;font-size:4px">布伦特·施兰德 Brent Schlender...</p>
                                </article>
                            </div>
                           
                        </a>
                    </div>
                </div>
                <!--第二个选项卡-->
                <div class="content">
                    <div class="weui_cells weui_cells_access">
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/n1.webp.jpg" alt="" height="60px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                      
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|10月畅销书榜</p>
                                  <p style="color:gray;font-size:4px">以一条中西通道为切口关照世界历史的发展进程，角度新颖，...</p>
                                </article>
                            </div>
                     
                        </a>
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/n2.webp.jpg" alt=""  height="60px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|10月畅销书榜</p>
                                  <p style="color:gray;font-size:4px">以一条中西通道为切口关照世界历史的发展进程，角度新颖，...</p>
                                </article>
                            </div>
                           
                        </a>
                        <a class="weui_cell" href="list.html">
                        <img src="/wechat(g)/Public/bookstore/images/img11.jpg" alt=""  height="60px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">新旧书店|10月畅销书榜</p>
                                  <p style="color:gray;font-size:4px">以一条中西通道为切口关照世界历史的发展进程，角度新颖，...</p>
                                </article>
                            </div>
                           
                        </a>
                    </div>
                </div>
                <!--第三个选项卡-->
            <div class="content">
                    <div class="weui_cells weui_cells_access">
                        <a class="weui_cell" href="content.html">
                        <img src="/wechat(g)/Public/bookstore/images/a5.webp.jpg" alt="" height="70px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                      
                               <article class="weui_article">
                                 
                                  <p style="font-size:13px">拉尔夫·瓦尔多·爱默生：信赖你自己吧！——《自立》</p>
                                  <p style="color:gray;font-size:4px">　在浮躁的社会里。我们需要真正的声音；在卑琐的生活里，我们需要警醒和鼓励。</p>
                                </article>
                            </div>
                     
                        </a>
                        <a class="weui_cell" href="content.html">
                        <img src="/wechat(g)/Public/bookstore/images/a4.webp.jpg" alt="" height="70px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                                                   <p style="font-size:13px">说走就走！一次奇幻冒险旅行</p>
                                  <p style="color:gray;font-size:4px">陌生的地方总是令人充满好奇，好奇的地方总是令人产生向往...</p>
                                </article>
                            </div>
                           
                        </a>
                        <a class="weui_cell" href="content.html">
                        <img src="/wechat(g)/Public/bookstore/images/a6.webp.jpg" alt="" height="70px" width="60px">
                            <div class="weui_cell_bd weui_cell_primary">
                                <article class="weui_article">
                                  <p style="font-size:13px">莎翁&汤公四百年 |如梦似真</p>
                                  <p style="color:gray;font-size:4px">汤显祖相比之下，就有点惭愧了，...</p>
                                </article>
                            </div>
                           
                        </a>
                    </div>
                </div>
        </div>
        <!--导航栏结束-->



        
</body>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/wechat(g)/Public/bookstore/lib/jquery-weui.min.js"></script>
<script type='text/javascript' src='/wechat(g)/Public/bookstore/js/swiper.js'></script>
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
        //按索引显示对应内容,选谁谁显示
        $(".weui_tab_bd .content:eq("+which+")").show();

    })
</script>
</html>