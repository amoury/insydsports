/* HEADER VIDEO BACKGROUND USING YOUTUBE API */


 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('mutedYoutubePlayer', {
    videoId: '4kJc09Vjw7E',     // YouTube Video ID
    width: 1280,               // Player width (in px)
    height: 800,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 1,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 1,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 1,              // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 1         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
 }
 



/* FOR TUTORIALS https://youtu.be/jdqsiFw74Jk?list=PLj6_3zdxV8Z31kmA2mrBjBzch6ivVRV9E */

var channelName = 'darkhunterso16';

jQuery(document).ready(function($) {
    $.get(
        "https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            forUsername: channelName,
            key: 'AIzaSyCDCdQl2fLWl2P87GIlnHXFDSAY_39P8e0'},
            function(data) {
                $.each(data.items, function(i, item) {
                    console.log(item); 
                    pid = item.contentDetails.relatedPlaylists.uploads;
                    getVids(pid);
                })
            }
        );
    
   function getVids(pid) {
        $.get(
        "https://www.googleapis.com/youtube/v3/playlistItems", {
            part: 'snippet',
            maxResults: 10,
            playlistId: pid,
            key: 'AIzaSyCDCdQl2fLWl2P87GIlnHXFDSAY_39P8e0'},
            function(data) {
                var output;
                $.each(data.items, function(i,item) {
                    console.log(item); 
                    videoTitle = item.snippet.title;
                    videoImage = item.snippet.thumbnails.maxres.url;    
                    videoId = item.snippet.resourceId.videoId;
                    
                    output = '<li><div class = "youtube-container" style="background-image:linear-gradient(rgba(39, 92, 130, 0.5), rgba(0, 0, 0, 0.8)),url('+videoImage+');"><i class="fa fa-youtube-play playIcon"></i></div></li>';
                    
                    /*output = '<li><div class = "youtube-container"><iframe width="100%" height="240" src="https://www.youtube.com/embed/'+videoId+'"></iframe></div></li>';*/
                    
                    
                    
                    // Append to ul#results
                    
                    $('#results').append(output);
                
                })
                
            }
        );
    }
    

});

 /*function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();

function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}

function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
*/

