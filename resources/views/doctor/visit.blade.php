@extends('layouts.layout')

@push('after-styles')

    <style>
      .fas{
        color: white;
      }
    </style>

    @endpush

    @section('navheadercontent')
    <div class="container-fluid">
    <a class="navbar-brand form-signin-heading mx-auto" href="#"><h4>Doctor Call Report (DCR)</h4></a>
  </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="p-1 d-flex justify-content-center form-signin-heading">
          <a href="/territory" class="btn btn-lg btn-block rounded-0" role="button">
            <i class="fas fa-user-md fa-7x"></i><h3 class="p-1">Doctor Visit</h3>
          </a>
        </div>
      </div>
    <br>
    <div class="container-fluid">
        <div class="p-1 d-flex justify-content-center form-signin-heading">
        <a href="/8" class="btn btn-lg btn-block rounded-0" role="button">
          <i class="fas fa-file-medical fa-7x"></i><h3 class="p-1">Add Doctor</h3>
        </a>
        </div>
      </div>
@endsection
@section('navfootercontent')
<ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/dashboard"><i class="fas fa-key fa-lg"></i></a>
              </li>
          </ul>

          <ul class="navbar-nav mx-auto">
                <li class="nav-item dropup active">
                    <a class="nav-link" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars fa-lg"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown10">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
              </li>
          </ul>
@endsection