// INICIO Modal video
$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal({dismissible: false});
});

// FIM Modal video
$(document).ready(function(){
    $(".modal-video").click(function () {
      var videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?autoplay=1";
      $('.video-container' + ' iframe').attr('src', videoSRCauto);
      $('.modal-close').click(function () {
        $('.video-container' + ' iframe').attr('src', videoSRC);
      });
    });
});
