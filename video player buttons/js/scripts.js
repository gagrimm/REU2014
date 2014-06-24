
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
	
	console.log(i);
	if( i >= videolist.length - 1) {
		i = 0;
		x.src = videolist[i];
		return;
	}
	else {
		i++;
		x.src = videolist[i];
		return;
	}
}

function LastVid() {
	console.log("Prev");
	console.log(videolist[0]);
	console.log(videolist[1]);
	console.log(videolist[2]);
	console.log(videolist.length);
	
}

function 