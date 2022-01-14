<!DOCTYPE html>
<html>
<head>
	<title>registration from</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

</head>
<body>
	<div class="container" style="border: 2px solid;">
		<div class="col-md-12" style="text-align: center;">
			<h1>registration from</h1>
			<form action="fileupload.php" method="post" enctype="multipart/form-data">
		</div>

		<hr style="padding-left: 250px;">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				name :
			</div>

			<div class="col-md-3">
				<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				Username :
			</div>

			<div class="col-md-3">
				<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				password :
			</div>

			<div class="col-md-3">
				<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				re password :
			</div>

			<div class="col-md-3">
				<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				age :
			</div>

			<div class="col-md-3">
				<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				DOB :
			</div>

			<div class="col-md-3">
				<input type="date" name="" class="form-control">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				country :
			</div>

			<div class="col-md-3">
				<select class="form-control">
					<option>choose country</option>
					<option>india</option>
					<option>us</option>
					<option>uk</option>
				</select>

			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				state :
			</div>

			<div class="col-md-3">
				<select class="form-control">
					<option>state</option>
					<option>gujarat</option>
					<option>bihar</option>
					<option>assam</option>
					<option>goa</option>
			</select>
			</div>

			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				city :
			</div>

			<div class="col-md-3">
				<select class="form-control">
		            <option>city</option>
		            <option>rajkot</option>
		            <option>surat</option>
		            <option>ahmdabad</option>
		            <option>mumbai</option>
		            <option>pune</option>
	            </select>
			</div>

			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				profile pic. :
			</div>

			<div class="col-md-3">
				<input type="file" name="image" class="form-control">
			</div>
		</div>

		<div class="row" style="padding-top: 15px;">
				<a href="login.php">login</a>
		</div>
		<div class="button">
		<input type="submit" value="registration" id="registration">
			</div>
			</form>
		<div>
		

	</div>

</body>
</html>