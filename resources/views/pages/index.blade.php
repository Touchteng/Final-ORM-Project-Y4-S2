@extends('layouts.master')
@section('content')
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        @foreach ($slides as $item)
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('img/slider/souvenir.jpg') }}" alt="" />
                                </div>
                                <div class="seq-title">
                                    <h2 data-seq>{{ $item->name }}</h2>
                                    <p data-seq>{!! strip_tags($item->detail) !!}</p>
                                    <a data-seq href="{{ route('category', $item->category_id) }}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            @foreach ($categories->take(1) as $item)
                                @if ($item->product)
                                    <div class="col-md-5 no-padding">
                                        <div class="aa-promo-left">
                                            <div class="aa-promo-banner">
                                                <img src="{{ asset($item->product->photo) }}" alt="img">
                                                <div class="aa-prom-content">
                                                    <span>$ {{ number_format($item->product->price, 2) }}</span>
                                                    <h4>{{ $item->name }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    @foreach ($categories->slice(1) as $item)
                                        @if ($item->product)
                                            <div class="aa-single-promo-right">
                                                <div class="aa-promo-banner">
                                                    <img src="{{ asset($item->product->photo) }}" alt="img">
                                                    <div class="aa-prom-content">
                                                        <span>$ {{ number_format($item->product->price, 2) }}</span>
                                                        <h4>{{ $item->name }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start baby product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            @foreach ($products as $item)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset($item->photo) }}" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="{{ route('stripe', $item->id) }}"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">{{ $item->name }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">$
                                                                {{ number_format($item->price, 2) }}</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $item->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="{{ route('product') }}">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                                <!-- quick view modal -->
                                @foreach ($products as $item)
                                    <div class="modal fade" id="quick-view-modal-{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                    <div class="row">
                                                        <!-- Modal view slider -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="aa-product-view-slider">
                                                                <div class="simpleLens-gallery-container" id="demo-1">
                                                                    <div class="simpleLens-container">
                                                                        <div class="simpleLens-big-image-container">
                                                                            <a class="simpleLens-lens-image"
                                                                                data-lens-image="{{ asset($item->photo) }}">
                                                                                <img src="{{ asset($item->photo) }}"
                                                                                    class="simpleLens-big-image">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal view content -->
                                                        <!-- Detail view -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left: 30px">
                                                            <div class="aa-product-view-content">
                                                                <h3>{{ $item->name }}</h3>

                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#">{{ $item->category->name }}</a>
                                                                </p>
                                                                <div class="aa-price-block">
                                                                    <span class="aa-product-view-price">$
                                                                        {{ number_format($item->price, 2) }}
                                                                    </span>
                                                                    <p class="aa-product-avilability">
                                                                        Avilability:
                                                                        <span>{{ $item->stock->name }}</span>
                                                                    </p>
                                                                </div>
                                                                <p>{!! $item->detail !!}</p>
                                                                <h4>Size : {{ $item->size->name }}</h4>
                                                                <div class="aa-prod-view-bottom">
                                                                    <a href="{{ route('stripe', $item->id) }}" class="aa-add-to-cart-btn"><span
                                                                            class="fa fa-shopping-cart"></span>Add
                                                                        To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                @endforeach
                                <!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                            <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
                            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->
@endsection
