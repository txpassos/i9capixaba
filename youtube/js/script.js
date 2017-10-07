var channelName = 'noticiasdoacre';
var vidWidth = 500;
var vidHeight = 400;
var vidResults = 3;

$(document).ready(function(){
	$.get(
		"https://www.googleapis.com/youtube/v3/channels",{
			part: 'contentDetails',
			forUsername: channelName,
			key: 'AIzaSyB5v_WV5lPBU3Jf7FjQh1OVrJyUOnWhYB8'},
			function(data){
				$.each(data.items, function(i, item){
					console.log(item);
					pid = item.contentDetails.relatedPlaylists.uploads;
					getVids(pid);
				})
			}
		);
	function getVids(pid){
			$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems",{
			part: 'snippet',
			maxResults: vidResults,
			playlistId: pid,
			key: 'AIzaSyB5v_WV5lPBU3Jf7FjQh1OVrJyUOnWhYB8'},
			function(data){
				var output;
				$.each(data.items, function(i, item){
					console.log(item);
					videoTitle = item.snippet.title;
					videoId = item.snippet.resourceId.videoId;
					videoImg = item.snippet.thumbnails.medium.url;
					//output = '<li>'+videoTitle+'</li> <li>'+videoImg+'</li>';
					output = '<div class="col s12 m4 no-padding"><a class="modal-video" href="#modal1" data-video="https://www.youtube.com/embed/'+videoId+'"><div class="box-videos especiais-img b3" style="background: url(\'https://i.ytimg.com/vi/'+videoId+'/mqdefault.jpg\');border-radius: 2px 0 0 2px;"></div><i class="material-icons white-text">play_circle_outline</i><span class="titulo-especiais white-text">'+videoTitle+'</span></a></div>';

					/*   <div class="col s12 m4 no-padding">
      <a class="modal-video" href="#modal1" data-video="https://www.youtube.com/embed/+videoId">
      <div class="box-videos especiais-img b3" style="background: url('videoImg');border-radius: 2px 0 0 2px;">
        <i class="material-icons white-text">play_circle_outline</i>
        <span class="titulo-especiais white-text">+videoTitle+</span>
      </div>
      </a>
    </div>*/
					//'<li><iframe height="'+vidHeight+'" width="'+vidWidth+'" src=\"//www.youtube.com/embed/'+videoId+'\"></iframe></li>';
					//Append to results listStyleType
					$('#videos-youtube').append(output);
				})
			}
		);
	}
});