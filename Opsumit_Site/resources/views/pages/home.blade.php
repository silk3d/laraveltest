@extends('home_master')

@section('title')
    <title>HOWDY {{$pageTitle}}</title>
@stop


<div class="animationScrollMarker">&nbsp;</div>



@section('content')

@stop

<br><br><br>


@section('sections')



        <!-- <div class="home_sections_container"> -->


        <!-- ********  SECTION 1 ********* -->
            <div id="section1_marker" class="scroll_marker">&nbsp;</div>

 <div class="template_outer">
        <div class="template_inner">
            <div id="section1_text" class="template_textarea">
                <h1 id="section1_title" class="home_header">SERAPHIN STUDY:FOCUSED ON THE FUTURE</h1>
                <h4 id="section1_subtitle">Long-term PAH outcome data in a large patient population usingmonotherapy or combination therapy</h4>
                <div id="section1_btn" class="subsection_btn">View SERAPHIN study overview</div>
            </div>
            <div class="template_panel">
             <img id="section1_img" src="/images/section_seraphin_study_overview.png"/>
            </div>
        </div>
    </div>
</div>

        <!-- ********  SECTION 2 ********* -->

            <div id="section2_marker" class="scroll_marker">&nbsp;</div>
<div id="pah_wrapper">
        <div class="template_outer">
            <div class="template_inner purple_bg">
                <div id="section2_text" class="template_textarea">
                    <h1 id="section2_title" class="home_header"><span class="white_txt">PAH IS A RARE AND PROGRESSIVE DISEASE</h1>
                    <h4 id="section2_subtitle" class="white_txt">Explore a comprehensive learning center of PAH education and resources to support your treatment needs</h4>
                    <div id="section2_btn" class="subsection_btn">Learn more about PAH</div>
                </div>
                <div class="template_panel">
                    <img id="section2_img" src="/images/section_learn_more_pah.png"/>
                </div>
            </div>
        </div>
</div>

        <!-- ********  SECTION 3 ********* -->



             <div id="section3_marker" class="scroll_marker">&nbsp;</div>
<div class="template_outer">
            <div class="template_inner">
                <div id="section3_text" class="template_textarea">
                <h1 id="section3_title" class="home_header">DON'T DELAY, TREAT TODAY</h1>
                <h4 id="section3_subtitle">Keep PAH disease progression in mind from the start of therapy in FC II & III patients</h4>
                <div id="section3_btn" class="subsection_btn">See disease progression results</div>
                </div>
                <div class="template_panel">
                    <img id="section3_img" src="/images/section_disease_progression_results.png"/>
                </div>
            </div>
</div>
            <!-- ********  SECTION 4 ********* -->

            <div id="section4_marker" class="scroll_marker">&nbsp;</div>
<div id="monotherapy_wrapper">
            <div id="template_outer">
                <div class="template_inner monotherapy_radial_gradient">
                    <div id="section4_text" class="template_textarea">
                    <h1 id="section4_title" class="home_header">MONOTHERAPY & COMBINATION DATA</h1>
                    <h4 id="section4_subtitle">Stand alone or in combination with another PAH therapy, OPSUMIT delayed disease progression</h4>
                    <div id="section4_btn" class="subsection_btn">Explore mono/combo efficacy</div>
                    </div>
                    <div class="template_panel">
                        <img id="section4_img" src="/images/section_mono_combo_efficacy.png"/>
                    </div>
                </div>
            </div>
</div>

            <!-- ********  SECTION 5 ********* -->
            <div id="section5_marker" class="scroll_marker">&nbsp;</div>
<div id="patient_support_wrapper">
        <div class="template_outer">
            <div class="template_inner">
                <div id="section5_text" class="template_textarea">
                <h1 id="section5_title" class="home_header">SUPPORT FROM THE START</h1>
                <h4 id="section5_subtitle">Actelion provides programs and resources to help youand your patients during treatment with OPSUMIT</h4>
                <div id="section5_btn" class="subsection_btn">Access patient support tools</div>
                </div>
                <div class="template_panel">
                    <img id="section5_img" src="/images/section_patient_support_tools.png"/>
                </div>
            </div>
        </div>
</div>

        <!-- **********  END OF SECTIONS **********  -->




       <script>

           SECTIONS = 5;
           ANIMATION_SPEED = .3;


           var s1, s2, s3, s4, s5;


                for(var sNum = 1; sNum <= SECTIONS; sNum++) {
                    this["s"+sNum] = new TimelineLite({paused:true});

                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_img"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut
                    }));

                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_text"), ANIMATION_SPEED, {
                        x: -500,
                        alpha: 0,
                        ease: Power2.easeOut
                    }));

                    /*
                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_title"), ANIMATION_SPEED, {
                        x: -500,
                        alpha: 0,
                        ease: Power2.easeOut,
                        delay:.2
                    }));
                    */



/*
                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_subtitle"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut,
                        delay:.4
                    }));
*/
                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_btn"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut,
                        delay:.3
                    }));

                    /*
                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_hr"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut,
                        delay:0
                    }));
                    */

                    console.log("creating tween s" + sNum);
                }

           $(document).ready(function(){


               $(window).scroll(function(){
                   var marker = $(".animationScrollMarker");
                  var markerPosition = marker.position();
                    // console.log("maker position " + markerPosition.top)

                   //var markerPosition = $( ".animationScrollMarker" ).offset().top - $( document ).scrollTop();

                   for(var sIndex = 1; sIndex <= window.SECTIONS; sIndex++) {
                       var topValue = $( "#section"+ sIndex + "_marker" ).offset().top - $( document ).scrollTop();

                       console.log("sIndex " + sIndex + " sectionTop: " + topValue + " markerTop: " + parseInt(markerPosition.top)  );
                       if( topValue >= markerPosition.top) {
                           // window["s"+sIndex].reverse();
                       } else if( topValue < markerPosition.top) {
                           window["s"+sIndex].play();

                       }
                   }


               })
           })


           function checkEm() {

               console.log("checkEm marker1 top " +topValue );
           }

          //  setInterval(checkEm, 1000)


           function reverseSectionAnimation( num ) {
               this["s"+num].reverse();
           }

           function animateSection( num ) {
                console.log("animating num:" + num)
               this["s"+num].play();
           }


           function reverse(){

               s1.reverse();
               s2.reverse();
               s3.reverse();
               s4.reverse();
               s5.reverse();
           }

           function playThem(){
               s1.play();
               s2.play();
               s3.play();
               s4.play();
               s5.play();
           }

          // setTimeout(playThem, 1000);
          //  setTimeout(reverse, 10000);




       </script>





@stop




