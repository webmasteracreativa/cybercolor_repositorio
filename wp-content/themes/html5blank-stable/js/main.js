$( document ).ready(function() {
	var lastId,
	topMenu = $(".navbar-nav"),
	topMenuHeight = topMenu.outerHeight() + 100,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
        	var item = $($(this).attr("href"));
        	if (item.length) {
        		return item;
        	}
        });
        
        $('.carousel-catalogo').slick({
        	slidesToShow: 1,
        	slidesToScroll: 1,
        	arrows: false,
        	fade: true,
        	asNavFor: '.catalogo-nav',
        	responsive: [
        	{
        		breakpoint: 768,
        		settings: {
        			slidesToShow: 1,
        			arrows: true,
        			prevArrow: '<button type="button" class="slick-prev"><</button>',
        			nextArrow: '<button type="button" class="slick-next">></button>',
        			slidesToScroll: 1
        		}
        	}
        	]		
        });
        $('.catalogo-nav').slick({
        	slidesToShow: 3,
        	slidesToScroll: 1,
        	asNavFor: '.carousel-catalogo',
        	dots: false,
        	centerMode: true,
        	prevArrow: '<button type="button" class="slick-prev"><</button>',
        	nextArrow: '<button type="button" class="slick-next">></button>',
        	focusOnSelect: true
        });
        $('.carousel-servicios').slick({
        	slidesToShow: 2,
        	slidesToScroll: 1,
        	arrows: true,
        	prevArrow: '<button type="button" class="slick-prev"><</button>',
        	nextArrow: '<button type="button" class="slick-next">></button>',
        	responsive: [
        	{
        		breakpoint: 768,
        		settings: {
        			slidesToShow: 1,
        			arrows: false,
        			dots: true,
        			slidesToScroll: 1
        		}
        	}
        	]
        });
        AOS.init();

        $(".navbar-nav a,.navbar-brand").click(function() {
        	let href = $(this).attr('href');
        	console.log(href);
        	$('html, body').animate({
        		scrollTop: $(href).offset().top - 100
        	}, 500);
        });

        function scrollmenu(){
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
        	if ($(this).offset().top < fromTop)
        		return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
        	lastId = id;
            // Set/remove active class
            menuItems
            .parent().removeClass("active")
            .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    }
    scrollmenu();
    $(window).scroll(function() {
    	scrollmenu();
    });
    function initMap() {
	        // Styles a map in night mode.
	        var myLatLng = {lat: 6.249983, lng: -75.566108};
	        var icono = 'http://actividadcreativa.co/cibercolor/wp-content/themes/html5blank-stable/img/map-icon.png';
	        var map = new google.maps.Map(document.getElementById('map'), { 
	        	center: myLatLng,
	        	zoom: 18,
	        	styles: [
	        	{elementType: 'geometry', stylers: [{color: '#FBC700'}]},//#dfa70d
	        	{elementType: 'labels.text.stroke', stylers: [{color: '#ffffff'}]},
	        	{elementType: 'labels.text.fill', stylers: [{color: '#000000'}]},
	        	{
	        		featureType: 'administrative.locality',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#000000'}]
	        	},
	        	{
	        		featureType: 'poi',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#5774B7'}]
	        	},
	        	{
	        		featureType: 'poi.park',
	        		elementType: 'geometry',
	        		stylers: [{color: '#9cbf3c'}]
	        	},
	        	{
	        		featureType: 'poi.park',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#406f00'}]
	        	},
	        	{
	        		featureType: 'road',
	        		elementType: 'geometry',
	        		stylers: [{color: '#ffffff'}]//#E8555E
	        	},
	        	{
	        		featureType: 'road',
	        		elementType: 'geometry.stroke',
	        		stylers: [{color: '#E8555E'}]
	        	},
	        	{
	        		featureType: 'road',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#000000'}]
	        	},
	        	{
	        		featureType: 'road.highway',
	        		elementType: 'geometry',
	        		stylers: [{color: '#E8555E;'}]
	        	},
	        	{
	        		featureType: 'road.highway',
	        		elementType: 'geometry.stroke',
	        		stylers: [{color: '#ffffff'}]
	        	},
	        	{
	        		featureType: 'road.highway',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#393353'}]
	        	},
	        	{
	        		featureType: 'transit',
	        		elementType: 'geometry',
	        		stylers: [{color: '#E8555E'}]
	        	},
	        	{
	        		featureType: 'transit.station',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#5774B7'}]
	        	},
	        	{
	        		featureType: 'water',
	        		elementType: 'geometry',
	        		stylers: [{color: '#aadaff'}]
	        	},
	        	{
	        		featureType: 'water',
	        		elementType: 'labels.text.fill',
	        		stylers: [{color: '#000000'}]
	        	},
	        	{
	        		featureType: 'water',
	        		elementType: 'labels.text.stroke',
	        		stylers: [{color: '#393353'}]
	        	}
	        	]
	        });
	    	var marker = new google.maps.Marker({
			   position: myLatLng,
			   map: map,
			   icon: icono
			   // title: 'Hello World!'
			 });
	    }
	initMap();
});

