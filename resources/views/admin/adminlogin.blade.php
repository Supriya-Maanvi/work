<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="bg-theme">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mt-5 pt-5 pe-5 mx-5">
                <h1 class="display-3 fw-bold mt-5" style="color:rgb(9, 132, 227)">facebook</h1>
                <h3>Facebook helps you connect and share with the people in your life.</h3>
            </div>
            <div class="col-lg-4 mt-5 pt-5 my-5">
                <div class="card">
                    <div class="card-body text-center">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="email" class="form-control p-3" placeholder="email address or phone number">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control p-3" placeholder="password">
                            </div>
                            <div class="mb-3 d-grid">
                                <input type="submit" class="btn text-white fw-bold" style="background-color:rgb(9, 132, 227);font-size:20px" value="Log In">
                            </div>
                            <a href="" class="text-decoration-none">Forgotten password?</a>
                            <hr>
                            <div class="mb-3 d-grid col-lg-8 mx-auto">
                                <a href="{{route('register')}}" class="btn text-white fw-bold p-2 m-3" style="background-color:rgb(76, 209, 55);font-size:17px" value="">Create New Account</a>
                            </div>
                        </form>
                    </div>
                </div>
                <h6 class="small mt-3 ">Create a Page for a celebrity, band or business.</h6>
            </div>
        </div>
    </div>
</body>
</html>