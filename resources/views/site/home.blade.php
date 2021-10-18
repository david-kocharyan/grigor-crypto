@extends('layouts.add')

@section('content')
    <!-- Start Slider -->
    <section class="sufia-slider clearfix">
        <div class="slider-main">
            <!-- Slider Item -->
            <div class="single-slider" style="background-image:url({{asset('site/img/our/slide1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-text right">
                                <h1><span>Welcome to DG Core </span>Simple Creative Powerful</h1>
                                <a class="b-arrow" href="#contact"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Slider Item -->
            <!-- Slider Item -->
            <div class="single-slider" style="background-image:url({{asset('site/img/our/slide2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-text center">
                                <h1><span>Find a new way to develop your</span>DiGital business</h1>
                                <a class="b-arrow" href="#contact"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Slider Item -->

            <div class="single-slider" style="background-image:url({{asset('site/img/our/slide3.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-text left">
                                <h1><span> The Best Solutions to </span>Start Your Own Business</h1>
                                <a class="b-arrow" href="#contact"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--/ End Slider -->

    <!-- Start Features -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                    <div class="section-title">
                        <h2>Our Features</h2>
                        {{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-code"></i>
                        <h4>Front End</h4>
                        <p>Responsible for coding things from scratch, and enjoy bringing ideas to life in the browser.
                            The website’s front end is everything you see and can interact with using a browser.</p>
                    </div>
                    <!--/ End features -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-laptop"></i>
                        <h4>Back End</h4>
                        <p>Responsible for servers where your web pages are located and the underlying logic that
                            governs the website’s functions and processes.</p>
                    </div>
                    <!--/ End features -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-edit"></i>
                        <h4>UI/UX Design</h4>
                        <p>Responsible for clean design patterns, and thoughtful interactions. User experience design is
                            all about convenience and the pleasure of human-computer interaction.</p>
                    </div>
                    <!--/ End features -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-adjust"></i>
                        <h4>Graphic Design</h4>
                        <p>Responsible for communication and the aesthetic expression of concepts and ideas using
                            various graphic elements and tools. It takes your brand personality and covering it into the
                            visual design.</p>
                    </div>
                    <!--/ End features -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-eye"></i>
                        <h4>Quality Assurance</h4>
                        <p>Responsible for determining approach to QA on the project, verifying requirements of planned
                            feature, testing developed features manually.</p>
                    </div>
                    <!--/ End features -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1s">
                    <!-- Single features -->
                    <div class="single-features">
                        <i class="fa fa-random"></i>
                        <h4>Database architecture</h4>
                        <p>responsible for designing a particular type of software for businesses or organizations. It
                            focuses on the design, development, implementation and maintenance of computer programs that
                            store and organize information for businesses, agencies and institutions.</p>
                    </div>
                    <!--/ End features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Features -->

    <!-- Start Count Down -->
    <section id="countdown" class="count-down section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-check"></i>
                        <h2 class="count">110</h2>
                        <p>Projects Finished</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-star"></i>
                        <h2 class="count">85</h2>
                        <p>Happy Clients</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.7s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-pencil-square"></i>
                        <h2 class="count">1200</h2>
                        <p>Hours Worked</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.9s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-coffee"></i>
                        <h2 class="count">600</h2>
                        <p>Cups of Coffee</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Count Down -->

    <!-- Start about us -->
    <section id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                    <div class="section-title">
                        <h2>About Us</h2>
                        <p>DG core is not only an IT company but also a family filled with talented experts that help
                            global brands, enterprises, mid-size businesses or even startups with innovative solutions.
                            Here are gathered very creative and bright minded people who are ready to overcome all kinds
                            of barriers.
                            DG core team is the best people formula for great websites.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about-content text-center">
                        <h2>About Company</h2>
                        <p>Welcome to DG core. We are a professional website developing and designing company dedicated
                            to professional service,
                            quality and trustworthy results. With careful targeting we create highly functional websites
                            with the mixture of simplicity,
                            elegance and innovation for each of our clients.</p>
                        <p>Our passion becomes into a positive working relationship that reflects the true secret of our
                            success.
                            We care about your business as much as you do, and we are dedicated to your success.
                            We love to see you succeed !</p>
                    </div>
                </div>
{{--                <div class="col-md-5 col-sm-6 col-xs-12">--}}
{{--                    <div class="about-video">--}}
{{--                        <div class="single-video">--}}
{{--                            <a href="https://www.youtube.com/watch?v=wZWiRoktNWA" class="video-play mfp-iframe">--}}
{{--                                <i class="fa fa-play"></i></a>--}}
{{--                            <img src="{{asset('site/img/about.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--/ End about us -->

    <!-- Start Testimonial -->
    <section id="testimonials" class="testimonial section">
        <div class="container">
            <div class="row">
                <div class="testimonial-active wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>I'm really happy with your determination to finish this project. I know it wasn't easy, but I
                            knew you could do it.
                            Your helpful attitude makes it clear that you can continue to take on new challenges and
                            grow with the company. Thank you for your extra effort.</p>
                        <h4 class="t-name">— Egor Morozov</h4>
                    </div>
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>The project was completed to a great level and is fully functional. I was very impressed with
                            their dedicated hard work. Everyone wanted to do their best to help us develop our app and
                            website.
                            Their team is easy to work with and responsive to needs. It was clear they all worked hard
                            to develop the platforms.</p>
                        <h4 class="t-name">— Jessica Harris</h4>
                    </div>
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>DG Core collaborative team are excellent to work with. Their commitment, creativity and
                            tireless hard work produced an outstanding new website.</p>
                        <h4 class="t-name">— Samuel Adamson</h4>
                    </div>
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>DG core has never let me down. I’m pleased with our partnership and they consistently develop
                            reliable applications.
                            They estimate a range of hours for each project and they manage it efficiently.</p>
                        <h4 class="t-name">— Oleg Semionov</h4>
                    </div>
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>The project was executed on time, on budget, and according to our vision. I couldn’t ask for
                            anything more!</p>
                        <h4 class="t-name">— Armen Bejanian</h4>
                    </div>
                    <div class="testimonial-content">
                        <h2>What People Say?</h2>
                        <p>DG core is skilled and reliable. Their team is friendly and are experts in what they do. I
                            couldn’t ask for anything more.</p>
                        <h4 class="t-name">— Mariam Mkhitaryan</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonial -->

    <!-- Contact Us -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                    <div class="section-title">
                        <h2>Contact US</h2>
                        <p>Get in touch with us for questions and cooperation. We will be happy to get back to you.</p>
                        <span class="success-message label label-info badge-pill" style="font-size: 15px;"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-5 col-sm-6 col-xs-12 wow fadeInUp">
                    <form class="form">
                        <div class="form-group">
                            <input type="text" class="name" name="name" placeholder="Full Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="subject" name="subject" placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="message" name="message" rows="6" placeholder="Type Your Message Here"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="button primary submit"><i class="fa fa-send-o"></i>Submit</button>
                        </div>
                    </form>
                </div>
                <!--/ Contact Form -->
                <!-- Google Map -->
                <div class="col-md-7 col-sm-6 col-xs-12 wow fadeInUp">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.528269828364!2d44.51186741564366!3d40.175055578225496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf772db986b%3A0xb56c198affde7e6e!2zNyBUaWdyYW4gTWV0cyBBdmUsIFllcmV2YW4sINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2sjp!4v1619429535385!5m2!1sru!2sjp"
                            width="100%" height="385" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!--/ End Google Map -->
            </div>
        </div>
    </section>
    <!--/ End Clients Us -->
@endsection

@push('footer')
    <script>
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });

            $('.submit').click(function (){
                let data = {
                    'name': $('.name').val(),
                    'email': $('.email').val(),
                    'subject': $('.subject').val(),
                    'message': $('.message').val(),
                }

                $.ajax({
                    type: 'post',
                    url: "{{ route('contact') }}",
                    data: data,
                    success: function (data) {
                        $('.success-message').empty().html(data.success);
                        setTimeout(function(){
                            $('.success-message').empty();
                        }, 5000);
                        $('.name').val("");
                        $('.email').val("");
                        $('.subject').val("");
                        $('.message').val("");
                    },
                    error: function (data){
                        let errors = data.responseJSON;
                        $.each( errors.errors, function( key, value ) {
                            $(`.${key}`).css({"border": "1px solid red"})
                        });
                    }
                });
            });
        })
    </script>
@endpush
