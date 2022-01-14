<!doctype html>
<html lang="en">

<head>
    <title>registration from</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
</head>

<body>
    
<div class="container" style="border: 2px solid;">
		<div class="col-md-12" style="text-align: center;">
			<h1>registration from</h1>
			<form action="validation.php" method="post">
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
				<input type="text" name="uname" class="form-control" placeholder="name@example.com" id="uname">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				password :
			</div>

			<div class="col-md-3">
				<input type="text" name="passw" class="form-control" placeholder="password" id="pass">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				re password :
			</div>

			<div class="col-md-3">
				<input type="text" name="repassword" class="form-control" placeholder="repassword" id="repassword">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				age :
			</div>

			<div class="col-md-3">
				<input type="text" name="age" class="form-control" placeholder="age" id="age">
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
				DOB :
			</div>

			<div class="col-md-3">
				<input type="date" name="dob" class="form-control" placeholder="date of brith" id="dob">
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
				<input id="file"
							onchange="return fileValidation()"
                            class="form-control text-light bg-dark" name="profile" type="file" accept=".jpg,.png,.jpeg,.bmp">
			</div>
		</div>
		<div class="row" style="padding-top: 15px;">
			<div class="col-md-4"></div>
			<div class="col-md-1">
		<a href="login.php">login</a>
		
			</div>
			<div class="button">
			<input type="submit" value="registration" id="registration">
			</div>
				</form>
		<div>
		

	</div>
    <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.bmp)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Please Choose a Photo');
                fileInput.value = '';
                return false;
            } 
            else 
            {
              
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#register').click(function(){
                $username = $('#username').val().toString();
                $psw = $('#password').val().toString();
                $repsw = $('#repassword').val().toString();
                $age = $('#age').val().toString();
                $country = $('#country').val().toString();
                $state = $('#state').val().toString();
                $city = $('#city').val().toString();
                $note = $('#note').val().toString();

                if($username == "" | $psw == "" | $repsw == "" | $age == "" | $country == "" | $state == "" | $city == "" | $note == "")
                {
                    alert("Please enter all the values...");
                    return false;
                }
                else
                {
                    if($psw == $repsw)
                    {
                        alert("Registration Successful...");
                    }
                    else
                    {
                        alert("Password and Re-Password must be same");
                        return false;
                    }
                }
            });
        });
    </script>

</body>
</html>
