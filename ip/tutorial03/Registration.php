<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
        body{
                margin-left: 620px;
            }
    </style>
    <script>
        $(document).ready(function()
        {
            $('.form').submit(function(e)
		{ 
			e.preventDefault(); 
			var name = $('#nm').val(); 
			var age = $('#age').val(); 
			var dob = $('#dob').val(); 
			var email = $('#email').val(); 
			var psw= $('#psw').val(); 
			var cpswd = $('#cpswd').val(); 
			var city = $('#city').val(); 
			var state = $('#state').val()
			var country = $('#country').val(); 
			$(".error").remove(); 
            if (name=="")
				{ 
					$('.error1').html('<span class="error">Enter user name.</span>'); 
				} 
				if (age=="")
				{ 
					$('.error2').html('<span class="error">Enter user name.</span>'); 
				}
				if (dob=="") 	
				{ 
					$('.error3').html('<span class="error">Enter user name.</span>'); 
				} 
				if (email=="")
				{ 
					$('.error4').html('<span class="error">Fill up email address.</span>'); 
				} 
                else 
				{ 
					var regEx = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
					var validEmail = regEx.test(email); 
					if (!validEmail) 
					{ 
						$('.error4').html('<span class="error">Enter a valid email</span>');
					} 
				} 
				if (psw.length < 8 || cpswd.length < 8)
				{ 
					$('.error5').html('<span class="error">Password must be at least 8 characters long</span>'); 
					$('.error6').html('<span class="error">Password must be at least 8 characters long</span>')			; 
				} 
				else if(psw!=cpswd) 
				{ 
					$('.error5').after('<span class="error">Password is not match</span>'); 
				} 
				if (state=="" || country=="" || city=="") 
				{ 
					$('.error7').html('<span class="error">Fill up field</span>'); 
				} 
            });      
        });
    </script>
</head>
<body>
    <div class="contener">
    </div>
    <div class="col-md-6">
        <h1 class="singin-text mb-3">Registration</h1> 
			<form action="" method="POST" class="form"> 
				<div class="row"> 
			<div class="col-md-4 p-2"> 
					Name: 
				</div> 
                <div class="col-md-8 p-2"> 
					<input type="text" class="form-control" placeholder="Name" id="nm" name="nm"><br/> 
					<p class="error1" ></p> 
				</div>
			</div> 
            <div class="row"> 
                <div class="col-md-4 p-2"> 
                    Age: 
                </div> 
                <div class="col-md-8 p-2"> 
                    <input type="text" class="form-control" placeholder="Age" id="age" name="age"><br/> 
                    <p class="error2"></p> 
                </div> 
            </div>
            <div class="row"> 
                <div class="col-md-4 p-2"> 
                    Birth Date: 
                </div> 
                    <div class="col-md-8 p-2"> 
                        <input type="date" class="form-control" placeholder="enter birthdate" id="dob" name="dob"><br/> 
                        <p class="error3"></p> 
                    </div> 
            </div> 
                <div class="row"> 
                    <div class="col-md-4 p-2"> 
                        Email: 
                    </div> 
                    <div class="col-md-8 p-2"> 
                        <input type="email" class="form-control" placeholder="enter email" id="email" name="email"><br/> 
                        <p class="error4"></p> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-4 p-2"> 
                        Password: 
                    </div> 
                        <div class="col-md-8 p-2"> 
                                <input type="password" class="form-control" placeholder=" enter Password" id="psw" name="psw"><br/> 
                                <p class="error5"></p> 
                        </div> 
            </div> 
            <div class="row"> 
                <div class="col-md-4 p-2"> 
                    Re-Password: 
                </div> 
                        <div class="col-md-8 p-2"> 
                            <input type="password" class="form-control" placeholder="enter conform password" id="cpswd" name="cpswd"><br/> 
                            <p class="error6"></p> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col-md-4 p-2"> 
                            Country: 
                        </div> 
                        <div class="col-md-8 p-2"> 
                            <input type="text" class="form-control" placeholder=" enter country" 
                            id="country" name="country"><br/> 
                            <p class="error7"></p> 
                        </div> 
                </div> 
                <div class="row"> 
                        <div class="col-md-4 p-2"> 
                                State: 
                        </div> 
                        <div class="col-md-8 p-2">		
                            <input type="text" class="form-control" placeholder="enter state" id="state" name="state"><br/> 
                        </div> 
                </div> 
                <div class="row">	 
                        <div class="col-md-4 p-2"> 	
                                City: 
                        </div> 
                        <div class="col-md-8 p-2"> 
                            <input type="text" class="form-control" placeholder="enter city" id="city" name="city"><br/> 
                        </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-4 p-2"> 
                            Profile : 
                    </div> 
                    <div class="col-md-8 p-2"> 
                        <input type="file" class="form-control" id="pf" name="pf"><br/> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4 p-2"> 
                            Note: 
                    </div> 
                        <div class="col-md-8 p-2"> 
                            <textarea class="form-control" placeholder="Note" name="note"></textarea><br/> 
                        </div> 
                    </div> 
                    <div class="row"> 
                        <div class="col p-2">
                            <button type="submit"class="btnbtn-secondary" name="submit" >Register</button><br/><br/> 
                    </div> 
             </div>
        </form>
    </div>
</div>
</div>
</body>
</html>