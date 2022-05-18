@extends('layouts.layout')

@push('before-styles')
    <style>
      
    </style>
@endpush


@section('content')
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color:#F1FDFD;">
                        <div class="card-body">
                            <form method="POST" action="/submitdoctor">
@csrf
                                <!-- <div class="row mx-auto">
                                    <div class="col-6">
                                        <p><strong>Market:</strong>DEMO|DEMO</p>
                                    </div>
                                </div> -->
                                <div class="row mx-auto">
                                    <div class="col-4">
                                        <label for="formGroupExampleInput">Doctor's Id</label>
                                    </div> 
                                    <div class="col-8">                
                                        
                                                    
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                        <input type="text" class="form-control" id="id" name="id" placeholder="id" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row mx-auto">
                                    <div class="col-4">
                                        <label for="formGroupExampleInput">Name</label>
                                    </div> 
                                    <div class="col-8">                
                                        
                                                    
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Speciality</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    
                                                    
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Cardiology">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Degree</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    
                                                    
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Category</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                                    
                                        <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="category" name="category" placeholder="A">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">DOB</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="date" class="form-control" id="dob" name="dob" > 
                                            
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Marriage Day</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="date" class="form-control" id="mar_day" name="mar_day" >
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Mobile</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                                    
                                        <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                                    </div>
                                    </div>
                                <br>
                                <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Designation</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                                    
                                        <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Chamber Address</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                                    
                                        <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Chember Address">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Field1</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="field1" name="field1" placeholder="District">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Field2</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="field2" name="field2" placeholder="Thana">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">3rdparty ID</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="3r_id" name="third_id" placeholder="3rdparty ID">
                                    </div>
                                    </div>
                                <br>
                                    <div class="row mx-auto">
                                    <div class="col-4 text-left">
                                        <label for="formGroupExampleInput">Inhouse ID</label>
                                    </div> 
                                    <div class="col-8" style="padding-top=10x">
                                    <span class="sign" style="position:absolute; left:0px; top: 5px;">:</span>
                                            <input type="text" class="form-control" id="inhouse_id" name="inhouse_id" placeholder="Inhouse ID">
                                    </div>
                                    </div>
                                <br>
                                    

                                    <div class="form-group row mb-0">
                                        <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-2 btn-lg btn-block rounded-0" >Submit</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection

