@extends('backend.muster')
@section('content')

@if(Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show container" role="alert">
        
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
           </button>
           <strong>{{Session::get('success')}}</strong>
            </div>
            @endif

<div class="container border border-primary">
<h1 class="p-3"> Contract Form</h1>
            <form action="{{ url('send')}}" method="post" role="form" >
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div ><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
@endsection