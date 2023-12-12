@include('header')

      <div class="container-fluid">
        <h2 class="text-center">Movie List</h2>

     
       
    
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col"Sn</th>
                <th scope="col">Movie Name</th>
                <th scope="col">Image</th>
                <th scope="col">Director</th>
                <th scope="col">Actor</th>
                <th scope="col">Release Date</th>
                <th scope="col">Language</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            ?>
    
            @foreach ($movies as $mv)
            <tr class="">
                <td scope="row">{{$i++}}</td>
                <td>{{$mv->name}}</td>
                <td>
                    <img src="{{asset('public/images/'.$mv->image)}}" height="50px" width="50px" alt="">
                  </td>
                <td>{{$mv->director}}</td>
                <td>{{$mv->actor}}</td>
                <td>{{$mv->release}}</td>
                <td>{{$mv->language}}</td>
                <td>



                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$mv->id}}"><i class="bi bi-pencil-square"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$mv->id}}"" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
                
                        <div class="modal-body">
                          <form action="{{route('mv.update',$mv->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Name</label>
                              <input type="text" name="name" value="{{$mv->name}}" class="form-control" id="exampleInputEmail1">
                            </div>
                
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Director</label>
                              <input type="text" name="director" value="{{$mv->director}}" class="form-control" id="exampleInputPassword1">
                            </div>
                
                            <div class="mb-3">
                              <label class="form-label" for="exampleCheck1">Actor</label>
                              <input type="text" name="actor" value="{{$mv->actor}}" class="form-control" id="exampleCheck1">
                            </div>
                
                            <div class="mb-3">
                              <label class="form-label" for="exampleCheck1">Release Date</label>
                              <input type="date" name="release" value="{{$mv->release}}" class="form-control" id="exampleCheck1">
                            </div>

                            <div class="mb-3">
                              <label class="form-label" for="exampleCheck1">Language</label>
                              <input type="text" name="language" value="{{$mv->language}}" class="form-control" id="exampleCheck1">
                            </div>
                
                   
                            <div class="mb-3">
                              <input type="hidden" name="oldimage" value="{{$mv->image}}">
                              <img src="{{asset('images/'.$mv->image)}}" height="50px" alt="">
                            </div>
                
                            <div class="mb-3">
                              <label class="form-label" for="disabledTextInput">Upload New Image</label>
                              <input type="file" name="image" value="$mv->image" class="form-control" id="disabledTextInput">
                            </div>
                
                            <button class="btn btn-primary btn-sm">Submit</button>
                          </form>
                
                        </div>
                       
                      </div>
                    </div>
                  </div>
                
                  <a href="{{route('mv.delete', $mv->id)}}" class="btn btn-primary"><i class="bi bi-trash"></i></a>
                </td>

                
              </tr>
              @endforeach
         </tbody>
     </table>



     
 </div>
</div>

@include('footer')