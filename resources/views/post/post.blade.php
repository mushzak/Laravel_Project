@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="jumbotron">
            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['description'] }}</p>
        </div>

        <div class="actionBox">
            <ul class="commentList">
                @foreach($post->comments as $comment)
                    <li>
                        <div class="commenterImage">
                            {{$comment->user->username }}
                        </div>
                        <div class="commentText">
                            <p class="">{{ $comment->text }}</p> <span class="date sub-text">on {{ $comment->created_at }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <form class="form-inline" method="post" action="{{ route('add.comment') }}">
                @csrf
                @method('POST')
                <div class="form-group col-md-12">
                    <input class="form-control" type="text" placeholder="Your comments" name="text"/>
                    <input class="form-control" type="hidden" value="{{$post['id']}}" name="post_id"/>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group col-md-2">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>

    </div>
@endsection

