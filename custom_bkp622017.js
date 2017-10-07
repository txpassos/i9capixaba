$('.slider-noticias-container').slick({dots:true,infinite:false,speed:300,slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:2,infinite:true,dots:true}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]});$('.mod-chips').slick({infinite:false,speed:300,slidesToShow:7,slidesToScroll:2,variableWidth:true,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:2,}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:3,slidesToScroll:1}}]});$(document).ready(function(){$('.modal-trigger').leanModal();});autoPlayYouTubeModal();function autoPlayYouTubeModal(){var trigger=$("body").find('[data-toggle="modal"]');trigger.click(function(){var theModal=$(this).data("target"),videoSRC=$(this).attr("data-theVideo"),videoSRCauto=videoSRC+"?autoplay=1";$(theModal+' iframe').attr('src',videoSRCauto);$(theModal+' button.close').click(function(){$(theModal+' iframe').attr('src',videoSRC);});$('.modal').click(function(){$(theModal+' iframe').attr('src',videoSRC);});});}$(document).ready(function(){var scre=$("body").width();if(scre>480){$('.sidebar').pushpin({top:1340,bottom:$('.testesidebar').height()+1340-$('.sidebar').height(),offset:75});}});$(document).ready(function(){var sizeNoticias=$('.bloco-des-noticias2').width();$('.sidebar').css({"width":+sizeNoticias+"px"});$(window).resize(function(){var sizeNoticias=$('.bloco-des-noticias2').width();$('.sidebar').css({"width":+sizeNoticias+"px"});});});$(document).ready(function(){$('.social-bar').pushpin({top:$(".autoH-top").height()+80,bottom:$(".autoH-post").height()+$(".autoH-top").height()-$(".social-bar").height(),offset:80});});window.twttr = (function(d, s, id) {
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
