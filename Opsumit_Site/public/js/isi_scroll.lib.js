window.currentViewNode = "efficacy-results";

(function ($, window) {


    $.fn.isOnScreen = function(){

        /*
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
           */
    };    
    

     $( window ).scroll(function() {
         /*
         var iframeTxt = $('#chart2_2_asc_2').html();
         if ( $('.chart2Footer_asc').isOnScreen() == true && iframeTxt.indexOf("viewed") == -1) {
                $('#chart2_2_asc_2').html("<iframe class='desktop_chart_260' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_asc_2/index.html'></iframe>");
         }

         var iframe3Txt = $('#chart2_2_asc_3').html();
         if ( $('.chart3Footer_asc').isOnScreen() == true && iframe3Txt.indexOf("viewed") == -1) {
                $('#chart2_2_asc_3').html("<iframe class='desktop_chart_230' viewed frameborder='0' scrolling='no' src='/sites/all/themes/esbriet_2015b_hcp/js/charts/chart2.2_asc_3/index.html'></iframe>");
         }
        */

     });

})(jQuery, window);
