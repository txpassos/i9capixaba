  $('.slider-noticias-container').slick({
  dots: true,
  slidesToShow: 2,
  speed: 1800,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
  });
  // FIM Slick Slider
  $('.slider-radios').slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 9000,
    slidesToShow: 6,
    slidesToScroll: 1,responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 2,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});

  $('.slider-programas').slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 9000,
    slidesToShow: 6,
    slidesToScroll: 1,responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 2,
  slidesToScroll: 1,
  dots: true,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});


$('.eventos').slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 9000,
  slidesToShow: 4,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1150,
      settings: {
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 9000,
        slidesToScroll: 2,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 9000,
        slidesToScroll: 1,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 9000,
        arrows: false,
        dots: false,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$(document).ready(function(){
  var scre = $("body").width();
  if (scre > 480) {
  $('.sidebar').pushpin({
    top: 1340,
    bottom: $('.testesidebar').height() + 1340 - $('.sidebar').height(),
    offset: 60
  });
  }
});

  $(document).ready(function(){
    var sizeNoticias = $('.bloco-des-noticias2').width();
    $('.sidebar').css({"width": +sizeNoticias+"px"});
  $(window).resize(function(){
    var sizeNoticias = $('.bloco-des-noticias2').width();
    $('.sidebar').css({"width": +sizeNoticias+"px"});
    });
      });

// INICIO Social bar
$(document).ready(function(){
$('.social-bar').pushpin({
top: $(".autoH-top").height()+120,
bottom: $(".autoH-post").height()+$(".autoH-top").height()-$(".social-bar").height(),
offset: 80
});
});
// FIM Social bar

function goBack() {
    window.history.back()
};

window.twttr = (function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0],
  t = window.twttr || {};
if (d.getElementById(id)) return t;
js = d.createElement(s);
js.id = id;
js.src = "https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js, fjs);

t._e = [];
t.ready = function(f) {
  t._e.push(f);
};

return t;
}(document, "script", "twitter-wjs"));

$('.button-collapse').sideNav();

$(".mod-chips a").addClass("chip");

function abrir(URL) {

  var width = 250;
  var height = 350;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}

// Find all iframes
var $iframes = $( "iframe" );

// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
    // Remove the hardcoded width &#x26; height attributes
    .removeAttr( "width" )
    .removeAttr( "height" );
});

// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
    // Get the parent container&#x27;s width
    var width = $( this ).parent().width();
    $( this ).width( width )
      .height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();


//antes e depois das imagens
// Call & init
$(document).ready(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize.
// Because we all do this: i.imgur.com/YkbaV.gif
$(window).resize(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {

  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {

    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');

    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();

    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;

    // Calculate the dragging distance on mousemove.
    dragElement.parents().on("mousemove touchmove", function(e) {

      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

      leftValue = moveX + posX - dragWidth;

      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }

      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

      // Set the new values for the slider and the handle.
      // Bind mouseup events to stop dragging.
      $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      $('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}


// INICIO Modal video
$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal({dismissible: false});
});
// FIM Modal video

// Função autoPlayYouTubeModal
$(function() {
    $(".modal-video").click(function () {
      var videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?autoplay=1";
      $('.video-container' + ' iframe').attr('src', videoSRCauto);
      $('.modal-close').click(function () {
        $('.video-container' + ' iframe').attr('src', videoSRC);
      });
    });
  });
