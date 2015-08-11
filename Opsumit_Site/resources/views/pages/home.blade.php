@extends('home_master')

@section('title')
    <title>HOWDY {{$pageTitle}}</title>
@stop


<div class="animationScrollMarker">&nbsp;</div>
<div class="isiScrollMarker">&nbsp;</div>



@section('content')
@stop

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

        <a name="isi_anchor">&nbsp;</a> <!-- anchor for isi to appear in viewport -->
        <!-- **********  END OF SECTIONS **********  -->




       <script>

           SECTIONS = 5;
           ANIMATION_SPEED = .3;


           var s1, s2, s3, s4, s5;
           var all_sections_animated = false;
           var section_animation_state = {};
           var isi_footer_visible = true;



                for(var sNum = 1; sNum <= SECTIONS; sNum++) {
                    this["s"+sNum] = new TimelineLite({paused:true});
                    section_animation_state["s"+sNum] = 0;

                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_img"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut
                    }));

                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_text"), ANIMATION_SPEED, {
                        x: -500,
                        alpha: 0,
                        ease: Power2.easeOut
                    }));

                    this["s"+sNum].add(TweenMax.from(document.getElementById("section" + sNum + "_btn"), ANIMATION_SPEED, {
                        alpha: 0,
                        ease: Power2.easeOut,
                        delay:.3
                    }));

                    console.log("creating tween s" + sNum);
                }

           function checkIfAnimationsComplete() {
               for(var sNum = 1; sNum <= SECTIONS; sNum++) {
                   if (section_animation_state["s" + sNum] == 0)
                       return;
               }
               all_sections_animated = true;
           }


           function scrollToAnchor(aid){
               var headerHeight = -160;
               var aTag = $("a[name='"+ aid +"']");
               $('html,body').animate({scrollTop: (aTag.offset().top+ headerHeight)},'slow');
           }


           var isi_click_flag = false;

           $(document).ready(function(){


               $(window).scroll(function(){


                   var isi_marker = $(".isiScrollMarker");
                   var isi_MarkerPosition = isi_marker.position();

                   var isiTopValue = $( "#isi_marker" ).offset().top - $( document ).scrollTop();

                   isiTopValue >= isi_MarkerPosition.top ? $("#isi_footer").fadeIn() : $("#isi_footer").fadeOut();


                  var marker = $(".animationScrollMarker");
                  var markerPosition = marker.position();

                   // console.log("sections animated: " + all_sections_animated);

                   if( !all_sections_animated ) {
                       for(var sIndex = 1; sIndex <= window.SECTIONS; sIndex++) {
                           var topValue = $( "#section"+ sIndex + "_marker" ).offset().top - $( document ).scrollTop();
                           if( topValue >= markerPosition.top) {
                               // window["s"+sIndex].reverse();
                           } else if( topValue < markerPosition.top) {
                               window["s"+sIndex].play();
                               section_animation_state["s"+sIndex] = 1;
                               checkIfAnimationsComplete();
                           }
                       }
                    }
                   /*********  isi footer code **********/

                   $(".isi_expand_btn").bind('touchstart click', function(e){
                       e.stopPropagation(); e.preventDefault();

                       if (!window.isi_click_flag) {
                           window.isi_click_flag = true;
                           setTimeout(function(){ window.isi_click_flag = false; }, 100);
                           window.scrollToAnchor('isi_anchor');
                           console.log("you clicked isi expand button");

                       }

                       return false;
                   });




               })
           })





           function checkEm() {

               //console.log("checkEm marker1 top " +topValue );
           }

          //  setInterval(checkEm, 1000)


           function reverseSectionAnimation( num ) {
               this["s"+num].reverse();
           }

           function animateSection( num ) {
               // console.log("animating num:" + num)
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




