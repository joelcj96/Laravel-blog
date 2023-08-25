@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url(' https://cdn.pixabay.com/photo/2017/07/31/23/56/lavender-2562117_640.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>



<div class="container">
    <h1 class="mb-4 ">Your Blogs</h1>
    
    <div class="mt-3">
        <a class="btn btn-success mb-3" href="{{ route('create.index') }}">Create a new blog</a>
    </div>

    @if (session()->has('created'))
        <div class="alert alert-success">
            {{ session('created') }}
        </div>
    @elseif(session()->has('updated'))
        <div class="alert alert-success">
            {{ session('updated') }}
        </div>
    @elseif(session()->has('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif
    
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <p class="card-text">{{ $blog->content }}</p>
                        <p class="card-text"><small>Created At: {{ $blog->created_at }}</small></p>
                        <p class="card-text"><small>Updated At: {{ $blog->updated_at }}</small></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('edit.index',['blog'=>$blog]) }}" class="btn btn-primary">Edit</a>
                            <div class="mx-2"></div> 
                            <form action="{{ route('delete.index',['blog'=>$blog]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection
