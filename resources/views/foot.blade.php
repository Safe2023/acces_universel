@extends('layouts.header')
@section('content')
<style>
    .footer-area {
        position: relative;
        display: block;
        background: #222222;
    }

    .footer {
        position: relative;
        display: block;
        padding: 15px 0 10px;
        z-index: 1;
    }

    .single-footer-widget {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .single-footer-widget .title {
        position: relative;
        display: block;
        padding-bottom: 15px;
        margin-top: -4px;
        margin-bottom: 25px;
    }

    .single-footer-widget .title:before {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 1px;
        content: "";
    }

    .single-footer-widget .title h3 {
        color: #ffffff;
        font-size: 20px;
        line-height: 24px;
        font-weight: 800;
        text-transform: uppercase;
    }

    .single-footer-widget .our-company-info {
        position: relative;
        display: block;
    }

    .single-footer-widget .our-company-info .footer-logo {
        position: relative;
        display: block;
        padding-bottom: 20px;
    }

    .single-footer-widget .our-company-info .footer-logo a {
        display: inline-block;
    }

    .single-footer-widget .our-company-info .text {
        position: relative;
        display: block;
    }

    .single-footer-widget .our-company-info .text p {
        color: #ffffff;
        font-size: 16px;
        line-height: 36px;
        font-weight: 400;
        margin: 0;
    }


    .single-footer-widget .company-info-links {
        position: relative;
        display: block;
        margin-top: -15px;
    }

    .single-footer-widget .company-info-links li {
        position: relative;
        display: block;
        margin-bottom: 4px;
        line-height: 42px;
    }

    .single-footer-widget .company-info-links li:last-child {
        margin-bottom: 0;
    }

    .single-footer-widget .company-info-links li a {
        position: relative;
        display: block;
        padding-left: 30px;
        color: #ffffff;
        font-size: 16px;
        font-weight: 400;
        transition: all 200ms linear;
        transition-delay: 0.1s;
        font-family: 'Hind Siliguri', sans-serif;
    }

    .single-footer-widget .company-info-links li a:before {
        position: absolute;
        content: "\f10c";
        font-family: "Flaticon";
        top: 0;
        left: 0;
        bottom: 0;
        font-size: 16px;
    }



    .single-footer-widget .resources-links {
        position: relative;
        display: block;
        margin-top: -15px;
    }

    .single-footer-widget .resources-links li {
        position: relative;
        display: block;
        margin-bottom: 4px;
        line-height: 42px;
    }

    .single-footer-widget .resources-links li:last-child {
        margin-bottom: 0;
    }

    .single-footer-widget .resources-links li a {
        position: relative;
        display: block;
        padding-left: 30px;
        color: #ffffff;
        font-size: 16px;
        font-weight: 400;
        transition: all 200ms linear;
        transition-delay: 0.1s;
        font-family: 'Hind Siliguri', sans-serif;
    }

    .single-footer-widget .resources-links li a:before {
        position: absolute;
        content: "\f10c";
        font-family: "Flaticon";
        top: 0;
        left: 0;
        bottom: 0;
        font-size: 16px;
    }



    .single-footer-widget .subscribe-box {
        position: relative;
        display: block;
    }

    .single-footer-widget .subscribe-form {
        position: relative;
        display: block;
        width: 100%;
    }

    .single-footer-widget .subscribe-form input[type="email"] {
        position: relative;
        display: block;
        background: #ffffff;
        border: 1px solid #ffffff;
        color: #000000;
        font-size: 16px;
        font-weight: 500;
        font-style: normal;
        width: 100%;
        height: 30px;
        padding: 0 20px;
        border-bottom-right-radius: 30px;
        font-family: 'Hind Siliguri', sans-serif;
        transition: all 500ms ease;
    }

    .single-footer-widget .subscribe-form input::-webkit-input-placeholder {
        color: #777777;
    }

    .single-footer-widget .subscribe-form input:-moz-placeholder {
        color: #777777;
    }

    .single-footer-widget .subscribe-form input::-moz-placeholder {
        color: #777777;
    }

    .single-footer-widget .subscribe-form input:-ms-input-placeholder {
        color: #777777;
    }

    .single-footer-widget .subscribe-form button {
        margin-top: 30px;
        padding: 0 50px;
    }

    .single-footer-widget .subscribe-form input[type="email"]:focus {
        background: #f5f5f5;
        border-bottom-right-radius: 30px;
    }

    .single-footer-widget .subscribe-form input[type="email"]:focus+button,
    .single-footer-widget .subscribe-form button:hover {}



    .footer-bottom {
        position: relative;
        display: block;
        overflow: hidden;
        padding: 0px 0;
    }

    .footer-bottom .outer-box {
        position: relative;
        border-top: 2px solid #363636;
        padding: 8px 0;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-bottom .outer-box .single-box {
        position: relative;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
        width: 100%;
    }

    .copyright-text {
        position: relative;
        display: block;
    }

    .copyright-text p {
        color: #bbbbbb;
        font-size: 18px;
        line-height: 30px;
        font-weight: 400;
        margin: 0;
    }

    .copyright-text p a {
        color: #bbbbbb;
        font-weight: 500;
        transition: all 500ms ease;
    }


    .footer-bottom .our-info-box {
        position: relative;
        display: block;
    }

    .footer-bottom .our-info-box ul {
        overflow: hidden;
    }

    .footer-bottom .our-info-box ul li {
        position: relative;
        display: block;
    }

    .footer-bottom .our-info-box ul li a {
        color: #bbbbbb;
        font-size: 18px;
        line-height: 30px;
        font-weight: 400;
        transition: all 200ms linear;
        transition-delay: 0.1s;
    }

    .footer-bottom .our-info-box p {
        color: #bbbbbb;
        font-size: 18px;
        line-height: 30px;
        font-weight: 400;
        margin: 0;
    }


    .footer-social-links {
        position: relative;
        display: block;
        float: right;
    }

    .footer-social-links ul {
        position: relative;
        display: block;
    }

    .footer-social-links ul li {
        position: relative;
        display: inline-block;
        float: left;
        margin-right: 25px;
    }

    .footer-social-links ul li:last-child {
        margin-right: 0;
    }

    .footer-social-links ul li a {
        position: relative;
        display: block;
        width: 50px;
        height: 50px;
        background: #363636;
        border: 0px solid 363636;
        border-radius: 0;
        color: #ffffff;
        font-size: 18px;
        line-height: 50px;
        text-align: center;
        transition: all 200ms linear;
        transition-delay: 0.1s;
    }

    .footer-social-links ul li a:hover {
        background: #000000;
    }
</style>

<style>
    .latest-blog-style3-area {
        position: relative;
        display: block;
        background: #ffffff;
        padding: 60px 0 40px;
    }

    .latest-blog-style3-area .top {
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-end;
        flex-wrap: wrap;
    }

    .latest-blog-style3-area .sec-title-style3 {}

    .latest-blog-style3-area .button {
        position: relative;
        display: block;
        padding-bottom: 60px;
    }

    .single-blog-post-style3 {
        position: relative;
        display: block;
        padding-bottom: 40px;
    }

    .single-blog-post-style3 .img-holder {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .single-blog-post-style3 .img-holder img {
        width: 100%;
    }

    .single-blog-post-style3:hover .overlay-style-one {
        opacity: 1;
        transform: scaleY(1) skew(0deg, 0deg);
        transition: all 0.7s cubic-bezier(0.62, 0.21, 0.45, 1.22);
    }

    .single-blog-post-style3 .img-holder .date-box {
        position: absolute;
        bottom: 45px;
        right: 30px;
        width: 55px;
        height: 80px;
        background: rgba(0, 0, 0, 0.80);
        text-align: center;
        padding: 10px 0 6px;
        z-index: 2;
    }

    .single-blog-post-style3 .img-holder .date-box:before {
        position: absolute;
        content: "";
        bottom: -15px;
        right: 0;
        border-bottom: 15px solid transparent;
        border-right: 15px solid rgba(0, 0, 0, 0.80);
    }

    .single-blog-post-style3 .img-holder .date-box h3 {
        color: #ffffff;
        font-size: 24px;
        line-height: 18px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .single-blog-post-style3 .img-holder .date-box h3 span {
        font-size: 14px;
    }




    .single-blog-post-style3 .title-holder {
        position: relative;
        display: block;
        background: #f5f5f5;
        padding: 30px 40px 40px;
    }

    .single-blog-post-style3 .title-holder .static-content {
        position: relative;
        display: block;
        transition-delay: .1s;
        transition-timing-function: ease-in-out;
        transition-duration: .5s;
        transition-property: all;
    }

    .single-blog-post-style3:hover .title-holder .static-content {
        opacity: 0;
    }

    .single-blog-post-style3 .title-holder .categories {
        position: relative;
        display: block;
        z-index: 1;
    }

    .single-blog-post-style3 .title-holder .categories:before {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 40px;
        background: #dcebff;
        border-radius: 50%;
        content: "";
        z-index: -1;
    }

    .single-blog-post-style3 .title-holder .categories p {
        position: relative;
        display: block;
        padding-left: 20px;
        color: #0051bc;
        font-size: 14px;
        line-height: 40px;
        font-weight: 700;
        text-transform: uppercase;
        margin: 0;
        transition: all 300ms linear;
        transition-delay: 0.1s;
        font-family: 'Nunito Sans', sans-serif;
    }

    .single-blog-post-style3 .title-holder h3 {
        font-size: 24px;
        line-height: 36px;
        font-weight: 700;
        margin: 16px 0 0;
    }

    .single-blog-post-style3 .title-holder h3 a {
        color: #222222;
        transition: all 200ms linear;
        transition-delay: 0.1s;
    }

    .single-blog-post-style3 .title-holder h3 a:hover {
        color: #0051bc;
    }

    .single-blog-post-style3 .title-holder .readmore-button {
        position: relative;
        display: block;
        padding-top: 22px;
    }

    .single-blog-post-style3 .title-holder .readmore-button a {
        color: #0051bc;
        font-size: 16px;
        font-weight: 700;
        text-transform: capitalize;
        transition: all 200ms linear;
        transition-delay: 0.1s;
        font-family: 'Nunito Sans', sans-serif;
    }

    .single-blog-post-style3 .title-holder .readmore-button a i {
        position: relative;
        display: inline-block;
        padding-left: 10px;
    }

    .single-blog-post-style3 .title-holder .overlay-content {
        position: absolute;
        top: 0;
        left: 0;
        bottom: -50px;
        right: 0;
        padding: 30px 40px 40px;
        background: #ffffff;
        -webkit-box-shadow: 0px 4px 7px 1px #ebebeb;
        box-shadow: 0px 4px 7px 1px #ebebeb;
        transition-delay: .1s;
        transition-timing-function: ease-in-out;
        transition-duration: .5s;
        transition-property: all;
        opacity: 1;
        transform-origin: top;
        transform: scaleY(0);
    }

    .single-blog-post-style3:hover .title-holder .overlay-content {
        transform: scaleY(1.0);
    }
</style>



<section class="latest-blog-style3-area" id="alaune">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="top">
                        <div class="sec-title-style3">
                            <p>Dernières nouvelles</p>
                            <div class="big-title"><h2>Les actualités de ACCES UNIVERSEL</h2></div>
                            <div class="border-box">
                                <div class="borders-left thm-bgc4"></div>
                                <div class="borders-right thm-bgc4"></div>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn-fours thm-bgc3" href=""><span class="txt">Tout voir...</span></a>
                        </div>     
                    </div>
                </div>
            </div>
           
            <div class="row container justify-content-center">
                <!--Start single blog post style3-->
              
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post-style3 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img class="img-fluid" style="max-height: 270px;" src="{{asset('/upload/posts/'.$latest->image_path)}}" alt="Blog">
                                <div class="overlay-style-one bg3"></div>
                                <div class="date-box">
                                    <h3>ctfxg<br> <span>dxgrxt</span> <br>fxxr</h3>
                                </div> 
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="categories">
                                        <p style="color: rgb(231, 100, 13)">wxgrdxrgwdx</p>
                                    </div>   
                                    <h3 class="blog-title"><a style="color: rgb(231, 100, 13)" href="{{route('single_blog',tronquerIdEnChaine($latest->id))}}">dgwgrwdgrwdxgrxr</a></h3>
                                </div>
                                <div class="overlay-content clearfix">
                                    <div class="categories">
                                        <p style="color: rgb(231, 100, 13)">
                                          wrgrwergerg
                                        </p>
                                    </div>   
                                    <h3 class="blog-title"><a style="color: rgb(231, 100, 13)" href="{{route('single_blog',tronquerIdEnChaine($latest->id))}}">drwgrdwwfddwf</a></h3> 
                                    <div class="readmore-button">
                                        <a style="color: rgb(231, 100, 13)" href="{{route('single_blog',tronquerIdEnChaine($latest->id))}}">Lire plus...<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
               
                
                <!--End single blog post style3-->
            </div>
           
        </div>
    </section>



















<footer class="footer-area style4">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget marbtm50">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="{{url('/')}}"><img src="{{asset('/asset/au/logo_01.png')}}" alt="Logo de ACCES UNIVERSEL" title="Logo"></a>
                            </div>
                            <div class="text">
                                <p>Nous serons ravis de vous accueillir dans nos locaux.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget style4 marbtm50">
                        <div class="title">
                            <h3>ccc Universel</h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <ul class="company-info-links">
                                    <li><a href="javascript:void(0)">Accueil</a></li>
                                    <li><a href="javascript:void(0)">Formation</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul class="company-info-links">
                                    <li><a href="javascript:void(0)">Actualités</a></li>
                                    <li><a href="javascript:void(0)">Contactez-nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                {{-- <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget style4">
                        <div class="title">
                            <h3>RESOURCES</h3>
                        </div>
                        <ul class="resources-links">
                            <li><a href="#">Personal Loan</a></li>    
                            <li><a href="#">Home Loan</a></li>    
                            <li><a href="#">Car Loan</a></li>    
                            <li><a href="#">Business Loan</a></li>       
                        </ul>                     	  
                    </div>
                </div> --}}
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.9s">
                    <div>
                        <div class="single-footer-widget style4 martop50">
                            <div class="title">
                                <h3>S'ABONNER</h3>
                            </div>
                            <div class="subscribe-box">
                                <form class="subscribe-form" id="subscribe-form">
                                    <input type="email" id="email" name="email" placeholder="Email Address" class="@error('email') is-invalid @enderror">
                                    <span class="text-danger"></span>
                                    <button class="btn-four thm-bgc4"><span class="txt">Je m'abonne</span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </div>
    <div class="footer-bottom style4 wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
        <div class="container">
            <div class="outer-box">
                <div class="single-box">
                    <div class="copyright-text style4">
                        <p>Copyright © 2023 All Rights<br> Reserved. <a href="">ACCES UNIVERSEL.</a></p>
                    </div>
                </div>
                <div class="single-box">
                    <div class="our-info-box">
                        <ul>
                            <li><a href="tel:+22997138302" target="_blank">+229 97 138 302</a></li>
                            <li><a href="mailto:contact@accesuniversel.bj" target="_blank">contact@accesuniversel.bj</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-box">
                    <div class="our-info-box">
                        <p> 03 BP 500 JERICHO,<br>COTONOU BENIN</p>
                    </div>
                </div>
                <div class="single-box">
                    <div class="footer-social-links style4">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61553480523014&mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/accesuniversel" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            {{-- <li>
                                <a href="javascript:void(0);"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                            </li> --}}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
@endsection