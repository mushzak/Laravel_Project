@extends('layouts.app')

@section('content')


    <div class="container">
        <h2>Add Post</h2><br/>
        <form method="post" action="{{route('add.post')}}">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-6">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-6">
                    <label for="Description">Description:</label>
                    <textarea type="text" class="form-control" name="description" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-4" style="margin-top:30px">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection

