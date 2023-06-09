<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <form action="">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <br><br><br><br><br><br><br>
            <h3>Sign in</h3>
    
        </div>

        <!-- Main container for all inputs -->
        <form action="../backend/server.php" method="post" class="mainContainer">
            <!-- Username -->
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember_me"> Remember me
                </label>
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="#">Register here!</a></p>

        </form>

        <div class="slider-thumb"></div>


    </form>

    <div class="paypaloozatitel">
        <img src="images/paypalooza.png" alt="imagepaypalooza" width="500px" height="300px">
    </div>

    <div class="icon"> <a href="index.html">
        <button class="block">
        <img src="images/login_button.png" alt="icon" width="150px" width="150px" border="0" />
      </button>

      </div>

    
</body>
</html>