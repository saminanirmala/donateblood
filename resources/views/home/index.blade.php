@extends('layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="banner">

            <img src=" {{asset('public/images/banner.jpg')}}" class="img-responsive" alt="image"/>
        </div><!-- end of banner -->

        <div class="row">
            <div class="col-md-4 col-sm-4 bll">
                <div class="sm_sec">
                    <h2><a href="#">How to donate blood?</a></h2>
                    <a href="#"><img src=" {{asset('public/images/img1.jpg')}}" class="img-responsive" alt="img"/></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis....<a href="#">More</a></p>
                </div><!-- end of sm_sec -->
            </div><!-- end of col -->

            <div class="col-md-4 col-sm-4 bll">
                <div class="sm_sec">
                    <h2><a href="#">How to donate blood?</a></h2>
                    <a href="#"><img src="{{asset('public/images/img2.jpg')}}" class="img-responsive" alt="img"/></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis....<a href="#">More</a></p>
                </div><!-- end of sm_sec -->
            </div><!-- end of col -->

            <div class="col-md-4 col-sm-4 bll">
                <div class="sm_sec">
                    <h2><a href="#">How to donate blood?</a></h2>
                    <a href="#"><img src="{{asset('public/images/img3.jpg')}}" class="img-responsive" alt="img"/></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis....<a href="#">More</a></p>
                </div><!-- end of sm_sec -->
            </div><!-- end of col -->
        </div><!-- end of row -->

        <div class="row req">
            <div class="col-md-8 col-sm-8 col-xs-7 lft">
                <div class="bld_sec">
                    <span>RECENT BLOOD REQUESTS</span>
                    <div class="para_sec">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>
                    </div><!-- end of para_sec -->
                </div><!-- end of bld_sec -->

                <img src="{{asset('public/images/bner_img.jpg')}}" class="img-responsive" alt="image"/>
            </div><!-- end of col -->
            <div class="col-md-4 col-sm-4 col-xs-5 rght">
                <span><a href="#">Click here >></a></span>
                <img src=" {{asset('public/images/blood.jpg')}}" class="img-responsive" alt="image of blood"/>
            </div><!-- end of col -->
        </div><!-- end of req -->
    </div><!-- end of container -->
</section><!-- end of section -->
<div class="container">
 @stop
