// Get the button

let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



// -------Slider1--------


$(document).ready(function(){
    $('.slider1').slick({
  // dots: true,
  arrows:false,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
 
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows:false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$(".prev-btn").click(function () {
  $(".slider1").slick("slickPrev");
});

$(".next-btn").click(function () {
  $(".slider1").slick("slickNext");
});
$(".prev-btn").addClass("slick-disabled");
$(".slider1").on("afterChange", function () {
  if ($(".slick-prev").hasClass("slick-disabled")) {
    $(".prev-btn").addClass("slick-disabled");
  } else {
    $(".prev-btn").removeClass("slick-disabled");
  }
  if ($(".slick-next").hasClass("slick-disabled")) {
    $(".next-btn").addClass("slick-disabled");
  } else {
    $(".next-btn").removeClass("slick-disabled");
  }
});
  });
// -------Slider2--------


$(document).ready(function(){
  $('.slider2').slick({
// dots: true,
arrows:false,
infinite: true,
speed: 300,
autoplay: true,
slidesToShow: 2,
slidesToScroll: 1,

responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
    }
  },
  {
    breakpoint: 600,
    settings: {
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows:false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
$(".prev-btn2").click(function () {
$(".slider2").slick("slickPrev");
});

$(".next-btn2").click(function () {
$(".slider2").slick("slickNext");
});
$(".prev-btn2").addClass("slick-disabled");
$(".slider2").on("afterChange", function () {
if ($(".slick-prev").hasClass("slick-disabled")) {
  $(".prev-btn2").addClass("slick-disabled");
} else {
  $(".prev-btn2").removeClass("slick-disabled");
}
if ($(".slick-next").hasClass("slick-disabled")) {
  $(".next-btn2").addClass("slick-disabled");
} else {
  $(".next-btn2").removeClass("slick-disabled");
}
});
});


// -------slider3----------
$(document).ready(function(){
  $('.slider3').slick({
// dots: true,
arrows:false,
infinite: true,
speed: 300,
autoplay: true,
slidesToShow: 2,
slidesToScroll: 1,
// vertical: true,
responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
     
    }
  },
  {
    breakpoint: 600,
    settings: {
      dots:false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows:false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
});

// -------slider4----------
$(document).ready(function(){
  $('.slider4').slick({
dots: true,
// arrows:true,
infinite: true,
speed: 300,
// autoplay: true,
slidesToShow: 3,
slidesToScroll: 1,
vertical: true,
responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
     
    }
  },
  {
    breakpoint: 600,
    settings: {
      dots:true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows:false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
});
// -------slider5---------
$(document).ready(function(){
  $('.slider5').slick({
dots: false,
arrows:false,
infinite: true,
speed: 300,
// autoplay: true,
slidesToShow: 1,
slidesToScroll: 1,
vertical: true,
responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
     
    }
  },
  {
    breakpoint: 600,
    settings: {
      dots:true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows:false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
});


// -------Slider6--------


$(document).ready(function(){
  $('.slider6').slick({
// dots: true,
arrows:false,
infinite: true,
speed: 300,
autoplay: true,
slidesToShow: 2,
slidesToScroll: 1,

responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
    }
  },
  {
    breakpoint: 600,
    settings: {
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows:false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
$(".prev-btn3").click(function () {
$(".slider6").slick("slickPrev");
});

$(".next-btn3").click(function () {
$(".slider6").slick("slickNext");
});
$(".prev-btn3").addClass("slick-disabled");
$(".slider6").on("afterChange", function () {
if ($(".slick-prev").hasClass("slick-disabled")) {
  $(".prev-btn3").addClass("slick-disabled");
} else {
  $(".prev-btn3").removeClass("slick-disabled");
}
if ($(".slick-next").hasClass("slick-disabled")) {
  $(".next-btn3").addClass("slick-disabled");
} else {
  $(".next-btn3").removeClass("slick-disabled");
}
});
});

// -------slider7-------
// $('.slider7').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 3,
//   arrows:true,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });

var $st = $('.pagination');
var $slickEl = $('.mid');

$slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  var i = (currentSlide ? currentSlide : 0) +1;
  $st.text(i + ' of ' + slick.slideCount);
});

$slickEl.slick({
  centerMode: true,
  centerPadding: '100px',
  slidesToShow: 3,
  focusOnSelect: true,
  dots: false,
  arrows:true,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  
});

  
// ---------page loader------


    
function Function(){
  setTimeout(function(){
    // alert();
    var wraper = document.getElementById("wraper").style.display ='none';
    // wraper.style = "display:none";
    var loader = document.getElementById("loader").style.display ='none';
       
  }, 0.5);

}



  var roundLogEl = document.querySelector('.num');

// anime({
//   targets: roundLogEl,
//   innerHTML: [0, 97],
//   easing: 'linear',
//   round: 10 // Will round the animated value to 1 decimal
// });