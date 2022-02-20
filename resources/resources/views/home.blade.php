<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="h">Home Page</h1>
    <hr>
    <nav>
        <button class="btn btn-primary">Click</button>
        <a href={{route('home')}}>Home</a>
        <a href={{route('about')}}>About</a>
        <a href={{route('contact',['tasin'=>'mobile'])}}>Contact</a>


        {{-- <div>
            @foreach ($students as $stu)
                <div><span>{{$stu->id}}</span><span>{{$stu->name}}</span><span>{{$stu->roll}}</span><span>{{$stu->address}}</span></div>
            @endforeach
        </div> --}}
        <script src="./js/app.js"></script>
    </nav>
</body>
</html>