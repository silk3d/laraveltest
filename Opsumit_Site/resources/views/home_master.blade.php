<!DOCTYPE html>
<html>
<head>


    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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

   <!--  ********  -->

        <div class="container">
            <div class="media_slider">
                <div class="row">
                    <div class="col-sm-1 col-md-1"><br/><br/> < </div>
                    <!-- <img class="banner_bg" src="/images/home_background.png"/> -->
                    <div class="col-sm-10 col-md-10">
                        <div class="slider_item">
                            <div class="slider_item_head">Opsumit REMS Program</div>
                            <div class="slider_item_content">Learn more about prescribing Opsumit for your patients</div>
                        </div>
                        <div class="slider_item">
                            <div class="slider_item_head">Seraphin Study</div>
                            <div class="slider_item_content">A long-term outcome study in PAH(>2 years)</div>
                        </div>
                        <div class="slider_item">
                            <div class="slider_item_head">Efficacy Results</div>
                            <div class="slider_item_content">Reduced disease progression &  PAH-related hospitalization</div>
                        </div>
                        <div class="slider_item">
                            <div class="slider_item_head">Safety</div>
                            <div class="slider_item_content">Review Important Safety Information</div>
                        </div>
                        <div class="slider_item">
                            <div class="slider_item_head">About OPSUMIT</div>
                            <div class="slider_item_content">Discover how OPSUMIT works on the endothelin pathway</div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1"><br/><br/> > </div>

                </div>
                <div class="row">

                </div>


            </div>
        </div>

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