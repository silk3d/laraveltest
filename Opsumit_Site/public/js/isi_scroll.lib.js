window.currentViewNode = "efficacy-results";

(function ($, window) {
  Drupal.behaviors.esbriet_taxonomy_home = {
    attach: function (context, settings) {
      // Mobile Important Safety Information

    $.fn.isOnScreen = function(){

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

    };    
    
        window.tabSelected = function( id ) {
            console.log(id);
            if( window.currentViewNode == "efficacy-results" && id == "#pane_0_1") {
                        console.log("current view is Efficacy results and #pane_0_1");
                        $('#chart2_2_cap_1').html("<iframe class='desktop_chart_250' frameborder='0' scrolling='no' src=''></iframe>");                                                                   $('#chart2_2_cap_2').html("<iframe class='desktop_chart_290' frameborder='0' scrolling='no' src=''></iframe>");     
                        $('#chart2_2_cap_3').html("<iframe class='desktop_chart_220' frameborder='0' scrolling='no' src=''></iframe>");                    
                    setTimeout(function(){ 
                        console.log("panel1 timeout");
                        $('#chart2_2_cap_1').html("<iframe class='desktop_chart_250' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_cap_1/index.html'></iframe>"); 

                        setTimeout(function(){ 
                                $('#chart2_2_cap_2').html("<iframe class='desktop_chart_290' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_cap_2/index.html'></iframe>");
                                setTimeout(function(){ 
                                    $('#chart2_2_cap_3').html("<iframe class='desktop_chart_220' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_cap_3/index.html'></iframe>");
                                }, 2000);     
                         }, 2000);
                    }, 2000);   
                }     
        }
        
 
              
   window.launchAnimation = function() {
        setTimeout(function(){ 
                        console.log("exploratory tab animation launch");
                        $('#chart2_2_explore_asc_1').html("<iframe class='desktop_chart_380' frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_explore_asc_1/index.html' alt='Esbriet clinical trial results chart: All-cause mortality through the end of study follow-up periods for Esbriet® (pirfenidone) and placebo '></iframe>"); 
        }, 500); 
    }
    
    window.resetAnimation = function(animationIndex) {
            console.log("reset second tab animation");
            $('#chart2_2_explore_asc_1').html("<iframe class='desktop_chart_380 ' frameborder='0' scrolling='no' src='' alt='Esbriet clinical trial results chart: All-cause mortality through the end of study follow-up periods for Esbriet® (pirfenidone) and placebo '></iframe>");         
    }        
        

        
        
         $( window ).scroll(function() {
             var iframeTxt = $('#chart2_2_asc_2').html();   
             if ( $('.chart2Footer_asc').isOnScreen() == true && iframeTxt.indexOf("viewed") == -1) {
                    $('#chart2_2_asc_2').html("<iframe class='desktop_chart_260' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_asc_2/index.html'></iframe>");
             }
             
             var iframe3Txt = $('#chart2_2_asc_3').html();              
             if ( $('.chart3Footer_asc').isOnScreen() == true && iframe3Txt.indexOf("viewed") == -1) {
                    $('#chart2_2_asc_3').html("<iframe class='desktop_chart_230' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_asc_3/index.html'></iframe>");
             }                
  
             /*
             var iframe2_2Cap1Txt = $('#chart2_2_cap_1').html();   
             if ( $('.chart2Footer_cap_1').isOnScreen() == true && iframe2_2Cap1Txt.indexOf("viewed") == -1) {
                    $('#chart2_2_cap_1').html("<iframe class='desktop_chart_200' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_cap_1/index.html'></iframe>");
             }             
             
             var iframe2_2Cap2Txt = $('#chart2_2_cap_2').html();   
             if ( $('.chart2Footer_cap_2').isOnScreen() == true && iframe2_2Cap2Txt.indexOf("viewed") == -1) {
                    $('#chart2_2_cap_2').html("<iframe class='desktop_chart_200' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_cap_2/index.html'></iframe>");
             }             
               */           
          
             
         });        
        
        
        
        
            var isDesktopView = $('button.navbar-toggle').css("display") == "none";
        

    }
  };
})(jQuery, window);
