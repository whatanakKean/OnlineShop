@vite(["resources/scss/login.scss", "resources/scss/app.scss"])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="imagebox">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ajngecrs.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop controls autoplay></lottie-player>
            </div>
            <form class="loginbox">
                <h2>Welcome to CADT Library</h2>
                <div class="textfield">
                    <span class="material-icons">email</span>
                    <input type="text" placeholder="Enter Email..." name="email">
                </div>
                <div class="textfield">
                    <span class="material-icons">password</span>
                    <input type="password" placeholder="Enter Password..." name="email">
                </div>
                <div class="signup_text">
                    Do not have an account yet? <a href="/auth/signup">Click here</a>
                </div>
                <button class="mybutton">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
