@extends('layouts.layout')
@push('after-styles')
<style>
    #example2_length{
    text-align: left;
  }
  @media screen and (max-width: 767px){
    #example2_filter{
      text-align: left;
    }
    select[name = 'example2_length']{
      margin-left: 15px;
    } 
  }
  td.np ,td.nt, td.nv{
      text-align:right;
  }
  td.nr{
      text-align:center;
  }
</style>
@endpush
@section('content')
    <div overflow="hidden">
        <section class="content">

            <div class="container-fluid" style="background-color: #F4F6F9!important;">
                <div class="card card-outline card-primary" style="background-color: #F1FDFD;">
                    <div class="card-header p-1">                        
                        <h2 class="card-title pt-1 pl-1">
                        <i class="fas fa-users"></i>&nbsp;KPI Setup
                            <small class="text-muted">All KPI Setup</small>
                        </h2>
                    </div>
                    <div class="create_div pl-2 pr-2" id="create_div">
                                    <form method="POST" action="/submit" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="col-4"><label id="" for="">KPI Name</label></div>
                                            <div class="col-8"><input name="create_kpi_name" type="text" class="" id="create_kpi_name" value=""></div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4"><label id="" for="">Full Point</label></div>
                                            <div class="col-8"><input name="create_full_point" type="text" class="" id="create_full_point" value=""></div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4"><label id="" for="">Target Value</label></div>
                                            <div class="col-8"><input name="create_target_value" type="text" class="" id="create_target_value" value=""></div>
                                            
                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-4"><label id="" for="">Apply For</label></div>
                                            <div class="col-8">
                                                <select class="select2" name="create_select" id="create_select_id" style="width:70%;background-color: #ECF0F1;">
                                                    <option disabled selected value="0">Select an option</option>  
                                                    <option id="1"  value="MSO">MSO</option>
                                                    <option id="2"  value="Lady MSO">Lady MSO</option>
                                                    <option id="3"  value="FM">FM</option>
                                                    <option id="4"  value="RSM">RSM</option>
                                                </select>
                                            </div>
                                                
                                        </div>
                                        <br>
                                        <div class="form-group row mb-0">
                                            <div class="col-6">
                                                <!-- <a href="/dashboard" type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0" role="button">Submit</a> -->
                                                <button type="submit" class="btn btn-success mt-2  btn-block rounded-0 submit" id="submit">
                                                    Save
                                                </button>
                                            </div>
                                            
                                            <div class="col-6">
                                                <!-- <a href="/dashboard" type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0" role="button">Submit</a> -->
                                                <button type="create_cancle" class="btn btn-danger mt-2  btn-block rounded-0 create_cancle" id="create_cancle" >
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            

                            <div class="edit_div hidden  pl-2 pr-2" id="edit_div">
                                <form method="Post" action="/update-kpi" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-4"><label id="" for="">Serial No.</label></div>
                                        <div class="col-8" name="id_div"><label name="id_label" id="id_label" for="id">No.</label></div>
                                        <div class="col-8"><input name="id" type="hidden" class="" id="id" value=""></div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4"><label id="" for="">KPI Name</label></div>
                                        <div class="col-8"><input name="kpi_name" type="text" class="" id="kpi_name" value=""></div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4"><label id="" for="">Full Point</label></div>
                                        <div class="col-8"><input name="full_point" type="text" class="" id="full_point" value=""></div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4"><label id="" for="">Target Value</label></div>
                                        <div class="col-8"><input name="target_value" type="text" class="" id="target_value" value=""></div>
                                        
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                        <div class="col-4"><label id="" for="">Apply For</label></div>
                                        <div class="col-8">
                                            <select class="select2" name="select" id="select_id" style="width:50%;background-color: #ECF0F1;">
                                                <option disabled selected value="0">Select an option</option>  
                                                <option id="1"  value="MSO">MSO</option>
                                                <option id="2"  value="Lady MSO">Lady MSO</option>
                                                <option id="3"  value="FM">FM</option>
                                                <option id="4"  value="RSM">RSM</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <br>
                                    <div class="form-group row mb-0">
                                        
                                        <div class="col-6" id="up_div">
                                            <button type="submit" class="btn btn-success mt-2  btn-block rounded-0 submit" id="update" >
                                                Update
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <!-- <a href="/dashboard" type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0" role="button">Submit</a> -->
                                            <button type="cancle" class="btn btn-danger mt-2 btn-block rounded-0" id="cancle" >
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                            </div>


                    
                    <div class="card-body p-2">
                        <table id="example2" class="table table-sm table-condensed table-striped table-bordered table-hover table-responsive">
                        <thead>
                                        <tr>
                                        <th>Sl no.</th>
                                        <th>KPI Name</th>
                                        <th>Full points</th>
                                        <th>Achieved points</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kpi as $k)
                                            <tr>
                                            <td class="nr">{{ $k -> id }}</td>
                                            <td class="nm">{{ $k -> Name }}</td>
                                            <td class="np">{{ $k -> Full_point }}</td>
                                            <td class="nt">{{ $k -> Target_value }}</td>
                                            <td class="nv">{{ $k -> Type }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm btn-block rounded-0 edit" id="edit">
                                                Edit
                                                </button>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                    
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
    @push('after-scripts')
    <script type="text/javascript">
    $('.select2').select2();
    
        $(".edit").click(function() {
            $('#edit_div').removeClass("hidden");
            $("#create_div").hide()
            
            var id = $(this).closest("tr").find(".nr").text();
            $("#id").val(id);
            $("#id_label").html(id);
            var name = $(this).closest("tr").find(".nm").text();
            $("#kpi_name").val(name);
            var point = $(this).closest("tr").find(".np").text();
            $("#full_point").val(point);
            var target = $(this).closest("tr").find(".nt").text();
            $("#target_value").val(target);
            var person = $(this).closest("tr").find(".nv").text();
            $("#select_id").val(person);
            
        });

        $(".cancle").click(function() {
            $('#edit_div').hide();
            $("#create_div").show();
             
        });

        $(".create_cancle").click(function ClearFields(){
                document.getElementById("create_kpi_name").value = "";
                document.getElementById("create_full_point").value = "";
                document.getElementById("create_target_value").value = "";
                document.getElementById("create_select").value = "0";
        });
    </script>
    @endpush

