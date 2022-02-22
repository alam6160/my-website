@extends('backend.muster')
@section('count1')



<div>
  <a href="{{url('insert')}}" class="btn btn-primary m-2"> Add Data</a>
<table class="table table-bordered pt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($insert as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->subject}}</td>
      <td>
        <img src="{{ asset('upload/image/' . $data->img) }}"  width="100px" height="100px" alt="image">
      </td>
      <td>

      <a href="{{url('backend.')}}"class="btn btn-primary" id='view'  value='view'>View</a>
      <a href="{{ url('/editdata/',$data->id)}}"class="btn btn-success"  >Edit</a>
      <a href="{{url('/deletedata/',$data->id)}}"class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" id='Delete' value='delete'>Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>



@endsection
