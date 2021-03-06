function storeComment(data){
	$("#comment_sponner").show();
	

	$.ajax({
		url: "/comment/store",
		type:"POST",
		data:data,
		success:function(response){
			var name    = $("#comment_name").val('');
			var email   = $("#comment_email").val('');
			var body    = $("#comment_body").val('');
			$("#comment_sponner").hide();
			var message = $("#comment_message");
			if(response.is_success){
				message.append(`<b class="text-success">π: Your Comment Store Successfullyπ</b>`);
			}else{
				message.append(`<b class="text-success">π: Somethisng Wrong, Try Again Later π</b>`);
			}


			if(response.is_trusted){
				message.append(`<br><b class="text-success">π: You are our trusted π₯ person, 
								so your comment will show automatically. ππ</b>`);
			}else{
				message.append(`<br><b class="text-success">π: Your Comment will show after admin review. β</b>`);
			}


			if(response.is_new_commenter){
				message.append(`<br><b class="text-success">π: It is Your First Comment in this website, keep it up. π</b>`);
			}else{
				message.append(`<br><b class="text-success">π: Your are our regual user. π</b>`);
			}

			if(!response.is_verified){
				message.append(`<br><b class="text-success">π: Verify your email Please. π</b>`);
			}

			if(response.is_verification_email_send){
				message.append(`<br><b class="text-success">π: Check Your Email, to confirm your email. π­</b>`);
			}

			$("#comment_message").show();

			setTimeout(hideMessage,10000);

		},
	});


}

function hideMessage(){
	$("#comment_message").html('');
	$("#comment_message").hide();
}

$("#store_commnet_btn").click(function(){
	var name    = $("#comment_name").val();
	var email   = $("#comment_email").val();
	var body    = $("#comment_body").val();
	var post_id = $("#post-title").data('id');
	var message = $("#comment_message");

	if(post_id == ''){
		return alert("Something Wrong!!");
	}


	if(name == '' || email == '' || body == ''){
		message.html(`<b class="text-danger">Please Fill All The Fields</b>`);
		$("#comment_message").show();
		setTimeout(hideMessage,3000);
		return false;
	}

	if(body.length > 500 || body.length < 10){
		message.html(`<b class="text-danger">Comments Lenght Error</b>`);
		$("#comment_message").show();
		$("#comment_body").focus();
		setTimeout(hideMessage,3000);
		return false;
	}

	if(name.length > 100 || name.length < 3){
		message.html(`<b class="text-danger">Name Lenght Error</b>`);
		$("#comment_message").show();
		$("#comment_name").focus();
		setTimeout(hideMessage,3000);
		return false;
	}

	if(email.length > 200 || email.length < 10){
		message.html(`<b class="text-danger">Email Lenght Error</b>`);
		$("#comment_message").show();
		$("#comment_email").focus();
		setTimeout(hideMessage,3000);
		return false;
	}
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var data = {
		_token: CSRF_TOKEN,
		name:name,
		email:email,
		body:body,
		post_id:post_id
	}

	storeComment(data);

})


function fetchComments(post_id){
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var data = {
		_token: CSRF_TOKEN,
		post_id:post_id
	}

	$.ajax({
		url: "/comment/ofpost",
		type:"POST",
		data:data,
		success:function(response){

			response.data.forEach(appedComments);

		},
	});

}

function appedComments(item, index){
	$("#comment_show").append(`

		<div class="p-3 bg-light mb-1">
			<b>π½ `+item.name+`</b>
			<span> π `+item.date+`</span>
			<p>π `+item.body+`</p>
		</div>

	`)
}

$( document ).ready(function() {
	var post_id = $("#post-title").data('id');
    var all_comments_of_this_post = fetchComments(post_id);
})
