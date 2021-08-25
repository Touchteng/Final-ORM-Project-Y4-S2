@extends('layouts.master')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ asset('img/product_banner.png') }}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Fashion</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Women</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">
                                <form action="" class="aa-sort-form">
                                    <label for="">Sort by</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">Name</option>
                                        <option value="3">Price</option>
                                        <option value="4">Date</option>
                                    </select>
                                </form>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg" style="display: flex;flex-wrap:wrap;margin:-5px">
                                <!-- start single product item -->
                                @foreach ($products as $item)
                                    <li style="width: calc(100% / 3 - 10px); box-sizing:border-box;margin:5px">
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="{{ asset($item->photo) }}"
                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="{{ route('stripe', $item->id) }}"><span
                                                    class="fa fa-shopping-cart"></span>Add
                                                To
                                                Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{ $item->name }}</a></h4>
                                                <span class="aa-product-price">$
                                                    {{ number_format($item->price, 2) }}</span>
                                                <p class="aa-product-descrip">{!! strip_tags($item->detail) !!}</p>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                    class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                data-toggle="modal"
                                                data-target="#quick-view-modal-{{ $item->id }}"><span
                                                    class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                @endforeach
                            </ul>
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
                                                                <a href="#" class="aa-add-to-cart-btn"><span
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
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Category</h3>
                            <ul class="aa-catg-nav">
                                @foreach ($categories as $item)
                                    <li><a href="{{ route('category', $item->id) }}"
                                            {{ Request::is('product/' . $item->id) ? 'style=color:red' : '' }}>{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Tags</h3>
                            <div class="tag-cloud">
                                @foreach ($tags as $item)
                                    <a href="{{ route('tag', $item->id) }}"
                                        {{ Request::is('product/tag/' . $item->id) ? 'style=background-color:red;color:white' : '' }}>{{ $item->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Recently Views</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    @foreach ($recent as $item)
                                        <li>
                                            <a href="#" class="aa-cartbox-img"><img alt="img"
                                                    src="{{ asset($item->photo) }}"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">{{ $item->name }}</a></h4>
                                                <p>1 x ${{ number_format($item->price, 2) }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
