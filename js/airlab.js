
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

 // Timelene tooltip
//  var tooltipElem;
//  document.onmouseover = function(event) {
//    var target = event.target;
//    var tooltipHtml = target.dataset.tooltip;
//    if (!tooltipHtml) return;
//    tooltipElem = document.createElement('div');
//    tooltipElem.className = 'tooltip_r_d';
//    tooltipElem.innerHTML = tooltipHtml;
//    document.body.append(tooltipElem);
//    var coords = target.getBoundingClientRect();
//    if ($(target).parent().siblings('.row').children('.column_ongoing').children().length) {
//      var left = coords.left + (target.offsetWidth )/2 - tooltipElem.offsetWidth - 20;//- tooltipElem.offsetWidth) / 2;
//    } else {
//      var left = coords.left + (target.offsetWidth )/2 + 20;
//    }
//    //if (left < 0) left = 0;
//    var top = coords.top + target.offsetHeight/2 -tooltipElem.offsetHeight/2;
//    // if (top < 0) {
//    //   top = coords.top + target.offsetHeight + 5;
//    // }
//    tooltipElem.style.left = left + 'px';
//    tooltipElem.style.top = top + 'px';
//  };