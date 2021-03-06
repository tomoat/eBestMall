@extends('frontend.layouts.app')

@section('title')
    购物车 - eBestMall
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('static/css/cart.css') }}">
@stop

@section('javascript')
    <script src="{{ asset('static/js/cart.js') }}"></script>
@stop

@section('content')
    <div class="cart-wrapper">
        <ul class="breadcrumb">
            <li><a href="/">首页</a></li>
            <li class="active">我的购物车</li>
        </ul>
        <div class="my-cart">
            <div class="cart-title">
                <div class="see-cart active"><span>1</span>我的购物车<div class="back"></div></div>
                <div class="firm-order"><div class="front"></div><span>2</span>确认订单信息<div class="back"></div></div>
                <div class="place-order"><div class="front"></div><span>3</span>成功提交订单</div>
            </div>
            <div class="cart-header">
                <div class="cart-checkbox">
                    <input class="cart-checkbox-all checkbox" type="checkbox" id="cart-checkbox-all">
                    <label for="cart-checkbox-all">全选</label>
                </div>
                <div class="cart-goods">商品</div>
                <div class="cart-attribute">属性</div>
                <div class="cart-price">单价</div>
                <div class="cart-number">数量</div>
                <div class="cart-subtotal">小计</div>
                <div class="cart-operation">操作</div>
            </div>
            <div class="cart-body">
                <div class="cart-list-wrap">
                    <div class="cart-list">
                        <div class="cart-list-body">
                            <div class="cart-list-body-shop">
                                <div class="cart-checkbox cart-checkbox-list-all">
                                    <input class="checkbox" type="checkbox">
                                </div>
                                <div class="cart-shop-name">
                                    <a href="#">eBestMall旗舰店</a>
                                    <span class="tips-tag" href="javascript:;">自营</span>
                                </div>
                            </div>
                            <div class="cart-list-body-info-wrap">
                                <div class="cart-list-body-info">
                                    <div class="cart-list-body-info-item-form">
                                        <div class="item cart-checkbox">
                                            <input class="cart-goods-id checkbox goods-selected" type="checkbox" value="20170626888">
                                        </div>
                                        <div class="item goods">
                                            <div class="goods-item">
                                                <div class="goods-item-img">
                                                    <a href="javascript:;"><img src="/static/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="goods-item">
                                                <div class="goods-item-info">
                                                    <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                    <div class="goods-item-info-extend">
                                                        <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item attribute">
                                            <div class="goods-attribute">
                                                <div class="goods-attribute-list">颜色：黑色</div>
                                                <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                            </div>
                                        </div>
                                        <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.99</span></strong></div>
                                        <div class="item number">
                                            <div class="cart-goods-number">
                                                <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                                <input type="text" class="goods-number-input" value="1" data-max="99999">
                                                <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                            </div>
                                        </div>
                                        <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                        <div class="item operation">
                                            <a href="javascript:;">删除</a>
                                            <a href="javascript:;">移入收藏夹</a>
                                        </div>
                                    </div>
                                    <div class="cart-list-body-info-item-extra"></div>
                                </div>
                                <div class="cart-list-body-info">
                                    <div class="cart-list-body-info-item-form">
                                        <div class="item cart-checkbox">
                                            <input class="cart-goods-id checkbox goods-selected" type="checkbox" value="20170626889">
                                        </div>
                                        <div class="item goods">
                                            <div class="goods-item">
                                                <div class="goods-item-img">
                                                    <a href="javascript:;"><img src="/static/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="goods-item">
                                                <div class="goods-item-info">
                                                    <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                    <div class="goods-item-info-extend">
                                                        <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item attribute">
                                            <div class="goods-attribute">
                                                <div class="goods-attribute-list">颜色：黑色</div>
                                                <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                            </div>
                                        </div>
                                        <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.00</span></strong></div>
                                        <div class="item number">
                                            <div class="cart-goods-number">
                                                <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                                <input type="text" class="goods-number-input" value="1" data-max="99999">
                                                <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                            </div>
                                        </div>
                                        <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                        <div class="item operation">
                                            <a href="javascript:;">删除</a>
                                            <a href="javascript:;">移入收藏夹</a>
                                        </div>
                                    </div>
                                    <div class="cart-list-body-info-item-extra"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-list">
                        <div class="cart-list-body">
                            <div class="cart-list-body-shop">
                                <div class="cart-checkbox cart-checkbox-list-all">
                                    <input class="checkbox" type="checkbox">
                                </div>
                                <div class="cart-shop-name"><a href="javascript:;">第三方商家</a></div>
                            </div>
                            <div class="cart-list-body-info-wrap">
                                <div class="cart-list-body-info">
                                    <div class="cart-list-body-info-item-form">
                                        <div class="item cart-checkbox">
                                            <input class="cart-goods-id checkbox goods-selected" type="checkbox" value="20170626899">
                                        </div>
                                        <div class="item goods">
                                            <div class="goods-item">
                                                <div class="goods-item-img">
                                                    <a href="javascript:;"><img src="/static/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="goods-item">
                                                <div class="goods-item-info">
                                                    <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                    <div class="goods-item-info-extend">
                                                        <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item attribute">
                                            <div class="goods-attribute">
                                                <div class="goods-attribute-list">颜色：黑色</div>
                                                <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                            </div>
                                        </div>
                                        <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.00</span></strong></div>
                                        <div class="item number">
                                            <div class="cart-goods-number">
                                                <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                                <input type="text" class="goods-number-input" value="1" data-max="99999">
                                                <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                            </div>
                                        </div>
                                        <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                        <div class="item operation">
                                            <a href="javascript:;">删除</a>
                                            <a href="javascript:;">移入收藏夹</a>
                                        </div>
                                    </div>
                                    <div class="cart-list-body-info-item-extra"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-footer">
                <div class="cart-checkbox cart-footer-item">
                    <input class="cart-checkbox-all checkbox" type="checkbox" id="cart-footer-checkbox-all">
                    <label for="cart-footer-checkbox-all">全选</label>
                </div>
                <div class="cart-footer-operation cart-footer-item">
                    <a href="javascript:;">删除选中的商品</a>
                    <a href="javascript:;">清除失效商品</a>
                    <a href="javascript:;">移入收藏夹</a>
                </div>
                <div class="cart-footer-right">
                    <div class="cart-footer-amount-sum cart-footer-item">已选商品 <em class="cart-goods-total-number">0</em> 件</div>
                    <div class="cart-footer-total cart-footer-item">总价（不含运费）：<em>¥<span class="cart-goods-total-price">0.00</span></em></div>
                    <div class="cart-footer-btn-area cart-footer-item"><a href="javascript:;" class="settlement-button" data-id="">结&nbsp;算</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection