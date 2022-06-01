<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APWT_TASK 1</title>
    <style>
        nav ul{
            display: flex;
        }
        ul li{
            list-style-type: none;
        }
        ul li a{
            text-decoration: none;
            color:black;
            padding: 5px;
        }
        ul li a:visited{
            color:red;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('contactus')}}">Contact</a></li>
            <li><a href="{{route('aboutus')}}">About</a></li>
            <li><a href="{{route('teamlist')}}">Team List</a></li>
            <li><a href="{{route('productlist');}}">Product List</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>