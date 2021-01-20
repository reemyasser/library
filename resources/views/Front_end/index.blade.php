<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

@include('Front_end.includes.header')

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
      @include('Front_end.includes.navbar')
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-agileits">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="container">
                    <p class="b-txt">the</p>
                    <h2 class="title">
                        Library
                    </h2>
                    <ul class="banner-txt">
                        <li>share.</li>
                        <li> explore. </li>
                        <li>amplify.</li>
                    </ul>
                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- about -->
        <div class="about-sec section" id="about">
            <div class="container">
                <!-- about-left-grid -->
                <div class="col-md-7 about-left-grid">
                    <div class="inner-about2">
                        <h4>the new books added to our Library</h4>
                        <h5>the library books</h5>
                        <ul class="about-list">
                            @foreach ($books as $item)
                                
                            
                           <li>
                            <a href="{{route('single.book',$item['id'])}}"> <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{$item['name']}}</a>
                            </li>
                                @endforeach
                        </ul>
                       
                    </div>
                   
                </div>
                <!-- //about-left-grid ends here-->
                <!-- about-right-grid -->
                <div class="col-md-5 about-right-grid"></div>
                <!-- //about-right-grid ends here -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //about ends here -->
        <!-- about bottom -->
        <div class="about-bottom section">
            <div class="container-fluid">
                <h4 class="rad-txt">
                    <span class="abtxt1">wonderful</span>
                    <span class="abtext"> world of reading</span>
                </h4>
                <!-- about-bottom grid1 -->
                <div class="col-md-6 about-bottom-right">
                  
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                    @for ($i = 0; $i < ((int) $categories->count()/2); $i++)
                        
                   
                   
                   
                        <div class="ab1">
                            <a href="{{route('front.show.books',$categories[$i]['id'])}}">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>{{$categories[$i]['name']}}</h5>
                               
                            </div>
                        </a>
                            <div class="clearfix"></div>
                        </div>
                
                   
                     @endfor
                        
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls service2">
                    @for ($i =((int)$categories->count()/2)+1; $i < $categories->count(); $i++)
                        
                   
                   
                   
                        <div class="ab1">
                            <a href="{{route('front.show.books',$categories[$i]['id'])}}">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>{{$categories[$i]['name']}}</h5>
                               
                            </div>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                
                   
                     @endfor
                        
                </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //about-bottom grid1 ends here -->
                <div class="col-md-6 home-about2">
                <!-- about-bottom grid2 -->
                <div class="col-md-6 col-sm-6 col-xs-6 bg-right"></div>
                <!-- //about-bottom grid2 ends here -->
                <!-- about-bottom grid3 -->
                <div class="col-md-6 col-sm-6 col-xs-6 w3ls-section  stats">
                    <div class="stats-aboutinfo services-main">
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>Books</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='{{App\Models\Book::count()}}' data-delay='.5' data-increment="300">221073</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-university" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>Categories</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='{{App\Models\Category::count()}}' data-delay='.5' data-increment="50">980</div>

                            </div>
                            <div class="clearfix"></div>


                        </div>
                       
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>visitors</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='{{App\Models\Visitor::count()}}' data-delay='.5' data-increment="300">123623</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
               </div>
                <!-- //about-bottom grid3 ends here -->
                <!-- //Numscroller -->
                <div class="clearfix"></div>
            </div>
            <!-- //about container ends here-->
        </div>
        <!--//about bottom ends here-->
      
        <!--testimonials -->
        <div class="reviews section" id="testimonials">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">visitors</span>
                    <span class="abtext">testimonials</span>
                </h4>
                <div id="Carousel" class="slide carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c3.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c2.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c4.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c3.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c2.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c4.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{asset('Frontend/images/c1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                    </div>
                    <!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div>
                <!--.Carousel-->
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //testimonials-->
       
        <!-- footer -->
     @include('Front_end.includes.footer')