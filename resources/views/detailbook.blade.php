@vite(["resources/scss/app.scss", "resources/scss/detailbook.scss"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <title>Book Detail Page</title>
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
        <div class="detail-wrapper container">
            <div class="detail-bookcover">
                <img src="https://anylang.net/sites/default/files/covers/harry-potter-and-cursed-child.jpg" alt="bookcover">
            </div>
            <div class="detail-bookcontent">
                <h2>Harry Potter And The Cursed Child</h2>
                <p>
                    Harry Potter and the Cursed Child” is about the journey Albus takes while growing up, 
                    and the roles he and his best friend, Scorpius (Draco Malfoy son), play when dark forces,
                    perhaps in league with Voldemort, once again threaten the fate of the planet.
                </p>
        
                <p>Author: JK Rowling</p>
                <button class="detail-button">Payment</button>
            </div>
        </div>
        <div class="detial-morewrapper">
            <x-category title="More Like This"/>
        </div>
    </div>
</body>
</html>