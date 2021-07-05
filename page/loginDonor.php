

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../css1/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome/css/all.css" rel="stylesheet" />
    <script src="../jquery/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <style>
    	body {
			  margin: 0;
			  padding: 0;
			  background-color: #F0F4F5;
			  height: 100vh;
			}
			#login .container #login-row #login-column #login-box {
			  margin-top: 80px;
			  max-width: 600px;
			  height: 320px;
			  border: 1px solid #8c1515;
			  background-color: #a32137;
			}
			#login .container #login-row #login-column #login-box #login-form {
			  padding: 20px;
			}
			#login .container #login-row #login-column #login-box #login-form #register-link {
			  margin-top: -85px;
			}
    </style>

    </head>

<body>
	<div id="login">
     	<h3 class="text-center pt-5">Donor Login Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="../function/logD.php" method="post">
                            <h3 class="text-center text-info">Login as Donor</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>




                            <div class="row">
                            	<div class="col-lg-6 mb-4"><a class="btn btn-info btn-md" href="../index.php" role="button">Back</a>   </div>
					             <div class="col-lg-3 mb-4 "> <a class="btn btn-info btn-md" href="../page/donorSignup.php" role="button">Register</a></div>
					             <div class="col-lg-3 mb-4"><input type="submit" name="Submit" class="btn btn-info btn-md" value="Log-In">   </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
