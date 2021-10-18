@extends('layouts.app')

@section('content')

    <section class="sufia-slider">
        <div class="slider-main">
            <!-- Slider Item -->
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'></div>
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide2.jpg')}}")'></div>
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
        </div>
    </section>

    <section id="service" class="pt_100 pb_50">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-part ">
                        <h2 class="main_title mb_20">Why Choose Bitcoin</h2>
                        <p class="mb_50">The generated Lorem Ipsum is therefore always free from repetition, injected
                            humour, or non-characteristic words etc.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @for($i = 0; $i < 10; $i++)
                    <div class="col-md-4 col-xs-6 mb_50">
                        <div class="service" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'>
                            <h4 class="mtb_20">Safe And Secure</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-info">Read more</button>
                                <button class="btn btn-info">Referral link</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="sufia-slider">
        <div class="slider-main">
            <!-- Slider Item -->
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'></div>
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide2.jpg')}}")'></div>
            <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
        </div>
    </section>

    <section id="prices" class="prices">
        <div class="container">
            <div class="heading-part text-center">
                <h2 class="main_title mt_100 mb_20 wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Crypto currency
                    Prices</h2>
                <p class="mb_50">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum. Perspiciatis unde omnis iste natus error sit.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-left">
                        <thead>
                        <tr>
                            <th>Cryptocurrency</th>
                            <th>Price</th>
                            <th>24h % Change</th>
                            <th>24h Volume (coin)</th>
                            <th>Supply</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="images/coins/1.png" class="currency-icon" alt="">Bitcoin</td>
                            <td>9,290.06 $</td>
                            <td class="up">14.44%</td>
                            <td>218,087 BTC</td>
                            <td>923,629</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/2.png" class="currency-icon" alt="">Ethereum</td>
                            <td>407.13 $</td>
                            <td class="up">16.17%</td>
                            <td>1,223,367 ETH</td>
                            <td>663,133</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/3.png" class="currency-icon" alt="">Exchange Union</td>
                            <td>7.47 $</td>
                            <td class="down">-1.09%</td>
                            <td>3,352 XUC</td>
                            <td>427,132</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/4.png" class="currency-icon" alt="">Ripple</td>
                            <td>0.22 $</td>
                            <td class="up">20.80%</td>
                            <td>211,418,299 XRP</td>
                            <td>719,280</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/5.png" class="currency-icon" alt="">Veritaseum</td>
                            <td>84.22 $</td>
                            <td class="down">-14.56%</td>
                            <td>36 VERI</td>
                            <td>218,887</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/6.png" class="currency-icon" alt="">DigitalCash</td>
                            <td>709.31 $</td>
                            <td class="down">-1.18%</td>
                            <td>125,361 DASH</td>
                            <td>427,132</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/7.png" class="currency-icon" alt="">Monero</td>
                            <td>78.97 $</td>
                            <td class="up">20.55%</td>
                            <td>2,281,288 LTC</td>
                            <td>719,280</td>
                        </tr>
                        <tr>
                            <td><img src="images/coins/8.png" class="currency-icon" alt=""> Litecoin</td>
                            <td>156.32 $</td>
                            <td class="up">1.18%</td>
                            <td>255,226 XMR</td>
                            <td>218,887</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


<!-- =====  BANNER STRAT  ===== -->
{{--<div class="banner">--}}
{{--    <div id="particles-js"></div>--}}
{{--    <div class="banner-detail ">--}}
{{--        <div class="cd-intro">--}}
{{--            <h1 class="cd-headline letters type">--}}
{{--            <span class="cd-words-wrapper waiting">--}}
{{--              <b class="is-visible">Choose Progress</b>--}}
{{--              <b>Become Successful!</b>--}}
{{--            </span>--}}
{{--            </h1>--}}
{{--            <p class="mt_20 light">A wonderful serenity has taken possession of my entire soul, like these sweet--}}
{{--                <br> mo alone, and feel the charm of existence in this spot.</p>--}}
{{--            <button class="custom-btn custom-btns light" type="button"><span>Learn More</span></button>--}}
{{--            <div class="home-arrow-down"> <a href="#about" class="btn"><i class="fa fa-long-arrow-down"></i></a> </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- =====  BANNER END  ===== -->
<!-- =====  WORK WITH US STRAT  ===== -->
{{--<section class="text-center parallax" data-source-url="images/Parallax01.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2 col-sm-12 ptb_100">--}}
{{--                <div class="story_detail">--}}
{{--                    <h2 class="main_title light mb_20">Buy And Sell Bitcoin<span class="red">?</span> </h2>--}}
{{--                    <h4 class="mtb_20 light"> <a class="light">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br>deserunt mollit anim id est laborum.</a></h4>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam earum, provident ad, porro aperiam dolore, blanditiis, nihil pariatur eius adipisci consequuntur officiis. Excepturi, nostrum? Id incidunt nesciunt officia hic distinctio nihil pariatur..</p>--}}
{{--                </div>--}}
{{--                <button class="custom-btn custom-btns light mt_20" type="button"><span>JOIN US NOW</span></button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  WORK WITH US END  ===== -->
<!-- =====  PROGRESS START  ===== -->
{{--<section class=" ptb_50 bg-dark">--}}
{{--    <div class="container">--}}
{{--        <!-- Progress Bar  -->--}}
{{--        <div class="row">--}}
{{--            <div class="skils-circle">--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="first circle"> <strong></strong> <span>Bitcoin</span> </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="second circle"> <strong></strong> <span>Ethereum</span> </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="third circle"> <strong></strong> <span>Exchange Union</span> </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="fourth circle"> <strong></strong> <span>Ripple</span> </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="fifth circle"> <strong></strong> <span>Veritaseum</span> </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-4 skill mtb_50">--}}
{{--                    <div class="sixth circle"> <strong></strong> <span>DigitalCash</span> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--Progress Bar -->--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  PROGRESS END  ===== -->
<!-- =====  HOW IT WORKS START  ===== -->
{{--<section class="ptb_100">--}}
{{--    <div class="container">--}}
{{--        <div class="about-inner ">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-7">--}}
{{--                    <div class="steps-text mr_60">--}}
{{--                        <div class="heading-part ">--}}
{{--                            <h2 class="main_title about-heading pb_20">Simple Steps to Get Started</h2>--}}
{{--                        </div>--}}
{{--                        <div class="row text-left ml_10 pt_50">--}}
{{--                            <div class="feature-i-left">--}}
{{--                                <div class="icon-right"><img src="images/serviceicon/how-1.png" alt="#"></i>--}}
{{--                                </div>--}}
{{--                                <h4 class="mb_10">Buy & Sell Online</h4>--}}
{{--                                <p>You can use Digitalcoin to transact freely and without borders, government intervention, or chargebacks. Digitalcoin can be converted to any currency including the USD, Euro, Yuan, Ruble and more.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row text-left ml_10 pt_50">--}}
{{--                            <div class="feature-i-left">--}}
{{--                                <div class="icon-right"><img src="images/serviceicon/how-2.png" alt="#"></i>--}}
{{--                                </div>--}}
{{--                                <h4 class="mb_10">Choose Your Storage</h4>--}}
{{--                                <p>You can use Digitalcoin to transact freely and without borders, government intervention, or chargebacks. Digitalcoin can be converted to any currency including the USD, Euro, Yuan, Ruble and more.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row text-left ml_10 ptb_50">--}}
{{--                            <div class="feature-i-left">--}}
{{--                                <div class="icon-right"><img src="images/serviceicon/how-3.png" alt="#"></i>--}}
{{--                                </div>--}}
{{--                                <h4 class="mb_10">Secure Money Transactions</h4>--}}
{{--                                <p>You can use Digitalcoin to transact freely and without borders, government intervention, or chargebacks. Digitalcoin can be converted to any currency including the USD, Euro, Yuan, Ruble and more.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-5">--}}
{{--                    <figure> <img src="images/about-img.jpg" alt="#"> </figure>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  HOW IT WORKS END  ===== -->
<!-- =====  TEAM START  ===== -->
{{--<section id="team" class="text-center ptb_100">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-md-offset-3">--}}
{{--                <div class="heading-part ">--}}
{{--                    <h2 class="main_title mb_20">Our Creative Team</h2>--}}
{{--                    <p class="mb_50">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <!--Team Carousel -->--}}
{{--            <div class="team_grid">--}}
{{--                <div class="team3col  owl-carousel">--}}
{{--                    <div class="item team-detail">--}}
{{--                        <div class="team-item-img"> <img src="images/tm1.jpg"> </div>--}}
{{--                        <div class="team-designation mt_20">php Developer</div>--}}
{{--                        <h3 class="team-title  mt_10 mb_20">joseph Lui </h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>--}}
{{--                        <ul class="social mt_20">--}}
{{--                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="item team-detail">--}}
{{--                        <div class="team-item-img"> <img src="images/tm2.jpg"> </div>--}}
{{--                        <div class="team-designation mt_20">php Developer</div>--}}
{{--                        <h3 class="team-title  mt_10 mb_20">joseph Lui </h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>--}}
{{--                        <ul class="social mt_20">--}}
{{--                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="item team-detail">--}}
{{--                        <div class="team-item-img"> <img src="images/tm3.jpg"> </div>--}}
{{--                        <div class="team-designation mt_20">php Developer</div>--}}
{{--                        <h3 class="team-title  mt_10 mb_20">joseph Lui </h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>--}}
{{--                        <ul class="social mt_20">--}}
{{--                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="item team-detail">--}}
{{--                        <div class="team-item-img"> <img src="images/tm4.jpg"> </div>--}}
{{--                        <div class="team-designation mt_20">php Developer</div>--}}
{{--                        <h3 class="team-title  mt_10 mb_20">joseph Lui </h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>--}}
{{--                        <ul class="social mt_20">--}}
{{--                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="item team-detail">--}}
{{--                        <div class="team-item-img"> <img src="images/tm5.jpg"> </div>--}}
{{--                        <div class="team-designation mt_20">php Developer</div>--}}
{{--                        <h3 class="team-title  mt_10 mb_20">joseph Lui </h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, sea in odio erat, volumu Clita prodesset Rem ipsum dolor s..</p>--}}
{{--                        <ul class="social mt_20">--}}
{{--                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--End Team Carousel -->--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  TEAM END  ===== -->
<!-- =====  CLIENT START  ===== -->
{{--<section id="client" class="text-center bg-dark parallax" data-source-url="images/Parallax02.jpg">--}}
{{--    <div class="container">--}}
{{--        <div class="type-01 ptb_100 ">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-md-offset-2 col-sm-12">--}}
{{--                    <div class="client owl-carousel">--}}
{{--                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>--}}
{{--                            <h2 class="main_title light mtb_30">simply of the printing and  industry Lorem Ipsum has been</h2>--}}
{{--                            <p>Lorem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>--}}
{{--                            <div class="client-title  mt_40"><strong class="light">joseph Lui</strong> ---}}
{{--                                <div class="client-designation">php Developer</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>--}}
{{--                            <h2 class="main_title light mtb_30">simply text of the and typesetting industry Lorem Ipsum has been</h2>--}}
{{--                            <p>Ddolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>--}}
{{--                            <div class="client-title  mt_40"><strong class="light">Mr.joseph Lui</strong> ---}}
{{--                                <div class="client-designation">Developer</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item client-detail"> <i class="fa fa-quote-left" aria-hidden="true"></i>--}}
{{--                            <h2 class="main_title light mtb_30">dummy text of the printing and typesetting industry  has been</h2>--}}
{{--                            <p>Sorem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset Rem ipsum dolor sit amet, sea in odio erat, volumus oporteat his at, mei ocurreret vulputate ex. Clita prodesset oportere patrioque ne nec Duo cu partem omnesque..</p>--}}
{{--                            <div class="client-title mt_40"><strong class="light">Lui joseph </strong>---}}
{{--                                <div class="client-designation">WordPress</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  CLIENT END  ===== -->
<!-- =====  BLOGS START  ===== -->
{{--<section id="blogs" class="text-center ptb_100">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-md-offset-3">--}}
{{--                <div class="heading-part ">--}}
{{--                    <h2 class="main_title mb_20">Our Blogs</h2>--}}
{{--                    <p class="mb_50">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Blog items  -->--}}
{{--        <div id="blog-post" class="blog owl-carousel ">--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"> <a href="images/blog/blog01.jpg" title="Beautiful Lady" data-source="images/blog/blog01.jpg"> <img src="images/blog/blog01.jpg"  alt="Bitcoin"></a> </div>--}}
{{--                        <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog03.jpg" title="Beautiful Lady" data-source="images/blog/blog03.jpg"> <img src="images/blog/blog03.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog04.jpg" title="Beautiful Lady" data-source="images/blog/blog04.jpg"> <img src="images/blog/blog04.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"><i class="fa fa-video-camera" aria-hidden="true"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog05.jpg" title="Beautiful Lady" data-source="images/blog/blog05.jpg"> <img src="images/blog/blog05.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"><i class="fa fa-soundcloud" aria-hidden="true"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog06.jpg" title="Beautiful Lady" data-source="images/blog/blog06.jpg"> <img src="images/blog/blog06.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"><i class="fa fa-link" aria-hidden="true"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog07.jpg" title="Beautiful Lady" data-source="images/blog/blog07.jpg"> <img src="images/blog/blog07.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"><i class="fa fa-file-image-o" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog-item item text-left">--}}
{{--                <div class="box-holder">--}}
{{--                    <div class="post-format">--}}
{{--                        <div class="thumb post-img"><a href="images/blog/blog08.jpg" title="Beautiful Lady" data-source="images/blog/blog08.jpg"> <img src="images/blog/blog08.jpg"  alt="Bitcoin"></a></div>--}}
{{--                        <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>--}}
{{--                    </div>--}}
{{--                    <div class="post-info mt_20 ">--}}
{{--                        <h2 class="mb_10"> <a href="#">There are many variations of passages lable</a> </h2>--}}
{{--                        <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>--}}
{{--                        <div class="details mt_20">--}}
{{--                            <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>--}}
{{--                            <div class="more pull-right"> <a href="single-blog.html">Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  BLOGS END  ===== -->
<!-- =====  WORK WITH US STRAT  ===== -->
{{--<section class="text-center bg-dark">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2 col-sm-12 ptb_100">--}}
{{--                <div class="story_detail">--}}
{{--                    <h2 class="main_title light mb_20">What Happened to Bitcoin<span class="red">?</span> </h2>--}}
{{--                    <h4 class="mtb_20 light"> <a class="light">The Bitcoin Core (BTC) network is in trouble due to high fees and slow transaction times. Bitcoin Cash (BCH) is the upgrade that solves these problems.</a></h4>--}}
{{--                </div>--}}
{{--                <button class="custom-btn custom-btns light mt_20" type="button"><span>JOIN US NOW</span></button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  WORK WITH US END  ===== -->
<!-- =====  CONTACT START  ===== -->
{{--<section id="contact" class="ptb_100">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 mb_20 col-md-offset-3 text-center">--}}
{{--                <div class="heading-part ">--}}
{{--                    <h2 class="main_title mb_20">Get In Touch</h2>--}}
{{--                    <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- contact  -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-xs-12 contact-form">--}}
{{--                <!-- Contact FORM -->--}}
{{--                <div id="contact_form">--}}
{{--                    <form id="contact_body" method="post" action="contact_me.php">--}}
{{--                        <div class="col-md-6 col-xs-12">--}}
{{--                            <input class="full-with-form mt_30" type="text" name="name" placeholder="Name" data-required="true" />--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-xs-12">--}}
{{--                            <input class="full-with-form mt_30" type="email" name="email" placeholder="Email Address" data-required="true" />--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-xs-12">--}}
{{--                            <input class="full-with-form mt_30" type="text" name="phone1" placeholder="Phone Number" maxlength="15" data-required="true" />--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-xs-12">--}}
{{--                            <input class="full-with-form mt_30" type="text" name="subject" placeholder="Subject" data-required="true">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12">--}}
{{--                            <textarea class="full-with-form mt_30" name="message" placeholder="Message" data-required="true"></textarea>--}}
{{--                        </div>--}}
{{--                        <button class="custom-btn custom-btns mt_60" type="submit" tar><span>Send Message</span></button>--}}
{{--                    </form>--}}
{{--                    <div id="contact_results"></div>--}}
{{--                </div>--}}
{{--                <!-- END Contact FORM -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- =====  CONTACT END  ===== -->
