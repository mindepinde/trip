@extends('layouts.app')


@section('content')
    <div class="text-center">
        <div class="row">
           <div class="col-md-12">
                @foreach ($posts as $post)
                    <h1>{{ $post->title }}</h1> <br />
                    <p class="well">{{  $post->body }}</p>
                @endforeach
           </div>
       </div>
    </div>
@endsection
