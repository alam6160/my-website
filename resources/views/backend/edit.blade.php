@extends('backend.muster')
@section('count2')
    <div class="row container card">
        <div class="card-header">
            <button class="btn btn-success" action="">Back</button>
            <div class="card-body">
                <form action="{{ '' }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{ '$editdata->name' }}" name="name"
                            placeholder="name">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="{{ '$editdata->email' }}" name="email"
                            placeholder="Enter email">


                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" value="{{ '$editdata->subject' }}" name="subject"
                            placeholder="subject">

                    </div>
                    <div class="form-group">
                        <label for="img">photo</label>
                        <input type="file" class="form-control" name="img" placeholder="image">
                        <img src="" width="100px" height="100px" alt="image">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>
    </div>
@endsection
