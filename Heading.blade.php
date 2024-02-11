<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix ('resources/css/app.css')}}"/>
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/all.min.css')}}" >
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/fontawesome.min.css')}}" >
    <script src="{{ mix ('resources/js/script.js')}}" async defer></script>
    <title>Index </title>

</head>
<body>
    <nav class="navbar">

        <span><a class="logo" href="{{url('/') }}" >wesee</a></span>
        <span class="bar" onclick="toggleClass()">
            <i class="fa-solid fa-bars"></i>
        </span>
        <ul class="container">
            <li><a class="active" href="{{url('/Home')}}">Home</a></li>
            <li><a href="{{url('/news')}}">News</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li class="dropdown">
                <a  href="{{url('/event')}}">Event </a>
                {{-- <ol class="drop-content">
                    <li class="cnp">Some event</li>
                    <li class="cnp">Some event</li>
                    <li class="cnp">Some event</li>
                </ol>  --}}

            </li>


        </ul>
        <form action="{{ asset('/search')}}" method="get" class="form-input">
            @csrf

            <input type="text" name="search" placeholder="Search here">
            {{-- <button class="btn-submit" type="submit" name="search">Search</button> --}}
        </form>

    </nav>
    {{-- <script>
        function showhint(str){
            if(str.length == 0){
                document.getElementById("hint").innerHTML = "";
                return;
            }
            const xhttp = new
            XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("hint").innerHTML = "";
                this.responseText;
            }
            xhttp.open("GET", {{ url("search?q=")}} +str);
            xhttp.send();
        }
    </script> --}}

</body>
</html>
