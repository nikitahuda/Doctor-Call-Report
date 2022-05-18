@extends('layouts.layout')

@push('before-styles')
<style>
  #example_length{
    text-align: left;
  }
  @media screen and (max-width: 767px){
    #example_filter{
      text-align: left;
    }
    select[name = 'example_length']{
      margin-left: 15px;
    } 
  }

  a{
    font-size: 1rem !important;
  }
  .table td{
    padding:0;
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
                <table id="example" class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($doctor as $d)
                        <tr>
                          <td >
                            <a href="/{{ $d -> doc_name }}/detailgift" class="btn btn-secondary btn-block btn-light text-left text-md-center" style="background-color:transparent; border-color:transparent;" role="button">
                              {{ Str::title($d -> doc_name) }}
                              <i class="fas fa-chevron-left fa-flip-horizontal" style="position: absolute; right: 20px; padding: 5px;"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
                </section>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     @endsection

    @push('after-scripts')
      <!-- DataTables  & Plugins -->
      <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  
    
      <script>
        
      
        $('#example').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      </script>
    @endpush

   