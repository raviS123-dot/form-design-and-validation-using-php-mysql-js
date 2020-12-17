<html lang="en">
<head>
  <title>Form Registration and Login</title>
  <style> 
    body {
    background-image: url("bgbooks1.jpg");
    height: 500px; 
    background-position: center;
    background-repeat: no-repeat; 
    background-size: cover; 
    }   
  </style>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" ><h2>CLASS CONNECT</h2></a>
</nav>

<div id="signin" class="card bg-dark text-white text-center" style="width: 20rem; margin-top:150px; margin-left:530px;">
  <div class="card-body">
        <form name="signinform" method="post" onsubmit="return validatesigninform()" action="config.php">
        <div class="form-group">
            <label for="exampleInputEmail1"><h5>Email:</h5></label>
            <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><h5>Password:</h5></label>
            <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div> -->
        <button type="submit" value ="Submit" class="btn btn-primary">Login</button>
        <div class="container signup">
            <p>For new account!! <a type="submit" id="signinhide" style="color:skyblue">Sign up</a>.</p>
        </div>
        </form>
  </div>
</div>

<div id="signup" class="card bg-dark text-white text-center" style="width: 40rem;  margin-top:20px; margin-left:335px;">
<div class="card-body">
    <form name="signupform" method="post" onsubmit="return validatesignupform()"  action="process.php">
        <div class="container">
            <h3>Register</h3>
            <p>Please fill in this form to create an account.</p>
            <div class="form-group">
            <label for="exampleInputEmail2"><h5>Email:</h5></label>
            <input type="email"  name="user_email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2"><h5>Password:</h5></label>
            <input type="password" name="user_password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword3"><h5>Enter password again:</h5></label>
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
        </div>
            <p>By creating an account you agree to our <a href="#" style="color:skyblue" >Terms & Privacy</a>.</p>

            <button type="submit" value="Submit" class="btn btn-primary">Register</button>
        </div>
        
        <div class="container signin">
            <p>Already have an account? <a type="submit" id="signuphide" style="color:skyblue">Sign in</a>.</p>
        </div>
    </form>
</div>
</div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="javascripts.js"></script>
<script>
    $(document).ready(function(){
        $("#signup").hide();  
    });
  </script>
</html>
