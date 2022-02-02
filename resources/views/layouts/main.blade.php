<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   <header>
      <div class="container">
         <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <ul class="nav">
                  <li class="nav-item">
                     <a href="{{ route('main.index') }}" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('post.index') }}" class="nav-link">Posts</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('about.index') }}" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('contacts.index') }}" class="nav-link">Contacts</a>
                  </li>
                  @can('view', auth()->user())
                  <li>
                     <a href="{{ route('admin.post.index') }}" class="nav-link">Админка для наполнения</a>
                  </li>
                  @endcan
                </ul>
            </nav>
         </div>
      </div>
   </header>
   <div class="container">
      <div class="row">
         @yield('content')
      </div>
   </div>
</body>
</html>