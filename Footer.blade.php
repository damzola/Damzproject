 {{-- @extends("Footer"); --}}
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix ('resources/css/style.css')}}"/>
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/all.min.css')}}" >
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/fontawesome.min.css')}}" >
    {{-- <script src="{{ mix ('resources/js/script.js')}}" async defer></script> --}}
    <title>Footer</title>

</head>
<body>
    <div id="cont-ainer">

        <div id="main-ing">

        </div>

    </div>






    <footer >

            {{-- <h1>Site owned and manage by <strong>Adeoye Damilola</strong> </h1> --}}
            <p>All right reserved &copy 2024</p>
            <h6>You can link us up on defferent social media via our handles</h6>

            <span class="icon">
                <a href="https://www.Facebook.com" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com" target="_blank" ><i class="fa-brands fa-instagram"></i> </a>
                <a href="https://www.linkedin.com/in/adeoye-damilola-840ab9275" target="_blank"><i class="fa-brands fa-linkedin"></i> </a>
                <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i> </a>

            </span>

            <p style="text-align: end; font-size:10px " id="doom"></p>

    </footer>
    <script>
        const j = new Date();
        document.getElementById("doom").innerHTML= j;

    </script>
</body>
</html>
