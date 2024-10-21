@extends('theme.layout')
@section('metatags')

    <title>{{$_s['site_title']}}</title>
    <meta name="description" content="{{$_s['meta_description']}}">
    <meta name="keywords" content="{{$_s['meta_keywords']}}">

@endsection

@section('content')

<div id="page-content">
    
     <?php// dd($home['longdetails']); ?>

     {!!$home['longdetails']!!}

        <!-- Home Banner slider -->
          {{-- @include('theme.home.slider') --}}
        <!-- End Home Banner slider -->

        <!-- Categories -->
            {{-- @include('theme.home.category') --}}
        <!-- End Categories -->

        <!-- collection -->
            {{-- @include('theme.home.collections') --}}
        {{-- End  collection--}}
        
        {{-- <div class="section">
            <div class="hero hero--medium hero__overlay bg-size background-parallax" style="background-image: url('{{$_s['home_page_banner']}}'); background-size: cover; background-position: 50% 31px; background-repeat: no-repeat;">
                <img class="bg-img blur-up" src="{{$_s['home_page_banner']}}" alt="banner" style="display: none;">
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text text-large center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <p class="mega-small-title">{{$_s['site_title']}}</p>
                            <h2 class="h1 mega-title">Best Collection</h2>
                            <p class="mega-subtitle">Get Inspired By The Latest And Greatest Trend</p>
                            <a href="{{URL::to('/shop')}}" class="btn border-btn-1 btn--large">Shop Now</a>  
                        </div>
                    </div>
                </div>            
            </div>
        </div> --}}


        <!-- Popular Products -->
        {{-- @include('theme.home.popular_products') --}}
        <!-- End Popular Products -->



   

</div>
@endsection

@section('js')

<script>

    $(document).ready(function () {



    });

</script>


@endsection