<div class="row py-4">
	<div class="col-12">
		<div class="border p-3">
			<h4>
				💬 Comments
			</h4>

			<div class="row">
				<div class="col-12 col-lg-6 mt-3">
					<label for="name">Name*</label>
					<input type="text" id="comment_name" class="form-control rounded-0 py-4" placeholder="Your Nick Name">
					<b>Note: </b> Max 100 characters & Min 3 characters.
				</div>
				<div class="col-12 col-lg-6 mt-3">
					<label for="email">Email*</label>
					<input type="email" id="comment_email" class="form-control rounded-0 py-4" placeholder="Your Valid Email">
					<b>Note: </b> Max 200 characters & Min 10 characters.
				</div>
				<div class="col-12 col-lg-12 mt-3">
					<label for="comment_body">Comment*</label>
					<textarea placeholder="A Short Comments" class="form-control rounded-0" id="comment_body" cols="30" rows="4"></textarea>
					<b>Note: </b> Max 500 characters & Min 10 characters.
				</div>

				<div  class="col-12 mt-2">
					<button class="btn btn-dark form-control rounded-0 spinn-btn" id="store_commnet_btn">
                      <div id="comment_sponner" class="spinner-border text-light spinner" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
					  Submit
				    </button>
				</div>

				<div id="comment_message" class="col-12 mt-3">
					
				</div>
			</div>
		</div>
		
	</div>
</div>

<div class="row">
	<div class="col-12" id="comment_show">


	</div>
</div>
