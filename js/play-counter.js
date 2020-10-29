$( document ).ready(function() {

var i = 0;
var songid;
var players = [];
var player;

function getFileName(url) {
	var filename = url.substring(url.lastIndexOf('/')+1);
	return filename;
}

$("button").click(function() {
	i++;
	console.log("button pressed " + i + " times.\n");
});

$("audio").on("play", function() {
	
});

$("audio").on("loadedmetadata", function() {
	player = getFileName(this.currentSrc);
	console.log(player);
	players[player]=0;
});

$("audio").on("pause", function() {
	player = getFileName(this.currentSrc);
	console.log(players[player]);
});

$("audio").on("timeupdate", function(){
			play_counter = (this.duration*0.6);
			player = getFileName(this.currentSrc);
			players[player]+=(this.currentTime-(this.currentTime-0.28));
			console.log(players[player] + " seconds");	
			
			if(players[player]>play_counter) {
				players[player] = 0;
				songid = $(this).attr("id");
				$.post("http://soundtron/addplay.php", {song: songid});
				console.log("player: " + $(this).attr("id"));
			}
});

});