<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
</head>
<body>
    @include('library.adminnav')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Language</th>
                <th scope="col">cover</th>
                <th scope="col">Book</th>
                <th scope="col">Delete Book</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($library as $library)
            <tr>
                <th scope="row">{{$library->id}}</th>
                <td>{{$library->name}}</td>
                <td>{{$library->langu}}</td>
                <td><img src="{{asset('storage/'.$library->image)}}" alt="" class="img-thumbnail" height="255"
                        width="255"></td>
                <td><a href="{{asset('storage/'.$library->book)}}" download="{{asset('storage/'.$library->book)}}">
                        <button class="btn btn-primary">Download</button> </a></td>
                <td>
                    <form action="{{ url('/delete',['id' => $library->id])}}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
