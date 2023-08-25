<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Blog</title>
    
</head>
<body class="bg-secondary-subtle" >
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand m-2" href="{{ route('home.index') }}">Blog Addicts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }} ">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.index') }}">Create a blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog.index') }}">Blogs</a>
              </li>
            </ul>
        </div>
    </nav>
    
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('content')
</body>
</html>