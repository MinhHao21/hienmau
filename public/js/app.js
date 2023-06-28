window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementsByClassName("navbar").style.top = "0";
  } else {
    document.getElementsByClassName("navbar").style.top = "-50px";
  }
}

$('.owl-one').owlCarousel({
    items:1,
    loop:true,
    margin:0,
    nav:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true
})

$('.owl-two').owlCarousel({
    items: 2,
    loop:true,
    margin:0,
    nav:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
})

jQuery(document).ready(function ($) {
  $('.counter').counterUp({
      time: 1000,
  })
})


jQuery(document).ready(function ($) {
  $('.counter2').counterUp({
      time: 1500,
  })
})

$(document).ready(function() {
  $(".navbar-toggler").click(function() {
      $(".collapse").toggleClass("show");
  });
});

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbarMenu");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};