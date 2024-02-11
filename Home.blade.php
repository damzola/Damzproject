@include('Heading')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix ('resources/css/Design.css')}}"/>
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/all.min.css')}}" >
    <link rel="stylesheet" href="{{ mix ('resources/views/FontAwesome/fontawesome.min.css')}}" >
    <script src="{{ mix ('resources/js/script.js')}}" async defer></script>
    <title>Home Page</title>
</head>
<body class="body-b">
    <div class="hom-bg">
        <div class="carousel">
            <div class="carousel-view">
                <button id="prev-btn" class="prev-btn">
                    <svg viewBox="0 0 512 512" width="20" title="chevron-circle-left">
                 <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z" />
               </svg>
                   </button>
                <div class="list-item" id="list-item" >
                  <div class="d-block">
                    <img src="{{mix ('resources/Image/rose.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </`p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/flower.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/tea cup.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/coffe cup.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/rose.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/flower.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/tea cup.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                <div class="d-block">
                    <img src="{{mix ('resources/Image/coffe cup.jpg')}}" alt="img" class="item" id="item" >
                    <p class="p-caro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatum quae dolores tempore illum sed rem laborum omnis aspernatur! Laudantium ullam, minima ad optio expedita quasi ducimus inventore totam facere!
                        <a class="see-a" href="#" title="Read more">See Details...</a>
                    </p>
                </div>
                </div>
                    <button id="next-btn" class="next-btn">
                        <svg viewBox="0 0 512 512" width="20" title="chevron-circle-right">
                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" />
            </svg>
                    </button>
            </div>


        </div>

        <div class="side-bar1">

            <h3 class="h-show">Page Navigations</h3>
            <div class="sho-b">

            <ul class="sho-g">
                <li><a class="activity" href="{{url('
                /')}}">Home</a></li>
                    <li><a href="#">Latest News</a> </li>
                        <li><a href="#">Event</a> </li>
                            <li><a href="#">Work</a> </li>
                                <li><a href="#">Contact</a> </li>
                                    <li><a href="#">Help</a> </li>
            </ul>
                </h5>
            </div>
            <h5 class="han-hd">Top news of the week</h5>

            {{-- @foreach ($Topnew as $topnew)

            <div class="sho-b">


                <h5>{{$topnew['top news']}}</h5>
                <p class="paragraph">{{$topnew['news_day']}}</p>
                <p class="paragraph">{{$topnew['event']}}</p>
                <p class="paragraph"> {{$topnew['about']}}</p>
                <p class="paragraph">{{$topnew['help']}}</p>
                <p class="paragraph">{{$topnew['created_at']}}</p>
                <span class="pan"><a class="span" href="#">Read more</a></span>



            </div>
@endforeach --}}


        </div>





 @foreach ( $Post as $posts)






        <div class="side-bar2">

            <h6 >{{$posts['id']}}</h6>
            <div class="news">
            <h5 class="h-show">{{$posts['latest news']}}</h5>

                <h3 class="hn-n">{{$posts['blog post']}}</h3>
                    <p class="main truncate" id="main">{{$posts['trending news']}}</p>

                        <button class="more" id="more">Show more</button>
                    <button class="less invisible" id="less">Show less</button>

                    <p class="lat-n" id="Lat-n">{{$posts['created_at']}}</p>
                 {{-- <div class="arto">
                     <img src="{{mix ('resources/Image/damz.jpeg')}}" alt="author" class="author">
                    <p class="maker">Damilola Adeoye</p>
                    </div> --}}


            </div>





     </div>
     @endforeach
     <span>
        {{$Post->links()}}
     </span>
 @include('Footer')

    </div>


</body>

</html>


