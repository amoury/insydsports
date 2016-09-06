jQuery(document).ready(function($) {      

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
});

document.addEventListener("DOMContentLoaded", setupControl, false);
function setupControl() {               // select the video element from page 
    var myVideo = document.getElementById("pretzel-video"); 
    if (myVideo.canPlayType) {                  // remove the default buttons 
        myVideo.removeAttribute("controls");
        document.getElementById("controls").style.display="block";

        myVideo.addEventListener("play",function() {
                 document.getElementById("start").disabled=true;
             }, false);

        document.getElementById("start").addEventListener("click",startPlayback,false);
    }
}

// Removing the Play button once the video starts 

var removePlay = document.getElementById('start');
var containerEl = removePlay.parentNode;

function startPlayback() {
          
          document.getElementById("pretzel-video").play();
          containerEl.removeChild(removePlay);
       }