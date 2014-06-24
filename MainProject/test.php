<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="http://vjs.zencdn.net/4.6/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.6/video.js"></script>
<script src='../videojs-playlist/javascripts/videojs.playlist.js'></script>
<link href="../videojs-playlist/stylesheets/videojs.playlist.css" rel="stylesheet">


<style type="text/css"> 
	.vjs-default-skin {color: #a91e1e;}
	.vjs-default-skin .vjs-play-progress,.vjs-default-skin .vjs-volume-level
		{background-color: #000000}
	.vjs-default-skin .vjs-control-bar,.vjs-default-skin .vjs-big-play-button
		{background: rgba(243, 243, 243, 0.7)}
	.vjs-default-skin .vjs-slider 
		{background: rgba(243, 243, 243, 0.2333333333333333)}
	.vjs-default-skin .vjs-control-bar {font-size: 88%}
</style>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time',  'Movement'],
          ['1',1],
          ['2',1],
          ['3',0],
          ['4',0],
          ['5',0],
          ['6',0],
          ['7',0],
          ['8',0],
          ['9',0],
          ['10',1],
          ['11',1],
          ['12',1],
          ['13',1],
          ['14',1],
          ['15',0],
          ['16',0],
          ['17',1],
          ['18',1],
          ['19',0],
          ['20',0],
          ['21',1],
          ['22',1],
          ['23',1],
          ['24',1],
          ['25',1],
          ['26',1],
          ['27',1],
          ['28',1]
        ]);

        var options = {
          vAxis: {textPosition: 'none'},
          isStacked: false,
          legend: {position: 'none'}
        };

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
	
	<div class="container" id="main">

		<div class="top" id="video">
			<video id="MY_VIDEO_1" class="video-js vjs-default-skin"
				controls preload="auto" width="640" height="264"
				poster="http://video-js.zencoder.com/oceans-clip.png"
  				data-setup='{"example_option":true}'>
 							
			</video>
		</div>
		
		<div class="bottom" id="chart_div" style="width: 640px; height: 50px; "></div>

	</div>
	
	<script> 
	//var vid = new array();
	var i = 0;
	var vid = [	"http://video-js.zencoder.com/oceans-clip.mp4"];

	var video = document.getElementById('MY_VIDEO_1');

	video.setAttribute("src", vid[i]);

	video.load();
	
	</script>
	
	
</body>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://vjs.zencdn.net/4.2/video.js"></script>
<link href="http://vjs.zencdn.net/4.2/video-js.css" rel="stylesheet"> 
<script src='../videojs-markers/src/videojs.markers.js'></script>
<link href="../videojs-markers/src/videojs.markers.css" rel="stylesheet">
<script>
   // initialize video.js
   var video = videojs('MY_VIDEO_1');

   //load the marker plugin
   video.markers({
      setting: {
         markerTip:{
            default_text: "This is break"
         },
         breakOverlay:{
            display: false,
            display_time: 3,
            default_text: "This is a break overlay"
         }
      },
      //set break time
      marker_breaks:[4.5, 10, 11.6, 18.8],
      marker_text:["1","2","3","4"]
   });

</script>

</html>