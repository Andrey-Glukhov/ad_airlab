
$(".time_circle").on("click",function(){

  if ($(this).hasClass('on_hover')){
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

$(document).ready(function () {
  $('.navbar-toggler').on('click', function () {
    if ($('.animated-icon1').hasClass('open')) {
      $('.animated-icon1').removeClass('open');
      $('.menu').removeClass('active');
    }else{
      $('.animated-icon1').addClass('open');
      $('.menu').addClass('active');
    };
  });

});

function showhide_toggle(type, post_id, more_text, less_text) {
  var   $link = jQuery("#"+ type + "-link-" + post_id)
    , $link_a = jQuery('a', $link)
    , $content = jQuery("#"+ type + "-content-" + post_id)
    , $toggle = jQuery("#"+ type + "-toggle-" + post_id)
    , show_hide_class = 'sh-show sh-hide';
  $link.toggleClass(show_hide_class);
  $content.toggleClass(show_hide_class).toggle();
  if($link_a.attr('aria-expanded') === 'true') {
    $link_a.attr('aria-expanded', 'false');
  } else {
    $link_a.attr('aria-expanded', 'true');
  }
  if($toggle.text() === more_text) {
    $toggle.text(less_text);
    $link.trigger( "sh-link:more" );
  } else {
    $toggle.text(more_text);
    $link.trigger( "sh-link:less" );
  }
  $link.trigger( "sh-link:toggle" );
}
