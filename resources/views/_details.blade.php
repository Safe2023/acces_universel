@extends('layouts.header')
@section('content')
  

       
<section class="breadcrumb-area" style="background-image: url(/assets/img/au/formation.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1></h1>
                    </div>
                    <div class="border-box"></div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Détails</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<div>
    <section id="blog-area" class="blog-style1-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-post">
                       
                        <!--Start single blog post-->
                        <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img class="img-fluid" style="max-height: 445px; max-width: 775px;" src="/assets/img/au/formation.jpg" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="social-share-post">
                                            <div class="title"><h5>Patarger :</h5></div>
                                            <div class="social-links">
                                                <ul class="sociallinks-style-two float-left fix">
                                                    
                                                </ul> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="catogaries-box thm-bgc1">
                                    <h6>Formation</h6>
                                </div>
                            </div>
                            <div class="text-holder">
                              
                                
                                <ul class="meta-info">
                                    <li><h6><i class="fa fa-calendar thm-clr1" aria-hidden="true"> Date: </i><a href="javascript:void(0)"></a></h6></li>
                                  
                                        <li><h6><i class="fa fa-credit-card thm-clr1" aria-hidden="true"> Frais d'inscription: </i><a href="javascript:void(0)"></a></h6></li>
                                        <li><h6><i class="fa fa-credit-card thm-clr1" aria-hidden="true"> Frais de formation: </i><a href="javascript:void(0)"></a></h6></li>
                                 

                                </ul>
                                <h3 class="blog-title"><a href="javascript:void(0)"></a></h3>
                                <div class="text-box">
                                    <p style="text-align: justify;">
                                     
                                    </p>
                                </div>
                                <div class="tag-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="right pull-right">
                                                {{-- <p>Partager:</p> --}}      <ul class="sociallinks-style-two float-left fix">
                                                  
                                                </ul>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                      
                    </div>

                  
                    <div class="row justify-content-between" style = "margin-bottom: 10px">
                        <div></div>
                        <a target="_blank" href="" style="color: black"><input class="btn btn-info" type="button" value="S'inscrire à cette formation"> </a>
                      
                        <div>
                            <span>Télécharger : </span>
                            <a href="" target="_blank" rel="noopener noreferrer" download>
                                <button class="btn btn-secondary">
                                    <i class="fa fa-download"></i> Maquette
                                  </button>
                            </a>
                            <a href="" target="_blank" rel="noopener noreferrer" download>
                                <button class="btn btn-secondary">
                                    <i class="fa fa-download"></i> TdR
                                  </button>
                            </a>
                        </div>
                      
                    </div>
                    <hr>

                   
                </div>
            </div>
        </div>    
    </section>
   
</div>


    
@endsection