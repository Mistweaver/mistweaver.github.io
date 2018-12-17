$(document).ready(function() {
	// height variables for scrolling menu
	let windowHeight = $(window).height();
	let frontpageHeight = $("#frontpage").height();
	let aboutHeight = $("#about").height() + frontpageHeight;
	let webprojectsHeight = $("#webprojects").height() + aboutHeight;
	let aerospaceHeight = $("#aerospace").height() + webprojectsHeight;
	let roboticsHeight = $("#robotics").height() + aerospaceHeight;
	let videogamesHeight = $("#videogames").height() + roboticsHeight;

	// make quote stay after fading in
	$("#fadeBox").on(
		"animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
	  	function() {
			$(this).addClass("opaque");
			var elem = document.querySelector('#fadeBox');
			elem.style.display = 'none';
			// var navbar = document.querySelector('.fixedSideBarNav');
			// navbar.style.display = 'flex';
			// var elem = document.querySelector('#quoteBox');
			elem.parentNode.removeChild(elem);
	  	}
	);	
	// change navbar styling on click
	$(".nav-link").on("click", function(){
		console.log("nav changed");
		$(".navbar-nav").find(".active").removeClass("active");
		$(this).addClass("active");
	});  
	// change navbar styling based on scroll
	$(window).on("scroll", function() {
		let scroll = $(window).scrollTop();
		if (scroll < frontpageHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#homeLink").addClass("active");
			$("#navbar").css("background-color", "transparent");
		}
		if (scroll >= frontpageHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#aboutLink").addClass("active");
			$("#navbar").css("background-color", "white");
		}
		if (scroll >= aboutHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#webprojectLink").addClass("active");
		}
		if (scroll >= webprojectsHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#aerospaceLink").addClass("active");
		}
		if (scroll >= aerospaceHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#roboticsLink").addClass("active");
		}
		if (scroll >= roboticsHeight) {
			$(".navbar-nav").find(".active").removeClass("active");
			$("#videogamesLink").addClass("active");
		}
	}).on("resize", function() {
		frontpageHeight = $("#frontpage").height();
		aboutHeight = $("#about").height() + frontpageHeight;
		webprojectsHeight = $("#webprojects").height() + aboutHeight;
		aerospaceHeight = $("#aerospace").height() + webprojectsHeight;
		roboticsHeight = $("#robotics").height() + aerospaceHeight;
		videogamesHeight = $("#videogames").height() + roboticsHeight;
	})
	

});

