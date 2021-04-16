@extends('_layouts.app')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Բոլոր Բաժինները</span>
                        </div>
                        <ul>
                            @foreach($homecategorys as $homecategory)
                                <li><a href="/category/{{$homecategory->id}}">{{$homecategory->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Բոլոր Բաժինները
<!--                                     <span class="arrow_carrot-down"></span>
 -->                                </div>
                                <input type="text" placeholder="Ի՞նչ եք փնտրում․․․">
                                <button type="submit" class="site-btn">Փնտրել</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+374 33 351 155</h5>
                                <span>Պատվիրեք 24/7 գրաֆիկով</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('img/IMG_20180715_160408-1024x768.jpg')}}"
                         style="background-image: url(&quot;/storage/images/ban.jpg&quot;);height:355px;background-position: center">
                        <div class="hero__text">
                            <span>Արտ Շին</span>
                            <h2>Մատչելի և <br>որակյալ</h2>
                            <p>Ձեր շինարարությունը վստահեք մեզ․․․</p>
                            <a href="/category/1" class="primary-btn">Պատվիրել</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(-2340px, 0px, 0px); transition: all 1.2s ease 0s; width: 3803px;">
                            @foreach($items as $item)

                            <div class="owl-item " style="width: 292.5px;">
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg" data-setbg="/storage/images/items/{{$item->image}}"
                                         style="background-image: url(&quot;img/categories/cat-5.jpg&quot;);">
                                        <h5><a href="/items/{{$item->id}}">{{$item->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="owl-item cloned" style="width: 292.5px;">
                                <div class="col-lg-3">
                                    <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg"
                                         style="background-image: url(&quot;img/categories/cat-4.jpg&quot;);">
                                        <h5><a href="#">drink fruits</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"><span
                                class="fa fa-angle-left"><span></span></span></button>
                        <button type="button" role="presentation" class="owl-next"><span
                                class="fa fa-angle-right"><span></span></span></button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Թոփ ապրանքներ</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Բոլորը</li>
                            <li data-filter=".c1">Էլեկտրական</li>
                            <li data-filter=".c2">Մեխանիկական</li>
                            <li data-filter=".c3">Տնտեսական</li>
                            <li data-filter=".c4">Այլ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter" id="MixItUpCD9174">
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-1.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-2.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-3.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-4.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-5.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-6.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">--}}
{{--                    <div class="featured__item">--}}
{{--                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg"--}}
{{--                             style="background-image: url(&quot;img/featured/feature-7.jpg&quot;);">--}}
{{--                            <ul class="featured__item__pic__hover">--}}
{{--                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="featured__item__text">--}}
{{--                            <h6><a href="#">Crab Pool Security</a></h6>--}}
{{--                            <h5>$30.00</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @foreach($itemsfiltrs as $itemsfiltr)
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables c{{$itemsfiltr->category_id}}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="/storage/images/items/{{$itemsfiltr->image}}"
                             style="background-image: url(&quot;img/featured/feature-8.jpg&quot;);">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/items/{{$itemsfiltr->id}}">{{$itemsfiltr->name}}</a></h6>
                            <h5>{{$itemsfiltr->price}} դրամ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    <section class="latest-product spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="latest-product__text">--}}
{{--                        <h4>Latest Products</h4>--}}
{{--                        <div class="latest-product__slider owl-carousel owl-loaded owl-drag">--}}


{{--                            <div class="owl-stage-outer">--}}
{{--                                <div class="owl-stage"--}}
{{--                                     style="transform: translate3d(-1080px, 0px, 0px); transition: all 1.2s ease 0s; width: 2160px;">--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item active" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-nav">--}}
{{--                                <button type="button" role="presentation" class="owl-prev"><span--}}
{{--                                        class="fa fa-angle-left"><span></span></span></button>--}}
{{--                                <button type="button" role="presentation" class="owl-next"><span--}}
{{--                                        class="fa fa-angle-right"><span></span></span></button>--}}
{{--                            </div>--}}
{{--                            <div class="owl-dots disabled"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="latest-product__text">--}}
{{--                        <h4>Top Rated Products</h4>--}}
{{--                        <div class="latest-product__slider owl-carousel owl-loaded owl-drag">--}}


{{--                            <div class="owl-stage-outer">--}}
{{--                                <div class="owl-stage"--}}
{{--                                     style="transform: translate3d(-1080px, 0px, 0px); transition: all 1.2s ease 0s; width: 2160px;">--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item active" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-nav">--}}
{{--                                <button type="button" role="presentation" class="owl-prev"><span--}}
{{--                                        class="fa fa-angle-left"><span></span></span></button>--}}
{{--                                <button type="button" role="presentation" class="owl-next"><span--}}
{{--                                        class="fa fa-angle-right"><span></span></span></button>--}}
{{--                            </div>--}}
{{--                            <div class="owl-dots disabled"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="latest-product__text">--}}
{{--                        <h4>Review Products</h4>--}}
{{--                        <div class="latest-product__slider owl-carousel owl-loaded owl-drag">--}}


{{--                            <div class="owl-stage-outer">--}}
{{--                                <div class="owl-stage"--}}
{{--                                     style="transform: translate3d(-1080px, 0px, 0px); transition: all 1.2s ease 0s; width: 2160px;">--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item active" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="owl-item cloned" style="width: 360px;">--}}
{{--                                        <div class="latest-prdouct__slider__item">--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" class="latest-product__item">--}}
{{--                                                <div class="latest-product__item__pic">--}}
{{--                                                    <img src="img/latest-product/lp-3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="latest-product__item__text">--}}
{{--                                                    <h6>Crab Pool Security</h6>--}}
{{--                                                    <span>$30.00</span>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-nav">--}}
{{--                                <button type="button" role="presentation" class="owl-prev"><span--}}
{{--                                        class="fa fa-angle-left"><span></span></span></button>--}}
{{--                                <button type="button" role="presentation" class="owl-next"><span--}}
{{--                                        class="fa fa-angle-right"><span></span></span></button>--}}
{{--                            </div>--}}
{{--                            <div class="owl-dots disabled"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="from-blog spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-title from-blog__title">--}}
{{--                        <h2>From The Blog</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic">--}}
{{--                            <img src="img/blog/blog-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <ul>--}}
{{--                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>--}}
{{--                                <li><i class="fa fa-comment-o"></i> 5</li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="#">Cooking tips make cooking simple</a></h5>--}}
{{--                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic">--}}
{{--                            <img src="img/blog/blog-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <ul>--}}
{{--                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>--}}
{{--                                <li><i class="fa fa-comment-o"></i> 5</li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>--}}
{{--                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic">--}}
{{--                            <img src="img/blog/blog-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <ul>--}}
{{--                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>--}}
{{--                                <li><i class="fa fa-comment-o"></i> 5</li>--}}
{{--                            </ul>--}}
{{--                            <h5><a href="#">Visit the clean farm in the US</a></h5>--}}
{{--                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
