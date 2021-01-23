$(document).ready(function() {
    $('.navbar-toggler').on('click', function() {
        if ($('.animated-icon1').hasClass('open')) {
            $('.animated-icon1').removeClass('open');
            $('.menu').removeClass('active');
        } else {
            $('.animated-icon1').addClass('open');
            $('.menu').addClass('active');
        };
    });
    $('input[name="chek_tag"]').click(function() {
        var radioValue = $(this).val();
        $('.rs_wraper').each(function() {
            if ($('#check_amsterdam').is(':checked') && $(this).hasClass('class_amsterdam') || $('#check_delft').is(':checked') && $(this).hasClass('class_delft')) {
                $(this).addClass('rs_open');
            } else {
                $(this).removeClass('rs_open');
            }
            // if (!$(this).hasClass('class_' + radioValue)) {
            //     $(this).removeClass('rs_open');
            //     console.log('remove');
            // } else {
            //     $(this).addClass('rs_open');
            //     console.log('add');
            // }
        });
        var leftCol = true;
        $('.rs_wraper.rs_open').each(function() {
            if (leftCol) {
                $(this).children('.rs_liner_line ').removeClass('rs_liner_left rs_liner_right').addClass('rs_liner_left');
                $(this).children('.rs_data').removeClass('order-1 order-2 rs_left rs_right').addClass('order-1 rs_left');
                $(this).children('.rs_portret').removeClass('order-1 order-2 rs_left rs_right').addClass('order-2 rs_right');
                $(this).find('.rs_mark_circle').removeClass('rs_mark_right rs_mark_left').addClass('rs_mark_left');
            } else {
                $(this).children('.rs_liner_line ').removeClass('rs_liner_left rs_liner_right').addClass('rs_liner_right');
                $(this).children('.rs_data').removeClass('order-1 order-2 rs_left rs_right').addClass('order-2 rs_right');
                $(this).children('.rs_portret').removeClass('order-1 order-2 rs_left rs_right').addClass('order-1 rs_left');
                $(this).find('.rs_mark_circle').removeClass('rs_mark_right rs_mark_left').addClass('rs_mark_right');
            }
            leftCol = !leftCol;
        });

    });

    $(".time_circle").on("click", function() {

        if ($(this).hasClass('on_hover')) {
            $(this).children('.image_circle').css('opacity', '1');
            $(this).children('.outer_circle').addClass('outer_animated');
            $(this).removeClass('on_hover');
        } else {
            $(this).children('.image_circle').css('opacity', '0');
            $(this).children('.outer_circle').removeClass('outer_animated');
            $(this).addClass('on_hover');
        };
        $(this).children('.description').toggleClass('open_pop');
    });
    // $(".about_wrapper").mCustomScrollbar({
    //     axis: "x",
    //     theme: "rounded"
    // });
    // var instance = OverlayScrollbars(document.querySelector('.outer-wrapper'), {
    //     className: "os-theme-dark"
    // });
    //$('.outer-wrapper').jScrollPane();
    //$('.outer-wrapper').scrollbar();

});

function showhide_show(type, post_id) {
    var $link = jQuery("#" + type + "-link-show" + post_id),
        $link_a = jQuery('a', $link),
        $content = jQuery("#" + type + "-content-" + post_id),
        $toggle = jQuery("#" + type + "-toggle-show" + post_id),
        show_hide_class = 'sh-show sh-hide';
    $link.toggleClass(show_hide_class);
    $content.toggleClass(show_hide_class).toggle();
    $toggle.toggleClass(show_hide_class).toggle();
    if ($link_a.attr('aria-expanded') === 'true') {
        $link_a.attr('aria-expanded', 'false');
    } else {
        $link_a.attr('aria-expanded', 'true');
    }
    // if($toggle.text() === more_text) {
    //   $toggle.text(less_text);
    //   $link.trigger( "sh-link:more" );
    // } else {
    //   $toggle.text(more_text);
    //   $link.trigger( "sh-link:less" );
    // }
    // $link.trigger( "sh-link:toggle" );
}

function showhide_hide(type, post_id) {
    var $link = jQuery("#" + type + "-link-hide" + post_id),
        $link_a = jQuery('a', $link),
        $content = jQuery("#" + type + "-content-" + post_id),
        $toggle = jQuery("#" + type + "-toggle-show" + post_id),
        show_hide_class = 'sh-show sh-hide';
    //$link.toggleClass(show_hide_class);
    $toggle.toggleClass(show_hide_class).toggle();
    $content.toggleClass(show_hide_class).toggle();
    if ($link_a.attr('aria-expanded') === 'true') {
        $link_a.attr('aria-expanded', 'false');
    } else {
        $link_a.attr('aria-expanded', 'true');
    }
    // if($toggle.text() === more_text) {
    //   $toggle.text(less_text);
    //   $link.trigger( "sh-link:more" );
    // } else {
    //   $toggle.text(more_text);
    //   $link.trigger( "sh-link:less" );
    // }
    // $link.trigger( "sh-link:toggle" );
}