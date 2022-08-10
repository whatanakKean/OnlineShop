@vite(["resources/scss/app.scss", "resources/scss/cart.scss"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <title>Cart Page</title>
</head>
<body>
    <!--Navbar-->
    <x-navbar 
        :isRegistered="true" 
        profile="https://static.vecteezy.com/system/resources/previews/002/275/847/original/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg"
        name="Rithy Bondeth" 
        email="rithybondeth999@gmail.com"    
    />
    <!--End Navbar-->
    <div>
        <div class="cart-wrapper container">
            @foreach([1,2,3,4,5] as $item)
            <!--Cart Box-->
            <div class="cartbox">
                <div class="cartcover"></div>
                <div class="cartcontent">
                    <div>
                        <h3>Harry Potter And The Cursed Child</h3>
                        <small>JK Rowling</small>
                        
                        <p>Price: 15.99$</p>
                    </div>
                    <button class="cart-button">Payment</button>
                </div>
                <div class="cart-closebox material-icons">close</div>
            </div>
            <!--End Cart Box-->
            @endforeach
        </div>
    </div>
</body>
</html>