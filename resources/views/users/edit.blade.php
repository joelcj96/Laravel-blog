@extends('layouts.app')

@section('content')

<style>
    body {
        background-image: url('https://cdn.pixabay.com/photo/2014/09/27/18/43/wall-463978_1280.jpg '); 
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>




<div class="container mt-3">
    <h3 class="mb-3" >Edit a Blog</h3>
  
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.index',['blog'=>$blog->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $blog->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" placeholder="Content" value="{{ $blog->content }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    
@endsection
