@extends ('layouts.app')

@section('content-movie')
    @foreach($movies as $movie)
        <div>
            <span>{{$movie->id}}</span>
            <span>{{$movie->title}}</span>
            <span>{{$movie->original_title}}</span>
            <span>{{$movie->nationality}}</span>
            <span>{{$movie->date}}</span>
            <span>{{$movie->vote}}</span>
        </div>
    @endforeach
@endsection