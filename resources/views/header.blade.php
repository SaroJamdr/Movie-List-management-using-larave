<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<title>Yourt'z Movies</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 20px">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Your'z Movies</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" margin:auto">
            
              <li class="nav-item">
                <div class="d-grid">
                  <a href="{{route('list.mv')}}" class="btn btn-light rounded-0">Movie List</a>
              </div>
              </li>
              <li class="nav-item">
                  <a href="{{route('add.mv')}}" class="btn btn-light rounded-0">Add Movie</a>
              </div>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      @include('message')