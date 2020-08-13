<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
@include('library.adminnav')
<form action="/store" method="post" enctype="multipart/form-data" class="p-5">
    <div class="form-group">
        <label for="name">Book Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Book Name">
        <div>{{$errors->first('name')}}</div>

    </div>
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="lang">
                <option >Choose Language</option>
                <option >ANDROID</option>
                <option >ARDUINO</option>
                <option >ASP.NET</option>
                <option >BOOTSTRAP</option>
                <option >C#</option>
                <option >C++</option>
                <option >CSS</option>
                <option>DRUPAL</option>
                <option >DJANGO</option>
                <option >HTML</option>
                <option >JAVA</option>
                <option >JAVASCRIPT</option>
                <option >NETWORKING</option>
                <option >PYTHON</option>
                <option >NODE.JS</option>
                <option >R</option>
                <option >RUBY ON RAILS</option>
                <option >SWIFT</option>
                <option >SPRING</option>
            </select>
        </div>

        <div>{{$errors->first('lang')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Upload Book Cover</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        <div>{{$errors->first('image')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Upload Book</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1"name="book">
        <div>{{$errors->first('book')}}</div>
    </div>


    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
