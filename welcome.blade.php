 @include("Heading")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{ mix ('resources/css/style.css')}}"/>
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/all.min.css')}}" >
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/fontawesome.min.css')}}" >
    {{-- <script src="{{ mix ('resources/js/app.js')}}" async defer></script> --}}


</head>

<body class="bdy">



        <p class="wenote" id="wenote">
            Welcome .
        </p>


    @include("Footer")

</body>
</html>
