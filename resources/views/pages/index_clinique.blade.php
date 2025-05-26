 @extends('layout')

 @section('page')
 
    @include('partials.slider')
    <!--slider wrapper end-->
    <!--category wrapper start-->
    @include('partials.categories')
    <!--category wrapper end-->
    <!--about us wrapper start-->
    @include('partials.about')
    <!--about us wrapper end-->
    <!--appoint wrapper start-->
    <div class="container">
        @include('partials.appointment')
    </div>
    <!--appoint wrapper end-->
    <!--choose wrapper start-->
    @include('partials.choose')
    <!--choose wrapper end-->
    <!--team wrapper start-->
    @include('partials.team')
    <!--team wrapper end-->
    <!--vedio wrapper start-->
    @include('partials.video')
    <!--vedio wrapper end-->
    <!--event wrapper start-->
    @include('partials.events')
    <!-- event wrapper end-->
    <!-- counter wrapper start-->
    @include('partials.counter')
    <!-- counter wrapper end-->
    <!-- blog wrapper start-->
    @include('partials.blog')
    <!-- blog wrapper end-->
    <!--testimonial wrapper start-->
    @include('partials.testimonial')
    <!-- testimonial wrapper end-->
    <!-- booking wrapper start -->
    @include('partials.booking')
    <!--booking wrapper end-->
    <!--partner wrapper start-->
    @include('partials.partners')
    <!--partner wrapper end-->
    <!--news wrapper start-->
    @include('partials.newsletter')

@endsection