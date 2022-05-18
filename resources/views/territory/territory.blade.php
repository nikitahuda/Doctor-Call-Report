@extends('layouts.layout')

@push('before-styles')
    <style>
    section>button>i{
        right: 10x;
        padding-top: 5x;
    }
    </style>
@endpush


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="background-color:#F1FDFD;">
        <div class="card-body">
          <form method="" action="">
            <section class="">
              @foreach($territory as $t)
                <a href="/{{$t -> area_name}}/doctor" class="btn btn-lg btn-block text-left text-md-center rounded-0" role="button">
                {{$t -> area_name}}
                  <i class="fas fa-chevron-left fa-flip-horizontal" style="position: absolute; right: 10px; padding: 5px;"></i>
                </a>
                <hr>
              @endforeach
            </section>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
