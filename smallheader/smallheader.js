var currentImage = -1;

var refreshID;

var hx = 1;

var titleMade = false;

var paused = false;

$(document).ready(function() {
	
	loopImage();
	refreshID = setInterval(function() {loopImage()},5000);
	
	for(var i = 1; i < 7; i ++) {
		var object = $("#o"+i);
		object.css("opacity","0");
		object.hover(function() {
			$(this).animate({opacity:0.15},300);
		},
		function() {
			$(this).animate({opacity:0},300);
		});
	}
	
	//Non-Chrome Browser Fix -----//
	var navOffset = $("#navBar").offset();
	$(".navBarLink").offset({top:navOffset.top});
	//----- Fix//
	
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
	
	$(".navBarA").hover(function() {
		$(this).css("background-image","url('images/navItemBgHover.png')");
		$(this).animate({height:61},150);
	},
	function() {
		$(this).animate({height:42},150);
		$(this).css("background-image","url('images/navItemBg.png')");
	});
	
});

function loopImage() {

	currentImage ++;
	if(currentImage == 8) {
		currentImage = 1;
	}
	$("#smallHeaderBg").css("background-image", "url(images/image"+currentImage+".jpg)");
	hx = 1;
	changeSquares();

}

function changeSquares() {
	setTimeout(function() {
		var object = $("#h"+hx);
		var nextImage = currentImage+1;
		if(currentImage == 7) {
			nextImage = 1;
		}
		object.css("background-image","url(images/image"+(nextImage)+".jpg)");
		var xpos = -150*(hx-1);
		object.css("background-position",xpos+"px 0");
		object.css("width","20px");
		object.css("height","20px");
		object.fadeOut(0);
		object.animate({width:151},{duration:300,queue:false});
		object.animate({height:151},{duration:300,queue:false});
		object.fadeIn(300);
		if(hx < 6) {
			if(hx == 6) {
				hx = 1;
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
				$("#navBar").animate({opacity:1},{duration:600,queue:false});
			}
		}
	},30);
}