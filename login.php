<html>
<head>
      <title> user login and registration</title>
	   <link rel="stylesheet" type="text/css" href="login.css">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  
</head>
<body>

<div class="conatainer">
    <div class="login-box">
     <div class="row">
     <div class="col-md-6 login-left">
        <h2> LOGIN  </h2>
	    <form action="validation.php" method="post">
	     <div class="form-group user-box">
		   
	
	       <input type="email" name="user" class="form-control" placeholder="username"required>
	       </div>
	     <div class="form-group user-box">
	          <input type="password" name="password" class="form-control" placeholder="password" required>
	          </div>
	          <button type="submit" class="b">
			  <span></span>
		<span></span>
		<span></span>
		<span></span>
			  LOGIN</button>
         </form>
       </div>
     
       <div class="col-md-6 login-right">
        <h2> REGISTER  </h2>
	     <form action="regestration.php" method="post">
	       <div class="form-group user-box">
	      
	       <input type="email" name="user" class="form-control" placeholder="username" required>
	       </div>
	   <div class="form-group user-box">
	          <input type="password" name="password" class="form-control" placeholder="password"  required>
	          </div>
	       <button type="submit" class="b">
		<span></span>
		<span></span>
		<span></span>
		<span></span>	   
		   REGISTER
		</button>
	        
      </form>
      </div>
      </div>
	  
    </div>
</div>

</body>
</html>
