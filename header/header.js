var currentImage = -1;

var hx = 1;
var hy = 1;

var refreshID;
var paused = false;

var titleMade = false;

$(document).ready(function() {
	$(".header").width(980);
	$(".header").height(580);

	$(".image").width(893);
	$(".image").height(447);

	loopImage();
	refreshID = setInterval(function() {loopImage()},5000);
	setInterval(function() {loop()},10);

	for(var i = 1; i < 7; i ++) {
		for(var j = 1; j < 4; j ++) {
			var object = $("#o"+i+j);
			object.css("opacity","0");
			object.hover(function() {
				$(this).animate({opacity:0.15},300);
			},
			function() {
				$(this).animate({opacity:0},300);
			});
		}
	}

	var playButton = $("#playButton");
	playButton.hover(function() {
		$(this).animate({width:50},300);
	},
	function() {
		$(this).animate({width:40},300);
	});
	playButton.click(function() {
		if(paused) {
			loopImage();
			refreshID = setInterval(function() {loopImage()},5000);
			$(this).html("STOP");
			paused = false;
		}else
		{
			clearInterval(refreshID);
			$(this).html("PLAY");
			paused = true;
		}
	});
	playButton.css("opacity","0");

	$("#hTitle").css("opacity","0");

	//Non-Chrome Browser Fix -----//
	var navOffset = $("#navBar").offset();
	$(".navBarLink").offset({top:navOffset.top});
	//----- Fix//

	$(".navBarA").hover(function() {
		$(this).css("background-image","url('images/navItemBgHover.png')");
		$(this).animate({height:61},150);
	},
	function() {
		$(this).animate({height:42},150);
		$(this).css("background-image","url('images/navItemBg.png')");
	});
	$(".navBarLink").css("opacity","0");

});

function loop() {

}

function loopImage() {
	currentImage ++;
	if(currentImage == 8) {
		currentImage = 1;
	}
	$(".image").css("background-image", "url(images/image"+currentImage+".jpg)");
	hx = 1;
	hy = 1;
	if(currentImage == 7) {
		clearInterval(refreshID);
		paused = true;
		$("#playButton").html("PLAY");
	}
	changeSquares();
}

function changeSquares() {
	setTimeout(function() {
		var object = $("#h"+hx+hy);
		var nextImage = currentImage+1;
		if(currentImage == 7) {
			nextImage = 1;
		}
		object.css("background-image","url(images/image"+(nextImage)+".jpg)");
		var xpos = -150*(hx-1);
		var ypos = -150*(hy-1);
		object.css("background-position",xpos+"px "+ypos+"px");
		object.css("width","20px");
		object.css("height","20px");
		object.fadeOut(0);
		object.animate({width:149},{duration:300,queue:false});
		object.animate({height:149},{duration:300,queue:false});
		object.fadeIn(300);
		if(hx < 6 || hy < 3) {
			if(hx == 6) {
				hx = 1;
				hy ++;
			}else
			{
				hx ++;
			}
			changeSquares();
		}else
		{
			if(!titleMade) {
				titleMade = true;
				$("#hTitle").animate({opacity:1},{duration:600,queue:false});
				$("#playButton").animate({opacity:1},{duration:600,queue:false});
				$(".navBarLink").animate({opacity:1},{duration:600,queue:false});
			}
		}
	},30);
}
