$(document).ready(function () {

// Navigation highlight
	var url = window.location;
	// Will only work if string in href matches with location
	$('ul.nav a[href="' + url + '"]').parent().addClass('active');

	// Will also work for relative and absolute hrefs
	$('ul.nav a').filter(function () {
		return this.href == url;
	}).parent().addClass('active').parent().parent().addClass('active');


	// Admin panel display categories table
	$( '#admin-subnav1' ).click(function() {
		$('#cat-table').css('display', 'block');
		$('#users-table').css('display', 'none');

		// Change button class to active
		$(this).addClass('active');
		$('#admin-subnav2').removeClass('active');
	});


	// Admin panel display users table
	$( '#admin-subnav2' ).click(function() {
		$('#cat-table').css('display', 'none');
		$('#users-table').css('display', 'block');

		// Change button class to active
		$(this).addClass('active');
		$('#admin-subnav1').removeClass('active');
	});


});
