function downloadCode(data){
	$("#code_spinner").show();
	
	$.ajax({
		url: "/download/code",
		type:"POST",
		data:data,
		success:function(response){
			$("#name").val('');
			$("#email").val('');
			
			$("#code_spinner").hide();

			var message = $("#download_message");

			if(response.success){
				message.append(`<b class="text-success">💂: Check Your Email, to Download The Source Code. 📭</b>`);
			}else{
				message.append(`<b class="text-success">💂: Somethisng Wrong, Try Again Later 😐</b>`);
			}

			message.show();

			setTimeout(hideDownloadMessage,10000);

		},
	});


}

function hideDownloadMessage(){
	$("#download_message").html('');
	$("#download_message").hide();
}

$("#download_btn").click(function(){
	var name    = $("#name").val();
	var email   = $("#email").val();
	var post_id = $("#post-title").data('id');
	var message = $("#download_message");

	if(post_id == ''){
		return alert("Something Wrong!!");
	}


	if(name == '' || email == ''){
		message.html(`<b class="text-danger">Please Fill All The Fields</b>`);
		message.show();
		setTimeout(hideDownloadMessage,3000);
		return false;
	}

	

	if(name.length > 100 || name.length < 3){
		message.html(`<b class="text-danger">Name Lenght Error</b>`);
		message.show();
		$("#name").focus();
		setTimeout(hideDownloadMessage,3000);
		return false;
	}

	if(email.length > 200 || email.length < 10){
		message.html(`<b class="text-danger">Email Lenght Error</b>`);
		message.show();
		$("#email").focus();
		setTimeout(hideDownloadMessage,3000);
		return false;
	}

	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var data = {
		_token: CSRF_TOKEN,
		name:name,
		email:email,
		post_id:post_id
	}

	downloadCode(data);

})



