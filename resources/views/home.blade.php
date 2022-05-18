@extends('layouts.layout')
@push('after-styles')
<style>
    .icon{
        color: #2d7d9d;
      }
</style>
@endpush
@section('content')
<div overflow="hidden">
        <section class="content">

            <div class="container-fluid" style="background-color: #F4F6F9!important;">
                <div class="card card-outline card-primary" style="background-color: #F1FDFD;">                      
                                
              <div class="form-signin-heading">
                <a href="/territory" class="btn btn-lg btn-block rounded-0" role="button">
                  <i class="fas fa-user-md fa-5x icon"></i><h5 class="p-1" style="color:#2d7d9d">Doctor Visit</h5>
                </a>
              </div>
              <div class="form-signin-heading">
                <a href="/add_doctor" class="btn btn-lg btn-block rounded-0" role="button">
                  <i class="fas fa-file-medical icon fa-5x"></i><h5 class="p-1" style="color:#2d7d9d">New Doctor</h5>
                </a>
              </div>
              

                </div>
            </div>
        </section>
    </div>

@endsection
