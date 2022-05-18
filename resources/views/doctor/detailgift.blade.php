@extends('layouts.layout')
@push('after-styles')

  <style>

  input[type = "number"]{
    padding-top:5px;
    height: 95%;

  }
  input[type = "text"]{
    text-align: left;

  }

    .btn {
      border: transparent;
    }

    .btn-primary {
      /* background-color: #2d7d9d;
      border-color: #2d7d9d; */
    }

    .btn-danger {
      background-color: transparent !important;
      border-color: transparent !important;
    }

    .btn-primary:hover {
      background-color: #2d7d9d !important;
      border-color: #2d7d9d !important;
    }

    .btn:active {
      background: gray 900;
    }

    .btn:focus {
      outline: none;
      border: gray 900;
    }

    h3 {
      color: white;
    }

    .form-signin-heading {
      color: #fff;
      text-align: center;
      text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    }

    .underline {
      color: transparent !important;
    }

    .btn-label {
      background-color: #1695a5;
      border-color: transparent;
      color: white;
    }

    .btn-label:hover {
      background-color: #1695a5 !important;
      border-color: transparent !important;
      color:white;
    }

    .select2-selection {
      height: 40px !important;
    }

    label {
      display: block;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      width: 95%;
      padding-top: 2px;
      font-weight:500 !important;
    }

    .select2-results__options {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .select2-container--default .select2-results__option[aria-disabled=true] {
      display: none;
    }

    .grid-container {
      display: grid;
      grid-template-columns: 50% 40% 10%;
      padding: 10px;
    }


 
  </style>

@endpush
@section('content')

          
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card" style="background-color: #F1FDFD">
          <div class="card-body">
            <form method="POST" action="/submit" enctype="multipart/form-data">
              @csrf
              <div class="row mx-auto">
                <div class="p-1" style="background-color:rgb(255, 254, 225); border:1px solid #ccc; ">

                  
                    @foreach($doctor as $d)
                    <div class="row">
                      <div class="col-6">
                       <input class="text-shadow" type="hidden" value="{{$d->doc_id}}" name="docid" id="docid">Doctor Id : {{$d->doc_id}}</input>
                      </div>
                      <div class="col-6 pl-4">
                        <input class="text-shadow" type="hidden" value="{{$d->area_name}}" name="territoryname" id="territoryname">TR Code : {{$d->area_name}}</input>
                      </div>
                    </div>
                                                           
                  <h5 class="pt-2">
                   
                    <input class="text-shadow" type="hidden" value="{{$d->doc_name}}" name="docname" id="docname"> <strong> {{ Str::title($d->doc_name)}}</strong></input>
                    
                  </h5>
                    
                    <input class="text-shadow" type="hidden" value="{{$d->specialty}}" name="specialty" id="specialty">Speciality : {{$d->specialty}}|{{$d->degree}}</input>
                   
                  <p>
                  
                    <input class="text-shadow" type="hidden" value="{{$d->address}}" name="address" id="address">Address : {{ Str::title($d->address)}}</input>
                    @endforeach
                  </p>

                </div>
                <!-- <div class="col-6" style="padding-top=10x">
                    <button type="button" class="btn btn-primary btn-block" >Major Product</button>
                  </div> -->
              </div>
              <hr>

              <!-- <p>
                  Network Timeout. Please check your internet connection.
                </p> -->

              <button type="button" class="btn btn-lg btn-label btn-block rounded-0" onclick="toggle1()">Sample</button>

              <!-- <a href="/product" class="btn btn-lg btn-label btn-block rounded-0" role="button">
                  Sample
                </a> -->


              <section id="sample" style="display:none">
                <div class="grid-container info" name="samplediv">

                </div>

                <select id="sample_id" name="selectSample" class=" select2" style="width:100%;background-color: #ECF0F1;">
                  <option disabled selected value="0">Select an option</option>

                  @foreach($sample as $s)
                  <option id="{{$s->name}}" value="{{$s->name}}">{{$s->name}}</option>
                  @endforeach
                </select>



              </section>
              <hr>

              <button type="button" class="btn btn-lg btn-label btn-block rounded-0" onclick="toggle2()">Gift</button>

              <!-- <a href="/gift" class="btn btn-lg btn-label btn-block rounded-0" role="button">
                  Gift
                </a> -->
              <!-- <br> -->
              <section id="gift" style="display:none">
                <div class="grid-container giftinfo" name="giftdiv">
                </div>
                <select class="select2" name="selectGift" id="gift_id" style="width:100%;background-color: #ECF0F1;">

                  <option disabled selected value="0">Select an option</option>
                  @foreach($gift as $g)
                  <option id="{{$g -> gift_name}}" value="{{$g -> gift_name}}">{{$g -> gift_name}}</option>
                  @endforeach
                </select>

              </section>
              <hr>

              <button type="button" class="btn btn-lg btn-label btn-block rounded-0" onclick="toggle3()">PPM</button>

              <!-- <a href="/ppm" class="btn btn-lg btn-label btn-block rounded-0" role="button">
                  PPM
                  </a> -->
              <!-- <br> -->

              <div class="grid-container ppminfo" name="ppmdiv">
              </div>

              <section id="ppm" style="display:none">
                <select class="select2" name="selectPpm" id="ppm_id" style="width:100%;background-color: #ECF0F1;">
                  <option disabled selected value="0">Select an option</option>
                  @foreach($ppm as $p)
                  <option id="{{$p -> gift_name}}" value="{{$p -> gift_name}}">{{$p -> gift_name}}</option>
                  @endforeach
                </select>

              </section>

              <hr>
              <p>Visited With :</p>
              <div class="d-flex justify-content-between">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="inlineCheckbox[]" value="Self" oninvalid="this.setCustomValidity('Please select at least one checkbox.')" oninput="this.setCustomValidity('')" required>

                  <label class="form-check-label1" for="inlineCheckbox1">Self</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="inlineCheckbox[]" value="MSO" required>

                  <label class="form-check-labe2" for="inlineCheckbox2">MSO</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="inlineCheckbox[]" value="FM/TL" required>

                  <label class="form-check-label3" for="inlineCheckbox3">FM/TL</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="inlineCheckbox[]" value="RSM" required>

                  <label class="form-check-label4" for="inlineCheckbox4">RSM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="inlineCheckbox[]" value="NSM" required>

                  <label class="form-check-label5" for="inlineCheckbox5">NSM</label>
                </div>
              </div>
              <br>
              <p>Feedback :</p>

              <div class="form-group row">
                <div class="col-md-12">
                  <input class="form-control bg-light" type="text" id="feedback" name="feedback" placeholder="Feedback/note/value of work">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-12">
                  <button type="Button" class="btn btn-label mt-2 btn-lg btn-block rounded-0 find_btn" id="find_btn">
                    Confirm Location
                  </button>
                </div>
                <div class="col-6 lat" name="lat">
                  <br>
                  <input name="latlabel" type="text" class="form-control" id="lat_label" placeholder="Latitude" disabled oninvalid="this.setCustomValidity('Please Confirm Location.')" oninput="this.setCustomValidity('')" required>
                </div>
                <div class="col-6 long" name="long">
                  <br>
                  <input name="longlabel" type="text" id="long_label" placeholder="Latitude" class="form-control" disabled>
                </div>
              </div>

              <hr>
              <div class="form-group row mb-0">
                <div class="col-12">
                  <!-- <a href="/dashboard" type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0" role="button">Submit</a> -->
                  <button type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0 submit" id="submit" oninput="return(validate());">
                    Submit
                  </button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @push('after-scripts')

  <script type="text/javascript">
    jQuery('.select2').select2({});

    jQuery('select[name="selectSample"]').on('change', function() {
    
      var c_id = jQuery(this).val();
   
      var id = 1;
      $('div[name="samplediv"]').append(' <label  name="" id="' + c_id + '" for="' + c_id + '">' + c_id + '</label> ');
      $('div[name="samplediv"]').append(' <input name="samplelabel[]" type="hidden" class="form-control" id="' + c_id + '" value="' + c_id + '">');


      $('div[name="samplediv"]').append(' <input name="sampleinp[]" type="number" class="form-control" id="' + c_id + '">');
      $('div[name="samplediv"]').append(' <button type="button"class="btn btn-danger delete" value="' + c_id + '"><i class="fas fa-minus-circle text-danger"></i></button>');

      $('option[value="' + c_id + '"]').attr('disabled', 'disabled');

      // $('select[name="selectSample"]').select2();
      // $('.select2-selection__rendered').val("asdas");
      $('select[name="selectSample"]').select2({
        placeholder: {
          id: c_id, // the value of the option
          text: 'Select an option'
        }
      });
    });

    $('.info').on('click', '.delete', function() {

      var c_id = jQuery(this).val();
      $('button[value="' + c_id + '"]').remove();
      $('input[id="' + c_id + '"]').remove();
      $('label[id="' + c_id + '"]').remove();
      $('option[value="' + c_id + '"]').prop("disabled", false);
      $('select[name="selectSample"]').select2();
      $('select[name="selectSample"]').select2('destroy').val("0").select2();


    });


    jQuery('select[name="selectGift"]').on('change', function() {
      var val2 = jQuery(this).val();
      //alert(val2);

      $('div[name="giftdiv"]').append(' <label id="' + val2 + '" for="' + val2 + '">' + val2 + '</label> ');
      $('div[name="samplediv"]').append(' <input name="giftlabel[]" type="hidden" class="form-control" id="' + val2 + '" value="' + val2 + '">');


      $('div[name="giftdiv"]').append(' <input name="giftinp[]" type="number" class="form-control" id="' + val2 + '" placeholder="">');

      $('div[name="giftdiv"]').append(' <button type="button" class="btn btn-danger giftdelete" value="' + val2 + '"><i class="fas fa-minus-circle text-danger"></i></button>');

      $('option[value="' + val2 + '"]').attr('disabled', 'disabled');
      $('select[name="selectGift"]').select2({
        placeholder: {
          id: val2, // the value of the option
          text: 'Select an option'
        }
      });

    });

    $('.giftinfo').on('click', '.giftdelete', function() {
      var val2 = jQuery(this).val();
      $('button[value="' + val2 + '"]').remove();
      $('input[id="' + val2 + '"]').remove();
      $('label[id="' + val2 + '"]').remove();
      $('option[value="' + val2 + '"]').prop("disabled", false);
      $('select[name="selectGift"]').select2();
      $('select[name="selectGift"]').select2('destroy').val("0").select2();
    });

    jQuery('select[name="selectPpm"]').on('change', function() {
      var v = jQuery(this).val();


      $('div[name="ppmdiv"]').append(' <label id="' + v + '" for="' + v + '">' + v + '</label> ');
      $('div[name="samplediv"]').append(' <input name="ppmlabel[]" type="hidden" class="form-control" id="' + v + '" value="' + v + '">');

      $('div[name="ppmdiv"]').append(' <input name="ppminp[]" type="number" class="form-control" id="' + v + '" >');
      $('div[name="ppmdiv"]').append(' <button type="button" class="btn btn-danger ppmdelete" value="' + v + '"><i class="fas fa-minus-circle text-danger"></i></button>');


      $('option[value="' + v + '"]').attr('disabled', 'disabled');
      $('select[name="selectPpm"]').select2({
        placeholder: {
          id: v, // the value of the option
          text: 'Select an option'
        }
      });

    });

    $('.ppminfo').on('click', '.ppmdelete', function() {

      var val2 = jQuery(this).val();
      $('button[value="' + val2 + '"]').remove();
      $('input[id="' + val2 + '"]').remove();
      $('label[id="' + val2 + '"]').remove();
      $('option[value="' + val2 + '"]').prop("disabled", false);
      $('select[name="selectPpm"]').select2();
      $('select[name="selectPpm"]').select2('destroy').val("0").select2();
    });
  </script>
  <script>
    var toggled = true;

    function toggle1() {
      if (toggled) {
        toggled = false;
        document.getElementById("sample").style.display = "block";
        return;
      }
      if (!toggled) {
        toggled = true;
        document.getElementById("sample").style.display = "none";
        return;
      }
    }
    var toggled2 = true;

    function toggle2() {
      if (toggled2) {
        toggled2 = false;
        document.getElementById("gift").style.display = "block";
        return;
      }
      if (!toggled2) {
        toggled2 = true;
        document.getElementById("gift").style.display = "none";
        return;
      }
    }
    var toggled3 = true;

    function toggle3() {
      if (toggled3) {
        toggled3 = false;
        document.getElementById("ppm").style.display = "block";
        return;
      }
      if (!toggled3) {
        toggled3 = true;
        document.getElementById("ppm").style.display = "none";
        return;
      }
    }
  </script>
  <script>
    $cbx_group = $("input:checkbox[id^='inlineCheckbox']");
    $cbx_group.on("click", function() {
      if ($cbx_group.is(":checked")) {
        // checkboxes become unrequired as long as one is checked
        $cbx_group.prop("required", false).each(function() {
          this.setCustomValidity("");
        });
      } else {
        // require checkboxes and set custom validation error message
        $cbx_group.prop("required", true).each(function() {
          this.setCustomValidity("Please select at least one checkbox.");
        });
      }
    });
  </script>

  <script>
    $('.find_btn').one('click', function() {
      navigator.geolocation.getCurrentPosition(function(position) {
          // console.log(position.coords.latitude)
          var la = position.coords.latitude;
          var lo = position.coords.longitude;
          $('input[name="latlabel"]').val(la);
          $('input[name="longlabel"]').val(lo);
        },
        function(error) {
          console.log("The Locator was denied. :(")
        })
    });
  </script>

@endpush