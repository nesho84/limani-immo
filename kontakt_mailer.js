$(document).ready(function(){
	$("form").submit(function(event){
		event.preventDefault();
		var name = $("#mail-name").val();
		var email = $("#mail-email").val();
		var message = $("#mail-message").val();
		var submit = $("#mail-submit").val();
		$("#email_msg").load("kontakt_mailer.php", {
			name: name,
			email: email,
			message: message,
			submit: submit
		});
	});
});