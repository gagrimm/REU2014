<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="style.css">
<link href="/MainProject/js/video-js.css" rel="stylesheet">
<script src="/MainProject/js/video.js"></script>-->


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
	
	<div style="text-align:center">
	
	<video id="video1" width="420" controls>
		<source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4">
	</video>
	<div id="chart_div">
		
	</div>
</div>
	
<button onclick="playPause()">Play/Pause</button>	
<button onclick="next()">Next</button>
<button onclick="jumpNext()"> Jump to next marker</button>
	
<script>
	var myVideo=document.getElementById("video1");
	var i = 0;
	var videoList = [ "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4",
	                  "http://video-js.zencoder.com/oceans-clip.mp4",
	                  "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4"];
	
	function playPause() { 
	    if (myVideo.paused) 
	        myVideo.play(); 
	    else 
	        myVideo.pause(); 
	} 
	
	function next() {
		i++;
		myVideo.src=videoList[i]	
	}

	function jumpNext() {
		myVideo.currentTime = 10;
	}
	
</script>

</body>

</html>