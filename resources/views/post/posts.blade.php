@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{url('home')}}" class="btn btn-warning">Home Page</a><br/>
        <h1>Posts List</h1>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>User Name</th>
                        <th>Created At</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->username }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="{{url('post/'.$post->id)}}">Show</a></td>
                        </tr>
                    @endforeach
                    {{ $posts->links() }}
                </tbody>
            </table>
        </div>
    </div>

@endsection

