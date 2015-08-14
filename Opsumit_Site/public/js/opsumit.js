/**
 * Created by celdridge on 7/22/15.
 */
var isi_click_flag = false;

function gotoPage(nextPage) {
    window.location.href = nextPage;
}

function scrollToAnchor(aid){
    var headerHeight = -160;
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: (aTag.offset().top+ headerHeight)},'slow');
}

$(document).ready(function() {


    $(".isi_expand_btn").bind('touchstart click', function (e) {
        e.stopPropagation();
        e.preventDefault();

        if (!window.isi_click_flag) {
            window.isi_click_flag = true;
            setTimeout(function () {
                window.isi_click_flag = false;
            }, 100);
            window.scrollToAnchor('isi_anchor');
            console.log("you clicked isi expand button");

        }

        return false;
    });

    $(".nav_menu").bind('touchstart click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("#popup_main_menu").show();
    });

    $(".close_btn").bind('touchstart click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("#popup_main_menu").hide();
    });
});