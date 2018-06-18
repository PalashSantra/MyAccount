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
                @if (\Session::has('success'))
                    <div class="alert alert-success col-md-12 tile" id="success-alert">
                        <button id="success-close" type="button" class="close" data-dismiss="alert">x</button>
                        <p><strong>Success! </strong> {{ \Session::get('success') }}</p>
                    </div>
               @endif
            <div class="col-md-12">
                <div class="tile">
                <h3 class="tile-title">Striped Table</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($loanborrowers as $borrower)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                <img src="{{url('/').$borrower['image']}}" height="28px" width="20px">
                                </td>
                                <td>{{$borrower['name']}}</td>
                                <td>{{$borrower['email']}}</td>
                                <td>{{$borrower['mobile_no']}}</td>
                                <td>
                                    <a href="{{action('LoanborrowersController@edit', $borrower['id'])}}" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$loanborrowers->links()}}
                </div>
            </div>
          </div>
</main>
@endsection
@section('js-section')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(function(){
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                $("#success-alert").slideUp(500);
            });
        });
    </script>
@endsection