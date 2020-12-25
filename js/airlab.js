
$(".time_circle").on("click",function(){

  if ($(this).hasClass('on_hover')){

    $(this).removeClass('on_hover');

  } else {
    
    $(this).addClass('on_hover');
  };

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
