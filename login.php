<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<div class="row">
                  <div class="col-xs-4 col-md-offset-4">
                      <div class="well">
                          <form id="loginForm" method="POST" action="login_submit.php">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="register.php"><label>Register?</label></a>
                          </form>
                      </div>
                  </div>
         </div>
    </div>
</div>
</body>
</html>