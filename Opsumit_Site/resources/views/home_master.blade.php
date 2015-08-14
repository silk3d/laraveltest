<!DOCTYPE html>
<html>
<head>


    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
<!--
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <script src="{{ URL::asset('js/carousel-script-min.js') }}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

    <link href="{{URL::asset('css/slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/carousel-style.css')}}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width" />
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    -->
    <script src="{{ URL::asset('js/isi_scroll.lib.js') }}"></script>
    <script src="{{ URL::asset('js/opsumit.js') }}"></script>
</head>
<body>

@include("shared.navigation")



<div class="site_wrapper">
    <div class="content_wrapper">

        <div class="container section_width">
            <div class="row section_height">
                <div class="col-sm-12 col-md-12 ">

                    <h1 class="home_header">Help Her Write Future Chapters</h1>
                    <h4>The only ERA approved to delay disease progression in WHO Group I patients</h4>
                    <div class="see_efficacy_results_btn">See efficacy results</div>


                    <div class="prescribing_info_btn">&nbsp;</div>



                </div>
            </div>


        </div>

<!-- media slider code -->
    <div class="media_slider_wrapper">
        <section class="slideshow">
            <div class="carousel-container">
                <div class="arrow">
                    <svg class="prev-arrow" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"> <g> <polygon points="11.868,1.904 29.964,20 11.868,38.096 10.035,36.264 26.298,20 10.035,3.737 "/> </g> </svg>
                </div>

                <div class="carousel-section">

                    <div class="carousel">

                        <div>
                            <section class="slide-content">
                                <section class="slide-heading">
                                    <h2>OPSUMIT <br>REMS Program</h2>
                                </section>
                                <section class="slide-subhead">
                                    <span>Learn more about prescribing OPSUMIT for your patients</span>
                                </section>
                            </section>
                            <section class="hidden-content">
                                <section class="slide-content-hidden">
                                    <img src="/images/media_slider/ACTOP15753_OpsHCP_Website_REMS_Program_Icon.png" alt="">
                                    <h2>OPSUMIT <br>REMS Program</h2>
                                    <span>Learn more about prescribing OPSUMIT for your patients</span>
                                </section>
                            </section>
                        </div>

                        <div>
                            <section class="slide-content">
                                <section class="slide-heading">
                                    <h2>SERAPHIN Study</h2>
                                </section>
                                <section class="slide-subhead">
                                    <span>A long-term outcome <br> study in PAH (>2 years)</span>
                                </section>
                            </section>
                            <section class="hidden-content">
                                <section class="slide-content-hidden">
                                    <img src="/images/media_slider/ACTOP15753_OpsHCP_Website_Seraphin_Study_Icon.png" alt="">
                                    <h2>SERAPHIN Study</h2>
                                    <span>A long-term outcome <br> study in PAH (>2 years)</span>
                                </section>
                            </section>
                        </div>

                        <div>
                            <section class="slide-content">
                                <section class="slide-heading">
                                    <h2>Efficacy Results</h2>
                                </section>
                                <section class="slide-subhead">
                                    <span>Reduced disease<br> progression & PAH-related <br>hospitalizations</span>
                                </section>
                            </section>
                            <section class="hidden-content">
                                <section class="slide-content-hidden">
                                    <img src="/images/media_slider/ACTOP15753_OpsHCP_Website_Efficacy_Results_Icon.png" alt="">
                                    <h2>Efficacy Results</h2>
                                    <span>Reduced disease<br> progression & PAH-related <br>hospitalizations</span>
                                </section>
                            </section>
                        </div>

                        <div>
                            <section class="slide-content">
                                <section class="slide-heading">
                                    <h2>Safety</h2>
                                </section>
                                <section class="slide-subhead">
                                    <span>Review Important <br> Safety Information</span>
                                </section>
                            </section>
                            <section class="hidden-content">
                                <section class="slide-content-hidden">
                                    <img src="/images/media_slider/ACTOP15753_OpsHCP_Website_Safety_Icon.png" alt="">
                                    <h2>Safety</h2>
                                    <span>Review Important <br> Safety Information</span>
                                </section>
                            </section>
                        </div>

                        <div>
                            <section class="slide-content">
                                <section class="slide-heading">
                                    <h2>About OPSUMIT</h2>
                                </section>
                                <section class="slide-subhead">
                                    <span>Discover how <br> OPSUMIT works on the  <br> endothelin pathway</span>
                                </section>
                            </section>
                            <section class="hidden-content">
                                <section class="slide-content-hidden">
                                    <img src="/images/media_slider/ACTOP15753_OpsHCP_Website_Safety_Icon.png" alt="">
                                    <h2>About OPSUMIT</h2>
                                    <span>Discover how <br> OPSUMIT works on the  <br> endothelin pathway</span>
                                </section>
                            </section>
                        </div>



                    </div>
                </div>
                <div class="arrow">
                    <svg class="next-arrow" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"> <g> <polygon points="11.868,1.904 29.964,20 11.868,38.096 10.035,36.264 26.298,20 10.035,3.737 "/> </g> </svg>
                </div>
            </div>
 </section>


        <!-- end media slider  -->





    </div>




</div>

@yield('sections')

<div class="isi_outer desktop">
    <div class="isi_inner">
        @include('shared.isi')
    </div>
</div>


</body>
</html>