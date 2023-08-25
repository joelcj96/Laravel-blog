@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('https://media.istockphoto.com/id/865135920/photo/concrete-texture.webp?b=1&s=612x612&w=0&k=20&c=ERgXmlCV1rfsjwKwTn0j2rLPG7Vra8z2Vb36aeDmSDQ= '); 
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>





<div class="container mt-3">
    <h3 class="mb-4">Create a Blog</h3>
  
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
            <form action="{{ route('post.index') }}" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" placeholder="Content">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
    
@endsection
