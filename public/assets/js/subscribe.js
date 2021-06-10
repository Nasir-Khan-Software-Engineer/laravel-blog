function storeSubscriber(data){
	$("#subscribe_spnner").show();
	

	$.ajax({
		url: "/subscriber/store",
		type:"POST",
		data:data,
		success:function(response){
			var name    = $("#comment_name").val('');
			var email   = $("#comment_email").val('');
			
			$("#subscribe_spnner").hide();

			$("#subscriber_name").val('');
			$("#subscriber_email").val('');


			var message = $("#subscribe_message");

			if(response.is_success){
				message.append(`<b class="text-success">💂: Subscription successful😍</b>`);
			}else{
				message.append(`<b class="text-success">💂: Somethisng Wrong, Try Again Later 😐</b>`);
			}

			if(response.is_new_subscribers){
				message.append(`<br><b class="text-success">💂: welcome to InsideTheDiv 👌</b>`);
			}else{
				message.append(`<br><b class="text-success">💂: You Already Subscribe. 🖐</b>`);
			}

			if(!response.is_verified){
				message.append(`<br><b class="text-success">💂: Verify your email Please. 🙏</b>`);
			}

			if(response.is_verification_email_send){
				message.append(`<br><b class="text-success">💂: Check Your Email, to confirm your email. 📭</b>`);
			}


			message.show();

			setTimeout(hideSubMessage,3000);
		},
	});


}

function hideSubMessage(){
	$("#subscribe_message").html('');
	$("#subscribe_message").hide();
}

$("#subscribe_btn").click(function(){
	var name    = $("#subscriber_name").val();
	var email   = $("#subscriber_email").val();
	
	var message = $("#subscribe_message");


	if(name == '' || email == ''){
		message.html(`<b class="text-danger">Please Fill All The Fields</b>`);
		message.show();
		setTimeout(hideSubMessage,3000);
		return false;
	}


	if(name.length > 100 || name.length < 3){
		message.html(`<b class="text-danger">Name Lenght Error(max 100, min 3 char)</b>`);
		message.show();
		$("#subscriber_name").focus();
		setTimeout(hideSubMessage,3000);
		return false;
	}

	if(email.length > 200 || email.length < 10){
		message.html(`<b class="text-danger">Email Lenght Error (max 200, min 10 char)</b>`);
		message.show();
		$("#subscriber_email").focus();
		setTimeout(hideSubMessage,3000);
		return false;
	}
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var data = {
		_token: CSRF_TOKEN,
		name:name,
		email:email
	}

	storeSubscriber(data);

})





