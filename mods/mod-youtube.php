<?php
// Usuário e ApiKey do Youtube
$username = "noticiasdoacre";
// Crie uma API KEY no https://code.google.com/apis/console, não se esqueça de habilitar o Youtube Data API
$apiKey = "AIzaSyB5v_WV5lPBU3Jf7FjQh1OVrJyUOnWhYB8";
$channelUrl = "https://www.googleapis.com/youtube/v3/channels?forUsername={$username}&part=contentDetails&key={$apiKey}";
$videosUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=3&key={$apiKey}";
function request($url) {
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  $body = curl_exec($curl);
  curl_close($curl);
  return json_decode($body);
}
$channel = request($channelUrl)->items[0]->contentDetails;
$playlistId = $channel->relatedPlaylists->uploads;
$videos = request("{$videosUrl}&playlistId={$playlistId}")->items;
?>

<div class="row">
  <div class="col s6 no-padding">
    <h2>Vídeos</h2>
  </div>
  <div class="col s6" style="padding-top: 30px;">
  <a class="right grey-text text-darken-3" href="/videos">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
  </div>
</div>
<h1><?php echo($curl); ?></h1>
<div class="row">
    <?php foreach ($videos as $video) { ?>
    <div class="col s12 m4 no-padding">
      <a class="modal-video" href="#modal1" data-video="https://www.youtube.com/embed/<?php echo $video->snippet->resourceId->videoId?>">
      <div class="box-videos especiais-img b3" style="background: url('<?php echo $video->snippet->thumbnails->standard->url ?>');border-radius: 2px 0 0 2px;">
        <i class="material-icons white-text">play_circle_outline</i>
        <span class="titulo-especiais white-text"><?php echo $video->snippet->title ?></span>
      </div>
      </a>
    </div>
    <?php } ?>
    <div id="modal1" class="modal">
      <div class="modal-content">
          <div class="video-container">
            <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
    </div>
    </div>
  </div>
