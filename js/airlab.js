
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



// $(".time_circle").on("click",function(){
//   var is_parent= $(this).parent()[0];
//   if ($(this).hasClass('on_hover')){
//     if ($(this).hasClass('bottom')){
//       gsap.to(this, {top:"0", y:"-50%"});
//     } else {
//       gsap.to(this, {bottom:"0", y:"50%"});
//     };
//     $(".half_slide").each(function(){
//       if (this != is_parent){
//         $(this).css("opacity", "0.4");
//       }
//     });
//     $(this).removeClass('on_hover');
//
//   } else {
//     if ($(this).hasClass('bottom')){
//       if ($(this).hasClass('short')){
//         gsap.to(this, {top:"15vh", y:"0"});
//       } else {
//         gsap.to(this, {top:"25vh", y:"0"});
//       };
//     } else {
//       if ($(this).hasClass('short')){
//         gsap.to(this, {bottom:"15vh", y:"0"});
//       } else {
//         gsap.to(this, {bottom:"25vh", y:"0"});
//       };
//     };
//     $(".half_slide").each(function(){
//       $(this).css("opacity", "1");
//     });
//     $(this).addClass('on_hover');
//   };
//
// });

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