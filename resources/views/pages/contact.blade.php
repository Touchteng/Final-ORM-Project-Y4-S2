@extends('layouts.master')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
    <img src="{{ asset('img/product_banner.png') }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
        <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>         
            <li class="active">Contact</li>
        </ol>
        </div>
        </div>
    </div>
    </section>
    <!-- / catg header banner section -->

    <!-- start contact section -->
    <section id="aa-contact">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div>
                    {{session('success')}}
                </div>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div>
                    {{session('error')}}
                </div>
            </div>
        @endif
        <div class="row">
        <div class="col-md-12">
            <div class="aa-contact-area">
            <div class="aa-contact-top">
                <h2>We are wating to assist you..</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</p> -->
            </div>
            <!-- contact map -->
            <div class="aa-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9744.321249639874!2d104.92574975889413!3d11.555526852780218!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1629905088171!5m2!1sen!2skh" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9744.321249639874!2d104.92574975889413!3d11.555526852780218!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1629905088171!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
            <!-- Contact address -->
            <div class="aa-contact-address">
                <div class="row">
                <div class="col-md-8">
                    <div class="aa-contact-address-left">
                    <form  action="{{route('contact.post')}}" class="comments-form contact-form" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">                        
                                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control"
                                value="{{old('name')}}">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">                        
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control"
                                value="{{old('email')}}">
                            </div>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">                        
                                <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control"
                                value="{{old('subject')}}">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">                        
                                <input type="text" id="company" name="company" placeholder="Company" class="form-control"
                                value="{{old('company')}}">
                            </div>
                            </div>
                        </div>                  
                            
                        <div class="form-group">                        
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button class="aa-secondary-btn">Send</button>
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aa-contact-address-right">
                    <address>
                        <h4>Souvenir Shop</h4>
                        <p>Collect what you want!</p>
                        <p><span class="fa fa-home"></span>Location: Olympic, Phnom Penh, Cambodia</p>
                        <p><span class="fa fa-phone"></span>Phone: +855 10 345 789</p>
                        <p><span class="fa fa-envelope"></span>Email: souvenir_shop@gmail.com</p>
                    </address>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection