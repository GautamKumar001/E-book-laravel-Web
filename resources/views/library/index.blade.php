<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">

</head>
<body>
@include('layouts.nav')
@foreach($cheatcs as $cheat)
    <div class="wrapper  ">

        <div class="img-area ">
            <a class="btn btn-light" href="{{ url('/update',['image'=>$cheat->image])}}"><span class="fa fa-shopping-cart fa-2x" style="color:green"></span></a>

            <img      src="{{$cheat->image}}" alt="image" height="255" width="255" >
            <a href="{{$cheat->book}}" download="{{$cheat->book}}">
                <button class="btn btn-light"> <span class="fa fa-download fa-2x" style="color:green"></span></button>

            </a>


        </div>

    </div>

@endforeach

</body>
</html>
