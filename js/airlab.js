var timerMouse = null;
var ctrl;
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
    if ($('.research_page').length) {
        $('input[name="chek_tag"]').click(function() {
            var radioValue = $(this).val();
            $('.rs_wraper').each(function() {
                if (!($('#check_amsterdam').is(':checked') || $('#check_delft').is(':checked')) || ($('#check_amsterdam').is(':checked') && $(this).hasClass('class_amsterdam') || $('#check_delft').is(':checked') && $(this).hasClass('class_delft'))) {
                    $(this).addClass('rs_open');
                } else {
                    $(this).removeClass('rs_open');
                }
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
        ctrl = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onEnter'
            }
        });
        $('.rs_wraper').each(function() {
            var scn = new ScrollMagic.Scene({
                    triggerElement: this
                })
                .setTween(gsap.fromTo(this, { opacity: 0 }, { opacity: 1, duration: 2 }))
                .addTo(ctrl);
        });
    }
    if ($('.student_page').length) {
        $('input[name="chek_tag"]').click(function() {
            var radioValue = $(this).val();
            $('.rs_wraper').each(function() {
                if (!($('#check_amsterdam').is(':checked') || $('#check_delft').is(':checked')) || ($('#check_amsterdam').is(':checked') && $(this).hasClass('class_enrolled') || $('#check_delft').is(':checked') && $(this).hasClass('class_graduated'))) {
                    $(this).addClass('rs_open');
                } else {
                    $(this).removeClass('rs_open');
                }
            });
            var leftCol = false;

            $('.rs_wraper.rs_open').each(function() {
                if (leftCol) {

                    $(this).children('.st_team_profiles').removeClass('st_left order-1 st_right order-2').addClass('st_left order-1');
                    $(this).children('.st_blank').removeClass('st_left order-1 st_right order-2').addClass('st_right order-2');
                    $(this).find('.st_dash').removeClass('students_dash_left students_dash_right').addClass('students_dash_left');
                    $(this).find('.st_mark').removeClass('students_mark_left students_mark_right').addClass('students_mark_left');
                } else {
                    $(this).children('.st_team_profiles ').removeClass('st_left order-1 st_right order-2').addClass('st_right order-2');
                    $(this).children('.st_blank').removeClass('st_left order-1 st_right order-2').addClass('st_left order-1');
                    $(this).find('.st_dash').removeClass('students_dash_left students_dash_right').addClass('students_dash_right');
                    $(this).find('.st_mark').removeClass('students_mark_left students_mark_right').addClass('students_mark_right');
                }
                leftCol = !leftCol;
            });

        });
        ctrl = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: 'onEnter'
            }
        });
        $('.rs_wraper').each(function() {
            var scn = new ScrollMagic.Scene({
                    triggerElement: this,
                    offset: 50
                })
                .setTween(gsap.fromTo(this, { opacity: 0 }, { opacity: 1, duration: 2 }))
                .addTo(ctrl);
        });
    }
    if ($('.outer-wrapper').length) {
        $(".time_circle").on("click", function() {

            if ($(this).hasClass('on_hover')) {
                $(this).children('.outer_circle').addClass('outer_animated');
                $(this).removeClass('on_hover');
            } else {
                $(this).children('.outer_circle').removeClass('outer_animated');
                $(this).addClass('on_hover');
            };
            $(this).children('.description').toggleClass('open_pop');
        });

        function xPosScroll(scrollSelector, deltaX) {
            var scrollElement = document.querySelector(scrollSelector);
            if (scrollElement) {
                scrollElement.scrollLeft += deltaX;
            }
        }

        function holdit(btn, action, start, speedup) {


            var repeat = function() {
                action();
                clearTimeout(timerMouse);
                timerMouse = setTimeout(repeat, start);
            }

            btn.addEventListener('mousedown', function() {
                repeat();
            });
            btn.addEventListener('mouseup', function() {
                clearTimeout(timerMouse);
            });

        };
        var btnLeft = document.querySelector('#btnScrollLeft');
        var btnRight = document.querySelector('#btnScrollRigth');
        if (btnLeft && btnRight) {
            holdit(btnLeft, function() {
                xPosScroll('.outer-wrapper', 30)

            }, 300, 2);
            holdit(btnRight, function() {
                xPosScroll('.outer-wrapper', -30)

            }, 300, 2);
        }

        window.addEventListener('resize', function() {
            selLineWidth();
        });
        $('html, body').mousewheel(function(e, delta) {

            document.querySelector('.outer-wrapper').scrollLeft -= (delta * 10);

        });
        selLineWidth();

    }
});

function selLineWidth() {
    var slides = document.querySelectorAll('.half_slide, .slide');
    var totalSlidesWidth = 0;
    slides.forEach(function(item) {
        totalSlidesWidth += item.clientWidth;
    });
    var lineElement = document.querySelector('.line_middle');
    if (lineElement) {
        lineElement.style.width = totalSlidesWidth + 'px';

    }

}

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

}

function showhide_hide(type, post_id) {
    var $link = jQuery("#" + type + "-link-hide" + post_id),
        $link_a = jQuery('a', $link),
        $content = jQuery("#" + type + "-content-" + post_id),
        $toggle = jQuery("#" + type + "-toggle-show" + post_id),
        show_hide_class = 'sh-show sh-hide';
    $toggle.toggleClass(show_hide_class).toggle();
    $content.toggleClass(show_hide_class).toggle();
    if ($link_a.attr('aria-expanded') === 'true') {
        $link_a.attr('aria-expanded', 'false');
    } else {
        $link_a.attr('aria-expanded', 'true');
    }
}