<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login system</title>

    <!-- Bootstrap core CSS -->
    <link href="css/adopted.bootstrap.min.css" rel="stylesheet">
    <style>
		html, body {
			height: 100%;
}
		body {
			background-image: url(img/bg.jpg);
			background-size: cover;
			
			background-position: center;
}
		@font-face {
			font-family: workSans;
			src: url(font/WorkSans-ExtraLight.ttf);
		}
		ul li a {
			font-size: 17px;
			font-family: "workSans";
			color: rgb(255, 255, 255);
			font-weight: bold;  
		}
		
		ul li a:hover {
			color: #443020;
		}
		
		.form-row button { 
			font-size: 17px;  
			font-family: "workSans";
			font-weight: bold;
		}
		
		h1, p, input {
			font-family: 'workSans';
		}
		input {
			font-weight: bold;
		}	
	</style>
  </head>

  <body>
    <div class="container-fluid">
    	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="/admins">Admin panel</a>
  </li>
  <!--<li class="nav-item">
    <a class="nav-link" href="https://facebook.com/EnsarDEMIRKOL" target="_blank">ensar demirkol</a>
  </li>-->
</ul>
    </div>
      <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <form action="validate.php" method="post">
     <div class="text-center" style="color: #fff;">
     <h1>log in</h1>
     </div>
     <div class="text-center" style="margin-bottom: 6em; color: #fff;">
     <p>Use your registered username and password to login</p>
     </div>
     <div class="form-row justify-content-center">
       <div class="col-7">
           <input type="text" name="username" class="form-control" id="username" placeholder="username">
       </div>
       <div class="col-7 my-1">
           <input type="password" name="password" class="form-control" id="password" placeholder="password">
       </div>
      </div>
      <div class="form-row justify-content-center">
         <div class="col-7  my-1">
             <button type="submit" class="btn btn-info btn-block" style="background-color: #36281d; color: #fff;">Login</button>
         </div>
      </div>
    </form>   
  </div>
</div>
  </body>
</html>
