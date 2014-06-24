	<script> 

	function playVid(i){
		//var vid = new array();
		var vid = [	"http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4",
			"http://video-js.zencoder.com/oceans-clip.mp4"];

		var video = document.getElementById('MY_VIDEO_1');

		video.setAttribute("src", vid[i]);

		video.load();
	}

	function changeVid(n){
		 var video = document.getElementById('video');

		    if(Modernizr.video && Modernizr.video.webm) {
		        video.setAttribute("src", v[n][0]);
		    } else if(Modernizr.video && Modernizr.video.ogg) {
		        video.setAttribute("src", v[n][1]);
		    } else if(Modernizr.video && Modernizr.video.h264) {
		        video.setAttribute("src", v[n][2]);
		    }

		    video.load();
		}

		

	
	</script>