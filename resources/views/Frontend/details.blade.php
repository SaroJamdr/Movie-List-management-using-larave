<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row">
       <div class="col-8">
          <img src="{{asset('public/images/'.$movie->image)}}" height="400px">
       </div>
        <div class="col-4">
            <span class="h3">Name: </span> <span class="h3">{{$movie->name}}</span><br>
            <span class="h3">Director: </span> <span class="h3">{{$movie->director}}</span><br>
            <span class="h3">Actor: </span> <span class="h3">{{$movie->actor}}</span><br>
            <span class="h3">Release Date: </span> <span class="h3">{{$movie->release}}</span><br>
            <span class="h3">Language: </span> <span class="h3">{{$movie->language}}</span><br>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>