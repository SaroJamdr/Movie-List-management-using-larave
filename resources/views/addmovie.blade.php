@include('header')

<h2 class="text-center">Add Movie</h2>

<div class="cotainer">
  <div class="row">
    <div class="col-5 mx-auto card p-4">
      <form action="{{route('mv.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1">
          @error('name')
          <div style="color: red">{{$message}}</div>  
          @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Director</label>
          <input type="text" name="director" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleCheck1">Actor</label>
          <input type="text" name="actor" class="form-control" id="exampleCheck1">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleCheck1">Release Date</label>
          <input type="date" name="release" class="form-control" id="exampleCheck1">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleCheck1">Language</label>
          <input type="text" value="{{old('language')}}" name="language" class="form-control" id="exampleCheck1">
          @error('name')
          <div style="color: red">{{$message}}</div>  
          @enderror
        </div>

        

        <div class="mb-3">
          <label class="form-label" for="disabledTextInput">Upload Image</label>
          <input type="file" value="{{old('image')}}" name="image" class="form-control" id="disabledTextInput">
          @error('image')
          <div style="color: red">{{$message}}</div>  
          @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
</div>



@include('footer')