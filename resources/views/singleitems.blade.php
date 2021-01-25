@extends('_layouts.app')

@section('content')
{{--@dd($single_items)--}}
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="/storage/images/items/{{$single_items->image}}" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel owl-loaded owl-drag">




                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-862px, 0px, 0px); transition: all 1.2s ease 0s; width: 1725px;"><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$single_items->name}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>({{rand(10,100)}} կարծիք)</span>
                    </div>
                    <div class="product__details__price">{{$single_items->price}} դրամ</div>
                    <p>{{$single_items->description}}</p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">

                                <input type="text" value="1">
                               </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">+ Զամբյուղ</a>
<!--                     <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
 -->                    <ul>
                        <li><b>Արտադրող</b> <span>{{$single_items->makeBy}}</span></li>
                        <li><b>Բաժինը</b> <span>{{$single_items->cname}}</span></li>
                        <li><b>Հրապարակվել է</b> <span>{{$single_items->created_at}}</span></li>
                        <li><b>Կիսվիր </b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
{{--            <div class="col-lg-12">--}}
{{--                <div class="product__details__tab">--}}
{{--                    <ul class="nav nav-tabs" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Information</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane active" id="tabs-1" role="tabpanel">--}}
{{--                            <div class="product__details__tab__desc">--}}
{{--                                <h6>Products Infomation</h6>--}}
{{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
{{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus--}}
{{--                                    suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam--}}
{{--                                    vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.--}}
{{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,--}}
{{--                                    accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a--}}
{{--                                    pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula--}}
{{--                                    elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus--}}
{{--                                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam--}}
{{--                                    vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>--}}
{{--                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem--}}
{{--                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet--}}
{{--                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum--}}
{{--                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus--}}
{{--                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.--}}
{{--                                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed--}}
{{--                                    porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum--}}
{{--                                    sed sit amet dui. Proin eget tortor risus.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane" id="tabs-2" role="tabpanel">--}}
{{--                            <div class="product__details__tab__desc">--}}
{{--                                <h6>Products Infomation</h6>--}}
{{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
{{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.--}}
{{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam--}}
{{--                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo--}}
{{--                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.--}}
{{--                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent--}}
{{--                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac--}}
{{--                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante--}}
{{--                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;--}}
{{--                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.--}}
{{--                                    Proin eget tortor risus.</p>--}}
{{--                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem--}}
{{--                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet--}}
{{--                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum--}}
{{--                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus--}}
{{--                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane" id="tabs-3" role="tabpanel">--}}
{{--                            <div class="product__details__tab__desc">--}}
{{--                                <h6>Products Infomation</h6>--}}
{{--                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.--}}
{{--                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.--}}
{{--                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam--}}
{{--                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo--}}
{{--                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.--}}
{{--                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent--}}
{{--                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac--}}
{{--                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante--}}
{{--                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;--}}
{{--                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.--}}
{{--                                    Proin eget tortor risus.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
@endsection
