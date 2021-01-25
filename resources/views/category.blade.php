@extends('_layouts.app')

@section('content')

    <section class="product spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All departments</span>
                            </div>
                            <ul>
                                @foreach($filtre as $category)
                                    <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                <div class="col-lg-9">
                    <div class="filter__item">

                    <div class="row">
                        @foreach($user_posts as $user_post)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/storage/images/items/{{$user_post->image}}" style="background-image: url(&quot;img/product/product-1.jpg&quot;);">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/items/{{$user_post->id}}">{{$user_post->name}}</a></h6>
                                    <h5>{{$user_post->price}} դրամ</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
{{--                    <div class="product__pagination">--}}
{{--                        <a href="#">1</a>--}}
{{--                        <a href="#">2</a>--}}
{{--                        <a href="#">3</a>--}}
{{--                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="col-lg-12">
        @if ($user_posts->lastPage() > 1)
            <div class="pagination-item d-flex justify-content-center mt-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item {{ ($user_posts->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $user_posts->url(1) }}" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $user_posts->lastPage(); $i++)
                            <li class="page-item">
                                <a class="page-link {{ ($user_posts->currentPage() == $i) ? ' pagination__link--active' : '' }}" href="{{ $user_posts->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ ($user_posts->currentPage() == $user_posts->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $user_posts->url($user_posts->currentPage()+1) }}" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        @endif
    </div>
    @endsection
