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


// Display Add User lightbox
$('#add_user_btn').click(function(e) {
	$('#add_user').lightbox_me({
		centered: true,
		onLoad:function() {
			$('#add_user').find('input:first').focus()
		}
	});
	e.preventDefault();
});


// Show password field on Add user form if administrator
toggleFields();
$("#inputPermission").change(function() { toggleFields(); });
function toggleFields() {
    if ($("#inputPermission").val() == 'admin')
        $("#add_user_pw").show();
    else
        $("#add_user_pw").hide();
}


// Close Add User lightbox
$('#cancel_add').click(function() {
	$('#add_user').trigger('close');
});


// Display Edit User lightbox
$('#edit_user_btn').click(function(e) {
	$('#edit_user').lightbox_me({
		centered: true,
		onLoad:function() {
			$('#edit_user').find('input:first').focus()
		}
	});
	e.preventDefault();
});


// Show password field on Edit user form if administrator
toggleFields2();
$("#inputPermission2").change(function() { toggleFields2(); });
function toggleFields2() {
    if ($("#inputPermission2").val() == 'admin')
        $("#edit_user_pw").show();
    else
        $("#edit_user_pw").hide();
}


// Close Edit User lightbox
$('#cancel_edit').click(function() {
	$('#edit_user').trigger('close');
});


	

});
