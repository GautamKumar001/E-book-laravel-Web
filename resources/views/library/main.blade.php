<html lang="en" class="full-height">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('js/home.js') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</head>

<!--Main Navigation-->
<body>

<div id="container">

    <!-- Start	Product details -->
    <div class="product-details">
    @foreach($langinf as $lang)
        <!-- 	Product Name -->
            <h1>{{$lang->lang}}</h1>

            <!-- The most important information about the product -->

            <p class="information">{{$lang->info}}
            </p>
    @endforeach

    <!-- 		Control -->
        <div class="control">


        <!-- End Button buying -->

        </div>

    </div>

    <!-- 	End	Product details   -->



    <!-- 	Start product image & Information -->

    <div class="product-image">
        @foreach($langinf as $lang)
            <img src="{{$lang->image}}">
    @endforeach



    <!-- 	product Information-->
        <div class="info">
            <h2>The Description</h2>
            <ul>
                @foreach($langinf as $lang)
                <li><strong>Paradigm: </strong>{{$lang->paradigm}}</li>
                <li><strong>Design By: </strong>{{$lang->design}}</li>
                <li><strong>First Appeared: </strong>{{$lang->first}}</li>
                <li><strong>Family: </strong>{{$lang->family}}</li>
                <li><strong>Filename extension: </strong>{{$lang->extension}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--  End product image  -->
</div>

</body>
</html>
