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
                          <form  method="POST" action="register_simpan.php">
                          <div class="form-group">
                          <input type="text" name="id_user" hidden/>
                                  <label for="name" class="control-label">Nama</label>
                                  <input type="text" class="form-control"  name="nama"  required="">
                                    
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" name="username"  required="" >
                                
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control"  name="password"  required="">
                                 
                              </div>
                              <div class="form-group">
                                  <label for="email" class="control-label">Email</label>
                                  <input type="email" class="form-control"  name="email"  required="" placeholder="example@gmail.com">
                                  
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Register</button>
                              <a href="login.php"><label>Login?</label></a>
                              
                          </form>
                      </div>
                  </div>
         </div>
    </div>
</div>
</body>
</html>