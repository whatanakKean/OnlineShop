@vite(["resources/scss/app.scss", "resources/scss/detailbook.scss"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <title>{{$book->name}}</title>

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
                <img src="{{$book->img}}"  alt="bookcover">
            </div>
            <div class="detail-bookcontent">
                <h1>{{$book->name}}</h1>
                <p>{{$book->description}}</p>

                <p>Category: {{$book->category}}</p>
                <p>Author: {{$book->author}}</p>
                <p>Release Data: {{$book->release_date}}</p>
                <p>Price: {{$book->price}}$</p>
                <p>Quantity: {{$book->quantity}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Want this book?</h2>
        <br>
        <p>Contact: <b>{{$vendor->name}}</b> </p>
        <p>Tel: <b>{{$vendor->tel}}</b></p>
        <p>Email: <b>{{$vendor->email}}</b></p>
        <p>Address: <b>{{$vendor->address}}</b></p>
    </div>

</body>
</html>
