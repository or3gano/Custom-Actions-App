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

	// Display categories table by default
$('#cat-table').css('display', 'block');
$('#users-table').css('display', 'none');

	// Display categories table when clicked
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
    if ($("#inputPermission").val() == 1)
        $("#add_user_pw").show();
    else
        $("#add_user_pw").hide();
}


// Close Add User lightbox
$('#cancel_add').click(function() {
	$('#add_user').trigger('close');
});



// Ajax to edit users
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#email_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
$("#email_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var email=$("#email_input_"+ID).val();
var dataString = 'user_id='+ ID +'&first_name='+first+'&last_name='+last+'&email='+email;
$("#last"+ID).html('<img src="images/table-load.gif" style=\"margin-top:16px;margin-bottom:16px;margin-right:-515px;float:right;\"/>'); // Loading image

if(first.length>0&& last.length>0 && email.length>0)
{

$.ajax({
type: "POST",
url: "users_edit.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
$("#email_"+ID).html(email);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

	

	
	
});
