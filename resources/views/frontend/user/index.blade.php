@extends('frontend.layouts.app')

@section('title')
    会员中心 - eBestMall
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('static/css/user.css') }}">
@stop

@section('javascript')
    <script src="{{ asset('static/js/user.js') }}"></script>
@stop

@section('content')
    <div class="user-wrapper">
        <ul class="breadcrumb"><li><a href="/">首页</a></li>
            <li><a href="/user">会员中心</a></li>
            <li class="active">概览</li>
        </ul>
        <div class="member-wrap">
            <!--左侧导航菜单栏-->
            <div class="member-nav">
                <div class="member-nav-title"><a href="javascript:;">会员中心</a></div>
                <div class="member-nav-body">

                    <div class="member-nav-item member-shadow">
                        <div class="member-nav-item-title">
                            <i class="far fa-user"></i>
                            <span>会员信息</span>
                        </div>
                        <ul class="member-nav-item-body">
                            <li><a href="javascript:;">个人信息</a></li>
                            <li><a href="javascript:;">我的收藏</a></li>
                            <li><a href="javascript:;">我的足迹</a></li>
                            <li><a href="javascript:;">我的评论</a></li>
                        </ul>
                    </div>

                    <div class="member-nav-item member-shadow">
                        <div class="member-nav-item-title">
                            <i class="far fa-edit"></i>
                            <span>订单中心</span>
                        </div>
                        <ul class="member-nav-item-body">
                            <li><a href="javascript:;">我的订单</a></li>
                            <li><a href="javascript:;">评价晒单</a></li>
                            <li><a href="javascript:;">收货地址</a></li>
                            <li><a href="javascript:;">返修退换货</a></li>
                        </ul>
                    </div>

                    <div class="member-nav-item member-shadow">
                        <div class="member-nav-item-title">
                            <i class="fas fa-shield-alt"></i>
                            <span>账户中心</span>
                        </div>
                        <ul class="member-nav-item-body">
                            <li><a href="javascript:;">账户安全</a></li>
                            <li><a href="javascript:;">资金管理</a></li>
                            <li><a href="javascript:;">我的红包</a></li>
                            <li><a href="javascript:;">优惠券</a></li>
                        </ul>
                    </div>

                    <div class="member-nav-item member-shadow">
                        <div class="member-nav-item-title">
                            <i class="far fa-money-bill-alt"></i>
                            <span>分销中心</span>
                        </div>
                        <ul class="member-nav-item-body">
                            <li><a href="javascript:;">我的会员</a></li>
                            <li><a href="javascript:;">我的业绩</a></li>
                            <li><a href="javascript:;">我的佣金</a></li>
                            <li><a href="javascript:;">申请提现</a></li>
                            <li><a href="javascript:;">推广链接</a></li>
                        </ul>
                    </div>

                    <div class="member-nav-item member-shadow">
                        <div class="member-nav-item-title">
                            <i class="far fa-handshake"></i>
                            <span>客户服务</span>
                        </div>
                        <ul class="member-nav-item-body">
                            <li><a href="javascript:;">意见建议</a></li>
                            <li><a href="javascript:;">交易纠纷</a></li>
                            <li><a href="javascript:;">举报中心</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--右侧主要内容块-->
            <div class="member-main">
                <div class="member-main-info">
                    <div class="member-main-item">
                        <div class="user-basic-info-wrap">
                            <div class="user-basic-info-avatar">
                                <a href="javascript:;">
                                    <img class="user-avatar member-shadow" src="/static/img/public/user/no_login_default_avatar.jpg" width="100" height="100">
                                </a>
                            </div>
                            <div class="user-basic-info">
                                <div class="user-basic-info-name">
                                    <a class="u-name" href="javascript:;">会员名称</a>
                                </div>
                                <div class="user-basic-info-rank">
                                    <span>等级：</span>
                                    <a href="javascript:;">普通会员</a>
                                </div>
                                <div class="user-basic-info-account-security">
                                    <span>账户安全：</span>
                                    <!-- safe-rank01 - 06 -->
                                    <a href="javascript:;">
                                        <span class="user-safe safe-rank05"><i></i>&nbsp;较高</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-extend">
                            <div class="user-info-counts-wrap">
                                <ul class="user-info-counts">
                                    <li>
                                        <a href="javascript:;">
                                            <span><i class="icon-creditcard"></i></span>
                                            <p>待付款 0</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span><i class="icon-truck3"></i></span>
                                            <p>待发货 0</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span><i class="icon-gift"></i></span>
                                            <p>待收货 0</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span><i class="icon-edit"></i></span>
                                            <p>待评价 0</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="user-info-account-wrap">
                                <div class="user-info-account">
                                    <ul>
                                        <li>
                                            <div class="user-info-account-balance">
                                                <span>余　额：</span>
                                                <a href="javascript:;">0.00</a>
                                            </div>
                                            <div class="user-info-account-freeze">
                                                <span>冻　结：</span>
                                                <a href="javascript:;">0.00</a>
                                            </div>
                                            <div class="user-info-account-consume">
                                                <span>已消费：</span>
                                                <a href="javascript:;">0.00</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-info-account-balance">
                                                <span>积　分：</span>
                                                <a href="javascript:;">0</a>
                                            </div>
                                            <div class="user-info-account-freeze">
                                                <span>冻　结：</span>
                                                <a href="javascript:;">0</a>
                                            </div>
                                            <div class="user-info-account-consume">
                                                <span>已使用：</span>
                                                <a href="javascript:;">0</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-info-account-balance">
                                                <span>优惠券：</span>
                                                <a href="javascript:;">0</a>
                                                <span>张</span>
                                            </div>
                                            <div class="user-info-account-freeze">
                                                <span>价　值：</span>
                                                <a href="javascript:;">0.00</a>
                                                <span>元</span>
                                            </div>
                                            <div class="user-info-account-consume">
                                                <span>已使用：</span>
                                                <a href="javascript:;">0</a>
                                                <span>张</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="member-main-left">
                    <div class="member-main-item member-main-order">
                        <div class="member-main-item-title">
                            <h3>我的订单</h3>
                            <a class="member-main-item-more" href="javascript:;">查看全部订单</a>
                        </div>
                        <div class="member-main-item-content">
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody class="user-order-table">
                                <tr class="user-order-table-tr-item">
                                    <td class="order-img">
                                        <div>
                                            <a href="javascript:;" target="_blank" title="商品标题">
                                                <img src="/static/img/public/bitmap/55x55.png" width="55" height="55">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="order-item order-name">
                                        <div>收件人</div>
                                    </td>
                                    <td class="order-item order-money">￥0.00<br>在线支付</td>
                                    <td class="order-item order-time"><span>0000-00-00 <br> 00:00:00</span></td>
                                    <td class="order-item order-status"><span>已完成</span></td>
                                    <td class="order-item order-details">
                                        <a href="javascript:;" target="_blank">查看</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="member-main-item member-main-collection">
                        <div class="member-main-item-title">
                            <h3>我的收藏</h3>
                            <a class="member-main-item-more" href="javascript:;">查看更多</a>
                        </div>
                        <div class="member-main-item-content">
                            <ul id="userCollection" class="nav nav-tabs">
                                <li class="active">
                                    <a href="#userCollectionGoods" data-toggle="tab">
                                        收藏的商品
                                    </a>
                                </li>
                                <li><a href="#userCollectionShop" data-toggle="tab">收藏的店铺</a></li>
                            </ul>
                            <div id="userCollectionContent" class="tab-content">
                                <div class="tab-pane fade in active" id="userCollectionGoods">
                                    <div class="user-collection-goods-slider">
                                        <ul>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00 <span>直降</span></div>
                                                    <div class="goods-tips"><span>降价￥0.00</span></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>

                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>

                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="javascript:;" title="商品标题">
                                                        <img src="/static/img/public/bitmap/130x130.png" alt="" width="130" height="130">
                                                    </a>
                                                    <div class="goods-price">￥0.00</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a class="arrow prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="arrow next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="userCollectionShop">
                                    <div class="user-collection-shop">
                                        <ul>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="shop-wrap">
                                                    <a class="shop-logo" href="javascript:;">
                                                        <img src="/static/img/public/bitmap/100x100.png" width="100" height="100">
                                                    </a>
                                                    <div class="shop-name"><a href="javascript:;" title="店铺名称">店铺名称</a>
                                                    </div>
                                                    <div class="shop-btn"><a href="javascript:;">进入店铺</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a class="nav-btn prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="nav-btn next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="member-main-right">
                    <div class="member-main-item member-main-right-notice">
                        <div class="member-main-item-title">
                            <h3>会员通知</h3>
                        </div>
                        <div class="member-main-item-content">
                            <p>依据《网络安全法》，为保障您的账户安全和正常使用，请尽快完成实名认证和手机号验证！ 新版<a href="javascript:;" target="_blank">《隐私政策》</a>已上线，将更有利于保护您的个人隐私。
                            </p>
                        </div>
                    </div>
                    <div class="member-main-item member-main-right-browse">
                        <div class="member-main-item-title">
                            <h3>我的足迹</h3>
                            <a class="member-main-item-more" href="javascript:;">查看更多</a>
                        </div>
                        <div class="member-main-item-content">
                            <div class="user-browsing-history-wrap">
                                <ul>
                                    <li>
                                        <div>
                                            <a href="javascript:;" title="商品标题"><img src="/static/img/public/bitmap/55x55.png" width="55" height="55"></a>
                                            <a href="javascript:;" title="￥0.00">￥0.00</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="javascript:;" title="商品标题"><img src="/static/img/public/bitmap/55x55.png" width="55" height="55"></a>
                                            <a href="javascript:;" title="￥0.00">￥0.00</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="javascript:;" title="商品标题"><img src="/static/img/public/bitmap/55x55.png" width="55" height="55"></a>
                                            <a href="javascript:;" title="￥0.00">￥0.00</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="javascript:;" title="商品标题"><img src="/static/img/public/bitmap/55x55.png" width="55" height="55"></a>
                                            <a href="javascript:;" title="￥0.00">￥0.00</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="javascript:;" title="商品标题"><img src="/static/img/public/bitmap/55x55.png" width="55" height="55"></a>
                                            <a href="javascript:;" title="￥0.00">￥0.00</a>
                                        </div>
                                    </li>

                                </ul>
                                <a class="nav-btn prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                <a class="nav-btn next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection