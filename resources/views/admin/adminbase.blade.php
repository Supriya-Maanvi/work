<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://kit.fontawesome.com/96e27b972e.js" crossorigin="anonymous"></script>
   
</head>
<body class="bg-theme">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-0 fixed-top">
             <a href="{{route('homepage')}}" class="navbar-brand"><img src="{{asset('img_file/'.'fd_Logo1.svg')}}" alt="" width="90px" class="ms-1"></a>
             <form action="{{route('homepage')}}" method="GET" class="d-flex">
                 <input type="search" name="search"  class="form-control rounded-pill me-n3" placeholder=" Search Facebook ....." size="28px" style="background-color:rgb(245, 246, 250)">     
             </form>
             <a href="{{route('homepage')}}"><img src="{{asset('img_file/'.'a(166).png')}}" alt="" width="60px" class="ms-5"></a>
             <a href="{{route('homepage')}}" class="text-secondary"><img src="{{asset('img_file/'.'a (168).png')}}" alt="" width="67px" class="ms-5"></a>
             <a href="{{route('homepage')}}" class=""><img src="{{asset('img_file/'.'a(167).png')}}" alt="" width="62px" class="ms-5"></a>
             <a href="{{route('homepage')}}" class=""><img src="{{asset('img_file/'.'a(169).png')}}" alt="" width="75px" class="ms-5"></a>
             <a href="{{route('homepage')}}" class="text-secondary"><img src="{{asset('img_file/'.'a(170).png')}}" alt="" width="92px" class="ms-5 me-5"></a>

             <div class="row">
                 <div class="col">
                     
                 </div>
                 <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="btn rounded-circle me-2"><img src="{{asset('img_file/'.'1234.jpg')}}" alt="" width="20px" class="card-image rounded-circle"></a></li> 
                    <a href="{{route('adminprofile')}}" class="nav-link text-dark">Supriya Kumari</a>
                     <li class="nav-item"><a href="" class="btn rounded-circle me-2" style="background-color:rgb(230, 231, 236)"><i class="fas fa-plus" style=""></i></a></li>
                     <li class="nav-item"><a href="" class="btn rounded-circle me-2" style="background-color:rgb(230, 231, 236)"><i class="fab fa-facebook-messenger" style=""></i></a></li>
                     <li class="nav-item"><a href="" class="btn rounded-circle me-2" style="background-color:rgb(230, 231, 236)"><i class="fas fa-bell" style=""></i></a></li>
                     <li class="nav-item dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="btn rounded-circle dropdown-toggle" style="background-color:rgb(230, 231, 236)"></a>
                        <div class="dropdown-menu p-5" >
                           <a href="{{route('adminprofile')}}" class="dropdown-item">Proflie</a>
                           <a href="" class="dropdown-item">Setting</a>
                           <a href="" class="dropdown-item">Add ghhggggggggggg</a>
                           <a href="" class="dropdown-item">
                               <form action="{{route('logout')}}" method="POST" class="">
                                @csrf
                                <input type="submit" class="btn p-0" value="Logout">
                            </form>
                           </a>
                        </div>
                 </ul>
             </div>
    </nav>
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
</body>
</html>