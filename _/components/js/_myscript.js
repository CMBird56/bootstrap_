$(function() {
    
    // activae schedule tabs
    
    var hash = window.location.hash; //VAZNO! :ako URL ima na kraju #nesto , da ce nam 'nesto'
    hash && $('ul.nav a[href="' + hash + '"]').tab('show'); // ' posle "" zato sto nam treba tekst
// ovo hash && na pocetku znaci, da ako bude imalo hasha odradi ce sledece...

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover
    
    //show tooltips   
    $("[data-toggle='tooltip']").tooltip({ animation: true}); // podseti se JQ selektora
    
    // show modals
    
    $('.modalphotos img').on('click', function(){ // .modal je funkcija iz BOOTSTRAP-a 
    $('#modal').modal({
        show: true,
    })
    
    var mysrc = this.src.substr(0,this.src.length-7) + '.jpg';
    $('#modalimage').attr('src', mysrc);
    $('#modalimage').on('click', function(){
        $('#modal').modal('hide')
        })   // hide modal 
    }); // show modal

}); //jQuery is loaded