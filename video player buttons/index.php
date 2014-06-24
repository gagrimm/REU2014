<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).load(function() {
        console.log( "window loaded" );
    });
    </script>
	
	
	<!-- VJS -->
	<link href="//vjs.zencdn.net/4.6/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.6/video.js"></script>

</head>

<body>
	<div>
		<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
			controls preload="auto" width="640" height="264"
			<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
	</div>
	<div>
		<br />
		<br />
		<button type="button" onclick="LastVid()">Previous</button>
		<button type="button" onclick="PlayVid()">Play/Pause</button>
		<button type="button" onclick="NextVid()">Next</button>
		<button type="button" onclick="SkipVid()">Skip to</button>
		
	</div>
	
	<script type="text/javascript" src="js/global.js"></script>
	
	<script type="text/javascript" src="js/scripts.js"></script>
	
	
</body>
</html>