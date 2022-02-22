@extends('backend.muster')
@section('count')


<div class="row container card">
    <div class="card-header">
        <button class="btn btn-success" action="">Back</button>
        <div class="card-body">
 <form action="{{url('insertdata')}}" method="post" enctype="multipart/form-data">
     @csrf
  <div class="form-group">

    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"placeholder="name" >
   
  </div >
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  

  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="subject">
    
  </div>
  <div class="form-group">
    <label for="img">photo</label>
    <input type="file" class="form-control" name="img" placeholder="image">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

        </div>

    </div>
</div>




@endsection
