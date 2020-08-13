<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
</head>

<body>
    @include('library.adminnav')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Info</th>
                <th scope="col">Lang</th>
                <th scope="col">image</th>
                <th scope="col">Key</th>
                <th scope="col">Cheat</th>
                <th scope="col">Paradigm</th>
                <th scope="col">Design</th>
                <th scope="col">First</th>
                <th scope="col">Family</th>
                <th scope="col">Extension</th>
                <th scope="col">Delete Book</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infos as $infos)
            <tr>
                <th scope="row">{{$infos->id}}</th>
                <td>{{$infos->info}}</td>
                <td>{{$infos->lang}}</td>
                <td><img src="{{asset('storage/'.$infos->image)}}" alt="" class="img-thumbnail" height="255"
                        width="255"></td>
                <td><a href="{{asset('storage/'.$infos->key)}}" download="{{asset('storage/'.$infos->key)}}">
                        <button class="btn btn-primary">Download</button></a></td>
                <td><a href="{{asset('storage/'.$infos->cheat)}}" download="{{asset('storage/'.$infos->cheat)}}">
                        <button class="btn btn-primary">Download</button></a></td>
                <td>{{$infos->paradigm}}</td>
                <td>{{$infos->design}}</td>
                <td>{{$infos->first}}</td>
                <td>{{$infos->family}}</td>
                <td>{{$infos->extension}}</td>
                <td>
                    <form action="{{ url('/deleteinfo',['id' => $infos->id])}}" method="post">
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
