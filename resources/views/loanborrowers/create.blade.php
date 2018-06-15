@extends('layouts.app')
@extends('layouts.navbar')


@section('content')
<main class="app-content">
        <div class="app-title">
                <div>
                  <h1><i class="fa fa-edit"></i> Form Components</h1>
                  <p>Bootstrap default form components</p>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                  <li class="breadcrumb-item">Forms</li>
                  <li class="breadcrumb-item"><a href="#">Form Components</a></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="tile">
                    <form method="post" action="{{url('loanborrower')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      <div class="col-lg-8">
                        
                                <div class="form-group">
                                        <label for="Name">Borrower Name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                            <label for="Email">Email address</label>
                                            <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">Mobile No</label>
                                        <input class="form-control" id="mobile_no" name="mobile_no" type="text" placeholder="Enter Name">
                                    </div>
                        
                      </div>
                      <div class="col-lg-4" >
                        <div class="" style="margin-left: 30%; margin-right:10%; margin-top:10%;margin-bottom:10%; border: 1px solid; width: 160px; height: 200px">
                            <img id="preview" src="" alt="your image" >
                        </div>
                        <div class="" style="margin-left: 32%;">
                            <input type="file" name="picture" id="picture">
                        </div>
                      </div>
                      <div class="col-lg-12">
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                      </div>
                    </div>
                    <div class="tile-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
  </main>
  @endsection

  @section('js-section')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#preview").change(function() {
            readURL(this);
        });
    </script>
  @endsection