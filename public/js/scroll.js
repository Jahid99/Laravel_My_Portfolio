$(document).ready(function() {
 
	var owl = $('.owl-carousel');
owl.owlCarousel({
    autoPlay: 1000,
autoplayTimeout: 1000, 
slideSpeed: 50,
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
    
      //Default active on home
$('#s1').addClass("active");


/*
Smooth scrolling
*/
$("#s1").click(function() {
     $('html, body').animate({
         scrollTop:        $("#top").offset().top-65
     }, 1000);
  return false;
 });

$("#s2").click(function() {
     $('html, body').animate({
         scrollTop:        $("#features").offset().top-100
     }, 1000);
     
  return false;
 });

$("#s3").click(function() {

     $('html, body').animate({
         scrollTop:        $("#reviews").offset().top-100
     }, 1000);
  return false;
 });

$("#s4").click(function() {
     $('html, body').animate({
         scrollTop:        $("#portfolio").offset().top-100
     }, 1000);
  return false;
 });

$("#s5").click(function() {
     $('html, body').animate({
         scrollTop:        $("#blog").offset().top-100
     }, 1000);
  return false;
 });

$("#toTop").click(function() {
     $('html, body').animate({
         scrollTop:        $("#top").offset().top-65
     }, 1000);
  return false;
 });


/*
Using jquery waypoints to change active on scroll
*/
$('#top').waypoint(function() {

  $(".nav-container ul li").children().removeClass("active");
  
   $('#s2').removeClass("active");
     $('#s3').removeClass("active");
     $('#s4').removeClass("active");
     $('#s5').removeClass("active");
     $("#s1").addClass("active");
  
}, { offset: 101 });

$('#features').waypoint(function() {

  //$(".nav-container ul li").children().removeClass("active");
  
     
  // $("#s2").addClass("active");
  // $('#s1').removeClass("active");
  // $('#s3').removeClass("active");
  //    $('#s4').removeClass("active");
  //    $('#s5').removeClass("active");
}, { offset: 101 });


$('#reviews').waypoint(function() {
 // $(".nav-container ul li").children().removeClass("active");
  //$("#s3").addClass("active");
}, { offset: 101 });

$('#portfolio').waypoint(function() {
  //$(".nav-container ul li").children().removeClass("active");
  //$("#s4").addClass("active");
}, { offset: 101 });

$('#blog').waypoint(function() {
  //$(".nav-container ul li").children().removeClass("active");
  //$("#s4").addClass("active");
}, { offset: 101 });

$('#1').waypoint(function() {
  //$(".nav-container ul li").children().removeClass("active");
  $("#s1").addClass("active");
}, { offset: 0 });

$('#2').waypoint(function() {
  $(".to-top").addClass("visible");
}, { offset: 100 });

$('#1').waypoint(function(event, direction) {
  $(".to-top").removeClass("visible");
}, { offset: 30 });
 
    

});
