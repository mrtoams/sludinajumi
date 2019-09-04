@extends('layouts.app')

@section('content')
    <h1>Sludinājumi</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
                <h3>{{$post->title}}</h3>
                <small>Izveidots {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>Sludinājumi nav atrasti</p>
    @endif
@endsection