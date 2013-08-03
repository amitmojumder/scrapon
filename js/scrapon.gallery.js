$(document).ready(function() {

	var first_url;
	first_url = $( "ul#thumb li:first-child a" ).attr( "href" );
 	console.log( first_url );

	$( "img#target" ).attr( 'src', first_url );

	$( "ul#thumb" ).children().click(function(e) {
		e.preventDefault();
		url = $( this ).find('a').attr( 'href');
		console.log(url);
		$( "img#target" ).attr( 'src', url );
	});

});