@extends('layouts.layout')

@section('body-class', 'full-width grid-view columns-3 archive woocommerce-page')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-sorting">
                <div class="food-type-filter">
                    <div class="clear-food-type-filter chosen"><a href="#">Show All</a>
                    </div>
                    <div class="widget woocommerce widget_layered_nav">
                        <ul>
                            <li class="wc-layered-nav-term "><a href="#">Meat</a> <span class="food-type-icon"><i
                                            class="fa fa-cutlery"></i></span></li>
                            <li class="wc-layered-nav-term "><a href="#">Spicy</a> <span class="food-type-icon"><i
                                            class="fa fa-fire"></i></span></li>
                            <li class="wc-layered-nav-term "><a href="#">Veg</a> <span class="food-type-icon"><i
                                            class="po po-veggie-icon"></i></span></li>
                        </ul>
                    </div>
                    <div class="create-your-own"><a href="single-product-v3.html">Create your own</a></div>
                </div>
            </div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="columns-3">
                        <ul class="products">
                            @foreach($products->chunk(3) as $chunk)
                                @foreach($chunk as $product)
                                    <li class="product @if($loop->first) first @endif @if($loop->last)last @endif">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <div class="product-image-wrapper">
                                                    <a href="{{route('product')}}" class="woocommerce-LoopProduct-link">
                                                        <img src="{{asset($product->image)}}" width="350" height="350"
                                                             class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrapper">
                                                    <a href="{{route('product')}}" class="woocommerce-LoopProduct-link">
                                                        <h3>{{ $product->name }}</h3>
                                                        <div itemprop="description">
                                                            <p style="max-height: none;">{{ $product->description }}</p>
                                                        </div>
                                                        <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide "
                                                                 data-requested="1" data-type="radio" data-id="1"
                                                                 data-condition="">
                                                                <h3><span>Pick Size</span></h3>
                                                                <div class="ywapo_input_container ywapo_input_container_radio">

                                                                    <span class="ywapo_label_tag_position_after"><span
                                                                                class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                                    <span class="ywapo_label_price"><span
                                                                                class="woocommerce-Price-amount amount"><span
                                                                                    class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                                </div>
                                                                <div class="ywapo_input_container ywapo_input_container_radio">

                                                                    <span class="ywapo_label_tag_position_after"><span
                                                                                class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                    <span class="ywapo_label_price"><span
                                                                                class="woocommerce-Price-amount amount"><span
                                                                                    class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a rel="nofollow" href="{{route('product')}}" data-quantity="1"
                                                           data-product_id="{{ $product->id }}" data-product_sku=""
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.product-outer -->
                                    </li>
                            @endforeach
                        @endforeach
                        <!-- /.products -->
                        </ul>
                    </div>
                    @if($products->count() > 1)
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                @if($products->currentPage() != 1)
                                    <li><a class="page-numbers" href="?page=1"><<</a></li>
                                    <li><a class="page-numbers" href="{{ $products->previousPageUrl() }}"><</a>
                                    </li>
                                @endif
                                @if($products->count() > 1)
                                    @for($i = 1; $i <= $products->lastPage(); $i++)
                                        <li><a class="page-numbers @if($i == $products->currentPage()) current @endif"
                                               href="?page={{ $i }}">{{ $i }}</a></li>
                                    @endfor
                                @endif
                                @if($products->currentPage() != $products->lastPage())
                                    <li><a class="page-numbers" href="{{ $products->nextPageUrl() }}">></a></li>
                                    <li><a class="next page-numbers" href="?page={{ $products->lastPage() }}">>></a></li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>

@endsection