$j=jQuery;

/*====================================
=            Match Height            =
====================================*/

$j(function() {
    $j('.column').matchHeight();

    $j('.left-column .column').matchHeight();
    $j('.right-column .column').matchHeight();

    //cars
    $j('#left-section .column').matchHeight();
    $j('#right-section .column').matchHeight();
});

/*=============================
=            SLICK            =
=============================*/

$j(function(){
	$j('.slick').slick({
		fade: true,
		autoplay: 8000,
		infinite: true,
		speed: 500,
		cssEase: 'linear',
	});
});


/*=================================
=            FANCYAPPS            =
=================================*/

$j(function() {
	$j(".popup").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});


/*=======================================
=            REST API SEARCH            =
=======================================*/

function sortlist(){

	var cl = document.getElementById('vehicle_makes');
	var clTexts = new Array();

	for(i = 1; i < cl.length; i++){
    	clTexts[i-1] =
        cl.options[i].text.toUpperCase() + "," +
        cl.options[i].text + "," +
        cl.options[i].value + "," +
        cl.options[i].selected;
	}

	clTexts.sort();

	for(i = 1; i < cl.length; i++){
	    var parts = clTexts[i-1].split(',');

	    cl.options[i].text = parts[1];
    	cl.options[i].value = parts[2];
    	if(parts[3] == "true"){
        	cl.options[i].selected = true;
    	}else{
   			cl.options[i].selected = false;
    	}
	}

}

$j('#vehicle_types').change(function() {
	$j('#loading').addClass('show');

	var vehicle_types = document.getElementById('vehicle_types').value;	 //console.log(vehicle_types);
	var vehicle_makes = document.getElementById('vehicle_makes');
		document.getElementById('vehicle_makes').options.length = 0;
		document.getElementById("vehicle_makes").innerHTML = '<option value="">Select make...</option>';
	var data = null;
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "wp-json/wp/v2/cars?filter[vehicle_type]="+vehicle_types);
	xhr.send(data);

	xhr.addEventListener("readystatechange", function () {
		if (this.readyState === this.DONE) {
			var posts = JSON.parse(this.responseText);
			var postsObj = JSON.stringify(posts);  //console.log(postsObj);

			for(var key in posts) {
				var value = posts[key];	
				var vehicle_make = value.vehicle_make; //console.log(vehicle_make);
			
				var make__data = null;
				var make__xhr = new XMLHttpRequest();

				var make__options = null;
				make__xhr.open("GET", "wp-json/wp/v2/vehicle_make/"+vehicle_make);
				make__xhr.send(make__data);
				make__xhr.addEventListener("readystatechange", function () {
					if (this.readyState === this.DONE) {
						var make__posts = JSON.parse(this.responseText);
						var vehicle_make_name = make__posts.name;
						var vehicle_make_slug = make__posts.slug;
						make__options = '<option value="'+vehicle_make_slug+'">'+vehicle_make_name+'</option>';
						document.getElementById("vehicle_makes").innerHTML += make__options;
						sortlist();
					}
				});
			}
			setTimeout(function() {
				$j('#loading').removeClass('show');
			}, 800)
			
		}
	});
});
