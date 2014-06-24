
function PlayVid() {
	
	//var x = document.getElementById("example_video_1");
	if (x.paused) {
		x.play();
		console.log("play");
	}
	else {
		x.pause();
		console.log("pause");
	}
}

function NextVid() {
	//var x = document.getElementById("example_video_1");
	
	/*
	if (x.src == "http://video-js.zencoder.com/oceans-clip.mp4") {
		x.src = videolist[i];
		console.log(x.src);
	}
	else {
		i++;
		x.src = videolist[i];
		console.log(x.src);
	}
	
	*/
	if( i > videolist.length) {
		i = 0;
	}
	i++;
	x.src = videolist[i];
}

function LastVid() {
	console.log("Prev");
	console.log(videolist[0]);
	console.log(videolist[1]);
	console.log(videolist[2]);
	console.log(videolist.length);
	
}

