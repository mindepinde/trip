@extends('posts.master')
@include('inc.adminNav')
@section('content')

    <div class="row">
        <div class="col-lg-12">
          <h3>CRUD</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-primary" href="{{route('posts.create')}}">New post</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Body</th>
            <th width="300px">Actions</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{route('posts.show', $post->id)}}">Show</a>
                    <a class="btn btn-xs btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id],'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
@endsection
