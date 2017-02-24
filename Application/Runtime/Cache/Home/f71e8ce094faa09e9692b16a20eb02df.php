<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="gbk">
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="/Public/css/agent.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/hfhouse.css"/>
<script type="text/javascript" src="/Public/js/jquery.js"></script>
<body>
<script type="text/javascript">
    $(function(){
        $("#anhui").bind('mouseover',function(){
            $("#anhuisheng").show();
        })
        $("#anhui").bind('mouseleave',function(){
            $("#anhuisheng").hide();
        })
        $("#lianxi").bind('mouseover',function(){
            $("#lianxikuang").show();
        })
        $("#lianxi").bind('mouseleave',function(){
            $("#lianxikuang").hide();
        })
        $("#daohang").bind('mouseover',function(){
            $("#daohangbiao").show();
        })
        $("#daohang").bind('mouseleave',function(){
            $("#daohangbiao").hide();
        })

    })


</script>


<!--导航 Begin-->
<div class="topNav">
    <div class="topNav-width clearfix">
        <div class="tnLeft">
            <dd><h3 style="font-size: 100%;"><a href="/Home/Index/index" style="color: white">找房网</a></h3></dd>
            <dd id="anhui"><h3 style="font-size: 100%;"><a href="http://www.xkhouse.com/" style="color: white">安徽<i></i></a></h3><ul id="anhuisheng" class="xk_area" style="display: none;">
                <em></em>
                <a href="" title="合肥房地产交易网">合肥</a>
                <a href="" title="芜湖房地产交易网">芜湖</a>
                <a href="" title="蚌埠房地产交易网">蚌埠</a>
                <a href="" title="淮南房地产交易网">淮南</a>
                <a href="" title="淮北房地产交易网">淮北</a>
                <a href="" title="铜陵房地产交易网">铜陵</a>
                <a href="" title="安庆房地产交易网">安庆</a>
                <a href="" title="黄山房地产交易网">黄山</a>
                <a href="" title="阜阳房地产交易网">阜阳</a>
                <a href="" title="宿州房地产交易网">宿州</a>
                <a href="" title="滁州房地产交易网">滁州</a>
                <a href="" title="六安房地产交易网">六安</a>
                <a href="" title="宣城房地产交易网">宣城</a>
                <a href="" title="巢湖房地产交易网">巢湖</a>
                <a href="" title="池州房地产交易网">池州</a>
                <a href="" title="亳州房地产交易网">亳州</a>
                <a href="" title="天长房地产交易网">天长</a>
                <a href="" title="桐城房地产交易网">桐城</a>
                <a href="" title="宁国房地产交易网">宁国</a>
                <a href="" title="马鞍山房地产交易网" target="_blank">马鞍山</a>
            </ul>
            </dd>
            <dd><h3 style="font-size: 100%;"><a href="http://www.xkhouse.com/" style="color: white">移动产品<i></i></a></h3></dd>
        </div>
        <div class="tnRight">
            <?php if(($_SESSION['userid']) == ""): ?><dd><h3 style="font-size: 100%;"><a href="/Home/Index/login" style="color: white">登录</a></h3></dd>
                <?php else: ?>
                <dd><h3 style="font-size: 100%;"><a href="login" style="color: white"><?php echo (session('username')); ?></a></h3></dd>
                <dd><h3 style="font-size: 100%;"><a href="/Home/Index/logout" style="color: white">注销登录</a></h3></dd><?php endif; ?>
            <dd id="lianxi"><h3 style="font-size: 100%;"><a href=""  style="color: white">联系我们<i></i></a></h3>
                <ul class="add_sc" id="lianxikuang" style="display: none;">
                    <em class="top_jt"></em>
                    <div class="fl" style="float: left;padding-right: 10px"><img height="150px" src="/Public/image/2weima.jpg"></div>
                    <div class="fr" style="float: left">
                        <p class="f14">扫二维码直接进入技术团队群~</p>
                        <p class="f14">服务电话 888-888-8888</p>
                        <p class="f14">客服QQ群 584749590</p>
                        <p class="f14">技术团队 合肥PHP技术研发二组</p>
                        <a class="add_btn" style="cursor: pointer" onclick="alert('Ctrl+D 把找房网放入收藏夹 全面了解实时二手房资讯，方便快捷！')">加入收藏</a>
                    </div>
                    <div class="clear"></div>
                </ul>
            </dd>
            <dd id="daohang"><h3 style="font-size: 100%;"><a href="" style="color: white;position: relative;padding-left: 30px;"><b></b>网站导航<i></i></a></h3>
                <ul id="daohangbiao" class="web_nav" style="display: none;">
                    <li style="list-style-type: none"><b class="f16"><a href="/Home/Index/index" target="_blank">二手房</a></b>
                        <p class="f14">
                            <a href="/Home/Index/index" target="_blank">不动产评估</a>
                            <a href="/Home/Index/index" target="_blank">出售</a>
                            <a href="/Home/Index/index" target="_blank">律师在线</a>
                            <a href="/Home/Index/index" target="_blank">租房</a>
                            <a href="/Home/Agent/agent" target="_blank">房产经纪人</a>
                        </p>
                    </li>
                </ul>
            </dd>
        </div>
    </div>
</div>
<!--经纪人店铺页面 Begin-->
<div class="agent_all">

    <!-- 店铺介绍页背景图-->
    <div class="agent_banner">
        <div class="agent_title">
            <?php echo ($res["mid_realname"]); ?>的房源店铺

        </div>
        <div class="agent_info">
            有效房源出售：<span style="color: #6ab4ff"><?php echo (agent_count($id)); ?></span>
            出租：<span style="color: #6ab4ff">0</span>
        </div>

    </div>

    <!-- 店铺公告-->
    <div class="agent_notice">
        <span style="font-weight: bold;font-size: 18px">公告：</span>

    </div>


    <!-- 店铺内容-->
    <div class="agent_content">
        <!-- 经纪人信息-->
        <div class="agent_information">

            <div class="agent_personal">   <!-- 头像-->
                <div class="agent_photo">
                    <?php if(($res["mid_photo"]) == ""): ?><img height="112" width="80" src="/Public/image/u-pic.png">
                        <?php else: ?>
                        <img height="112" width="80" src='/../Uploads/<?php echo ($res["mid_photo"]); ?>'><?php endif; ?>
                    <div><?php echo ($res["mid_realname"]); ?></div>
                </div>

                <!-- 手机号-->
                <div class="agent_mobile">
                    <a href=""><?php echo ($res["mid_phone"]); ?></a>
                </div>

                <!-- 工作信息-->
                <div class="agent_work_information">
                    <div class="agent_work">
                        <p>
                            <a><img src="/Public/image/agent_qq.jpg"></a>&nbsp;&nbsp;
                            <a><img src="/Public/image/agent_email.jpg"></a>
                        </p>
                        <p>服务区域：<?php echo ($res["mid_region"]); ?></p>
                        <p>所属公司：<?php echo ($res["mid_company"]); ?></p>
                        <p>注册时间：<?php echo (date('Y-m-d',$res["mid_regtime"])); ?></p>
                    </div>
                </div>

            </div>
            <!--自我介绍-->

            <div class="agent_myself">

                <div style="font-size: 18px;font-weight: bold">自我介绍:</div>

                <div>苦逼的程序猿</div>
            </div>

        </div>

        <!-- 店铺房源信息-->

        <div class="agent_house">

            <div class="agent_type">
                <a  id="agent_sell" class="agent_sell" style="color: grey;background-color: white">出售</a>
                <a  id="agent_rent" class="agent_rent" style="color:whitesmoke ;background-color: #00ae66">出租</a>
            </div>
            <script type="text/javascript">
                $(function(){
//
                    $('#agent_rent').click(function(){

                           window.location.href='/Home/Agent/agent_rent/id/<?php echo ($id); ?>'
                    });

                    $('#agent_sell').click(function(){

                           window.location.href='/Home/Agent/agent_shop/id/<?php echo ($id); ?>'

                    })

                })

            </script>


                    <script type="text/javascript">

                        $(function(){

                            $('#region_down').click(function(e) {

                                $('.search_region_list').css('display','');
                                $('.search_room_list').css('display','none');
                                e.stopPropagation();

                            });

                            $('#room_down').click(function(e) {

                                $('.search_room_list').css('display','');
                                $('.search_region_list').css('display','none');
                                e.stopPropagation();

                            });

                            $('body').click(function(){

                                $('.search_region_list').hide();
                                $('.search_room_list').hide();

                            });



                            $('#ss').click(function(){

                                var data = $('#ss').text();
                                $('#region').val(data)

                            });

                            $('#bhu').click(function(){

                                var data = $('#bhu').text();
                                $('#region').val(data)

                            });

                            $('#gx').click(function(){

                                var data = $('#gx').text();
                                $('#region').val(data)

                            });

                            $('#ly').click(function(){

                                var data = $('#ly').text();
                                $('#region').val(data)

                            });


                            $('#jk').click(function(){

                                var data = $('#jk').text();
                                $('#region').val(data)

                            });


                            $('#xz').click(function(){

                                var data = $('#xz').text();
                                $('#region').val(data)

                            });


                            $('#bhe').click(function(){

                                var data = $('#bhe').text();
                                $('#region').val(data)

                            });


                            $('#zw').click(function(){

                                var data = $('#zw').text();
                                $('#region').val(data)

                            });


                            $('#yh').click(function(){

                                var data = $('#yh').text();
                                $('#region').val(data)

                            });


                            $('#bc').click(function(){

                                var data = $('#bc').text();
                                $('#region').val(data)

                            });


                            $('#fx').click(function(){

                                var data = $('#fx').text();
                                $('#region').val(data)

                            });

                            $('#qt').click(function(){

                                var data = $('#qt').text();
                                $('#region').val(data)

                            });

                            $('#fd').click(function(){

                                var data = $('#fd').text();
                                $('#region').val(data)

                            });


                            $('#cf').click(function(){

                                var data = $('#cf').text();
                                $('#region').val(data)

                            });

                            $('#1').click(function(){

                                var data = $('#1').text();
                                $('#room').val(data)

                            });

                            $('#2').click(function(){

                                var data = $('#2').text();
                                $('#room').val(data)

                            });

                            $('#3').click(function(){

                                var data = $('#3').text();
                                $('#room').val(data)

                            });


                            $('#4').click(function(){

                                var data = $('#4').text();
                                $('#room').val(data)

                            });


                            $('#5').click(function(){

                                var data = $('#5').text();
                                $('#room').val(data)

                            });


                            $('#6').click(function(){

                                var data = $('#6').text();
                                $('#room').val(data)

                            })


                        })



                    </script>


            <!-- 出租的房源-->
            <div id="rent_search" class="agent_shop_search">
                <form action="/Home/Agent/agent_rent/id/<?php echo ($id); ?>" method="get">
                    <div class="search_region">
                        <input id="region" readonly type="text" name="region" value="<?php echo $region==''?'区域':$region;?>" >
                        <!--<input  readonly type="hidden" name="id" value="">-->
                        <span id="region_down" style="font-size: 1px">▼</span>
                    </div>
                    <div class="search_region_list" style="display: none">
                        <ul>
                            <li id="ss">蜀山区</li>
                            <li id="bhu">滨湖区</li>
                            <li id="gx">高新区</li>
                            <li id="ly">庐阳区</li>
                            <li id="jk">经开区</li>
                            <li id="xz">新站区</li>
                            <li id="bhe">包河区</li>
                            <li id="zw">政务区</li>
                            <li id="yh">瑶海区</li>
                            <li id="bc">北城新区</li>
                            <li id="fx">肥西县</li>
                            <li id="fd">肥东县</li>
                            <li id="cf">长丰县</li>
                            <li id="qt">其他</li>
                        </ul>
                    </div>


                    <div class="search_room">
                        <input id="room" readonly type="text" name="room" value="<?php echo $room ==''?'一室':$room;?>">
                        <span id="room_down" style="font-size: 1px">▼</span>

                    </div>
                    <div class="search_room_list" style="display: none">
                        <ul>
                            <li id="1">一室</li>
                            <li id="2">两室</li>
                            <li id="3">三室</li>
                            <li id="4">四室</li>
                            <li id="5">五室</li>
                            <li id="6">五室以上</li>
                        </ul>
                    </div>

                    <div class="agent_area">
                        <label>面积:</label>
                        <input type="text" name="minArea" placeholder="下限">
                        <i>--</i>
                        <input type="text" name="maxArea" placeholder="上限">
                        <b>㎡</b>
                    </div>

                    <div class="agent_rent_money">
                        <label>租金:</label>
                        <input type="text" name="minArea" placeholder="下限">
                        <i>--</i>
                        <input type="text" name="maxArea" placeholder="上限">
                        <b>元/月</b>
                    </div>

                    <div class="agent_btn">
                        <input type="submit" value="筛选">
                    </div>

                    <div style="clear: both"></div>
                </form>

            </div>

            <!--房源信息-->
            <div id="rent_info" class="agent_house_rent"  style="display: none">
                <!-- 房源照片-->
                <div class="agent_loupan_picture">
                    <a href="" target="_blank">
                        <img src="/Public/image/agent_room_pic.jpg" height="140" width="180">
                    </a>
                </div>

                <!-- 房源信息-->

                <div class="agent_room_info">
                    <div style="font-size: 18px">[保利海上五月花]保利海上五月花出租 &nbsp;&nbsp;&nbsp;<span class="agent_label">多图</span></div>
                    <div class="agent_room_detail">
                        <p>
                            <span>住宅</span>&nbsp;&nbsp;&nbsp;<span>3室2厅</span>&nbsp;&nbsp;&nbsp;<span>2/33层</span>&nbsp;&nbsp;&nbsp;<span>南北</span>&nbsp;&nbsp;&nbsp;<span>建筑年代：2015</span><br>
                            <span>保利海上五月花</span>&nbsp;&nbsp;&nbsp;<span>[滨湖区-环巢湖-合肥市滨湖新区金斗路和南宁路交口处]</span><br>
                            <span>经纪人：邹飞</span>&nbsp;&nbsp;&nbsp;<span>德佑地产观湖苑分公司 </span>&nbsp;&nbsp;&nbsp;<span>10-20 15:09:34</span>
                            <br><br>
                            <span class="agent_label1">采光好</span>&nbsp;&nbsp;
                            <span class="agent_label2">交通便利</span>&nbsp;&nbsp;
                            <span class="agent_label3">地铁房</span>
                        </p>

                        <div class="agent_room_detail_right">
                            <h2 style="color: red">180.00万元</h2>
                            <h4>建筑面积：93.84㎡&nbsp;&nbsp;19181.59元/㎡</h4>

                        </div>

                    </div>
                </div>

            </div>


        </div>

        <div style="clear: both"></div>


    </div>

    <script type="text/javascript">
        $('.agent_label1').hover(function(){

            $('.agent_label1').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            })

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });



        $('.agent_label2').hover(function(){

            $('.agent_label2').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });



        $('.agent_label3').hover(function(){

            $('.agent_label3').css({

                'border':'1px solid red',
                'color':'red'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        }).mouseout(function(){

            $('.agent_label1').css({

                'border':'1px solid grey',
                'color':'grey'
            });

            $('.agent_label2').css({

                'border':'1px solid grey',
                'color':'grey'

            });

            $('.agent_label3').css({

                'border':'1px solid grey',
                'color':'grey'
            })

        });

    </script>

</div>

</body>

</html>