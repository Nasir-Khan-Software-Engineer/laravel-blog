function storeEmail(data){
	$("#contact_spinner").show();
	

	$.ajax({
		url: "/contact/send-email",
		type:"POST",
		data:data,
		success:function(response){
			
			$("#contact_spinner").hide();

			$("#name").val('');
			$("#email").val('');
			$("#subject").val('');
			$("#message").val('');

			var info_message = $("#contact_message");

			if(response.success){
				info_message.append(`<b class="text-success">💂: Successfully Send Your Email 😍</b>`);
			}else{
				info_message.append(`<b class="text-success">💂: Somethisng Wrong, Try Again Later 😐</b>`);
			}

			info_message.show();
			setTimeout(hideContactMessage,5000);
		},
	});


}

function hideContactMessage(){
	$("#contact_message").html('');
	$("#contact_message").hide();
}

$("#contact_btn").click(function(){

	var name    = $("#name").val();
	var email   = $("#email").val();
	var subject   = $("#subject").val();
	var message   = $("#message").val();
	
	var info_message = $("#contact_message");


	if(name == '' || email == '' || subject == '' || message == ''){
		info_message.html(`<b class="text-danger">Please Fill All The Fields</b>`);
		info_message.show();
		setTimeout(hideContactMessage,3000);
		return false;
	}


	if(name.length > 100 || name.length < 3){
		info_message.html(`<b class="text-danger">Name Lenght Error(max 100, min 3 char)</b>`);
		info_message.show();
		$("#name").focus();
		setTimeout(hideContactMessage,3000);
		return false;
	}

	if(email.length > 200 || email.length < 10){
		info_message.html(`<b class="text-danger">Email Lenght Error (max 200, min 10 char)</b>`);
		info_message.show();
		$("#email").focus();
		setTimeout(hideContactMessage,3000);
		return false;
	}


	if(subject.length > 200 || subject.length < 10){
		info_message.html(`<b class="text-danger">Subject Lenght Error (max 200, min 10 char)</b>`);
		info_message.show();
		$("#subject").focus();
		setTimeout(hideContactMessage,3000);
		return false;
	}

	if(message.length > 500 || message.length < 10){
		info_message.html(`<b class="text-danger">Message Lenght Error (max 500, min 10 char)</b>`);
		info_message.show();
		$("#message").focus();
		setTimeout(hideContactMessage,3000);
		return false;
	}






	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var data = {
		_token: CSRF_TOKEN,
		name:name,
		email:email,
		subject:subject,
		message:message
	}

	storeEmail(data);

})





