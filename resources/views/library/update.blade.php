@foreach($cheatcs as $cheat)
<img      src="{{asset('storage/'.$cheat->image)}}" alt="image" height="255" width="255" >
@endforeach
<p>{{$book}}</p>
