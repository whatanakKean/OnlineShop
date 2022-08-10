@vite(["resources/scss/app.scss"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <title>Product Page</title>
</head>
<body>
    <x-navbar 
        :isRegistered="true" 
        profile="https://static.vecteezy.com/system/resources/previews/002/275/847/original/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg"
        name="Rithy Bondeth" 
        email="rithybondeth999@gmail.com"    
    />
    <!--Slide Box-->
    <x-slide/>
    <!--End Slide Box-->

    <!--Banner-->
    <x-banner context="Welcome to CADT Smart Library, Explore your knowledge here!"/>
    <!--End Banner-->

    <!---MenuBar-->
    <x-menubar/>
    <!--End MenuBar-->

    <!-- Category -->
    <x-category title="Popular"/>
    <x-category title="Romance"/>
    <!--- End Category -->
</body>
</html>
