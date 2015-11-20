<div class="container">
	
	<h1>Create Advertisement</h1>

	<form action="/advertise/create" method="POST" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div>
			<label for="">Title</label>
			<input type="text" name="title">
		</div>

		<div>
			<label for="">Image</label>
			<input type="file" name="image" id="">
		</div>

		<div>
			<label for="">Description</label>
			<textarea name="description" id="" cols="30" rows="10"></textarea>
		</div>

		<div>
			<label for="">Url</label>
			<input type="text" name="url">
		<div>
			
			<label for="">Category</label>
			<select name="category" id="">
				<option value="">Electronics</option>
				<option value="">Automobiles</option>
				<option value="">Services</option>
				<option value="">Fashion Wear</option>
				<option value="">News</option>
				<option value="">Information Technology</option>
			</select>

		</div>

		<button>Create</button>
	</form>

</div>