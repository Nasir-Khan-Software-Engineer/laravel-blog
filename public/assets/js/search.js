$(document).ready(function(){
	$("#search_post").keyup(function(){
		var keyword = $(this).val();
		var url = "http://127.0.0.1:8000/post/search/"+keyword;
		$("#search_post_link").attr('href',url);
	})
	$("#search_post_link").click(function(){
		if($("#search_post").val() == ''){
			$("#search_post").focus();
			return false;
		}
	})
})