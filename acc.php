

<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="acc.css">
</head>
<body> 
     <div class="wrapper">
         <div class="headline">
            <a href="home.php"><img src= "logo.png" width="180px"></a>
         </div>
         <form class="form" method="post" action="connect.php">
            <div class="signup">
                <div class="form-group">
                    <input type="text" placeholder="Full Name" class="form-control"  id="fullName" name="full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control" id="email"  name="email"  required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" id="password" name="password"  required>
                </div>
                <a href="home.php"><input type class="btn" value="sign up"></a>
                <div class="account-exist">
                    Already have an account? <a href="#" id="login">Login</a>
                </div>
            </div>
            <div class="signin"> 
                <form class="form" method="post" action="acc.php">
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control" id="email"  name="email"  required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" id="password"  name="password"  required>
                </div>
                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="account-exist">
                    Create New a account? <a href="#" id="signup">Signup</a>
                </div>
            </div>
         </form>
     </div>

    <script>
      let btnLogin = document.getElementById("login");
      let btnSignUp = document.getElementById("signup");

      let signIn = document.querySelector(".signin");
      let signUp = document.querySelector(".signup");

      btnLogin.onclick = function(){
      signIn.classList.add("active");
      signUp.classList.add("inActive");
      }

      btnSignUp.onclick = function(){
      signIn.classList.remove("active");
      signUp.classList.remove("inActive");
      }
    </script>
</body>
</html>
