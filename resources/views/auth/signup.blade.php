@vite(["resources/scss/signup.scss", "resources/scss/app.scss"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Signup Page</title>
</head>
<body>
    <div class="wrapper">
        <a href="/auth/login" class="backbutton">
            <span class="material-icons">arrow_back</span>
        </a>
        <div class="container">
            <div class="imagebox">
                
            </div>
            <form class="loginbox">
                <h2>Register Here</h2>
                <div class="textfield">
                    <span class="material-icons">person</span>
                    <input type="text" placeholder="Enter Firstname..." name="firstname">
                </div>
                <div class="textfield">
                    <span class="material-icons">person</span>
                    <input type="text" placeholder="Enter Lastname..." name="lastname">
                </div>
                <div class="textfield">
                    <span class="material-icons">email</span>
                    <input type="text" placeholder="Enter Email..." name="email">
                </div>
                <div class="textfield">
                    <span class="material-icons">password</span>
                    <input type="password" placeholder="Enter Password..." name="password">
                </div>
                <div class="textfield">
                    <span class="material-icons">password</span>
                    <input type="password" placeholder="Enter Confirm Password..." name="confirm-password">
                </div>
                <button class="mybutton">Signup</button>
            </form>
        </div>
    </div>
</body>
</html>