@extends('app')

@section('title')
    <title>HOWDY {{$pageTitle}}</title>
@stop


@section('content')
<div class="content">
    <div class="title">{{$pageTitle}}</div>
</div>
@stop


@section('sections')
        <div class="home_sections_container">


        <!-- ********  SECTION 1 ********* -->


        <div class="template_container">
            <div class="template_panel">
                <img src="http://site.xavier.edu/polt/typewriters/caligraph-small.jpg" height="100" width="100"/>
            </div>
            <div class="template_textarea">
                <h2><strong>Lorem ipsum dolor sit amet</strong></h2> consectetur adipiscing elit. Suspendisse id magna et nisi dictum sodales. Nullam facilisis imperdiet velit vel fringilla. Donec volutpat eget justo in ullamcorper. Maecenas ut enim vehicula, hendrerit lectus eu, aliquam arcu. Morbi mollis, mi ac consequat porta, felis metus mollis risus, at congue dolor magna nec nibh. Nulla a mauris ornare, posuere mi eget
            </div>
        </div>

        <!-- ********  SECTION 2 ********* -->


        <div class="template_container">
            <div class="template_textarea">
                <h2>Consectetur adipiscing elit. </h2>  Suspendisse id magna et nisi dictum sodales. Nullam facilisis imperdiet velit vel fringilla. Donec volutpat eget justo in ullamcorper. Maecenas ut enim vehicula, hendrerit lectus eu, aliquam arcu. Morbi mollis, mi ac consequat porta, felis metus mollis risus, at congue dolor magna nec nibh. Nulla a mauris ornare, posuere mi eget
            </div>
            <div class="template_panel">
                <img src="http://www.belasdicas.com/img/fotos/celular%20smartphone%205.jpg" height="100" width="100"/>
            </div>
        </div>

            <!-- ********  SECTION 3 ********* -->


            <div class="template_container">
                <div class="template_panel">
                    <img src="http://cdni.wired.co.uk/1240x826/s_v/Samsung-laptop2.jpg" height="100" width="100"/>
                </div>
                <div class="template_textarea">
                    <h2>Lorem ipsum dolor sit amet</h2> consectetur adipiscing elit. Suspendisse id magna et nisi dictum sodales. Nullam facilisis imperdiet velit vel fringilla. Donec volutpat eget justo in ullamcorper. Maecenas ut enim vehicula, hendrerit lectus eu, aliquam arcu. Morbi mollis, mi ac consequat porta, felis metus mollis risus, at congue dolor magna nec nibh. Nulla a mauris ornare, posuere mi eget
                </div>
            </div>



        </div>
@stop




