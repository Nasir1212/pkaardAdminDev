{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<div class="card">


     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

        
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>#</th>
                <th>Card ID</th>
                <th>Invoice</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone </th>
                <th>Reference  </th>
                <th>Date of Birth </th>
                <th>Profession</th> 
                <th>Mediam</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Division</th>
                <th>District</th>
               
                <th>cda division</th>
                <th>cda district</th>
                <th>cda upzilla</th>
                <th>cda road no</th>
                <th>cda house no</th>
                <th>cda apartment no</th>
                <th>cda address details</th>
                <th>Stutus</th>
                <th style="width:3rem">Action</th>
              </tr>
          </thead>
          <tbody>
       
          @php
          $i = 1
          @endphp
        @foreach ($data as $fdata)

        {{-- <p>This is user {{ $user->id }}</p> --}}
        <tr>
          <td>{{$i++}}</td>
            <td>1509002{{$fdata->card_id}}</td>
            <td>pw{{$fdata->invoice_number}}</td>
         
            <td>{{$fdata->full_name}}</td>
            <td>{{$fdata->email}}</td>
            <td>{{$fdata->phone_number}}</td>
            <td>{{$fdata->reference_code}}</td>
            <td>{{$fdata->date_of_birth}}</td>
            <td>{{$fdata->profession}}</td>
            <td>{{$fdata->mediam}}</td>
            <td>{{$fdata->gender}}</td>
            <td>{{$fdata->nationality}}</td>
            <td>{{$fdata->division}}</td>
            <td>{{$fdata->district}}</td>
       
            <td>{{$fdata->cda_division}}</td>
            <td>{{$fdata->cda_district}}</td>
            <td>{{$fdata->cda_upzilla}}</td>
            <td>{{$fdata->cda_road_no}}</td>
            <td>{{$fdata->cda_house_no}}</td>
            <td>{{$fdata->cda_apartment_no}}</td>
            <td>{{$fdata->cda_address_details}}</td>
            <td></td>
            <td style="width:20rem">
              <p>
              <a class="btn btn-warning btn-outline-danger font-weight-bold">
                <span id="icon_on" class="material-symbols-outlined   cursor-pointer" style="display: block; cursor: pointer !important;"> visibility  </span>
              </a>
              <a class="btn btn-warning btn-outline-danger font-weight-bold">
                <span class="material-symbols-outlined"  style="display: block; cursor: pointer !important;">
                  picture_as_pdf
                  </span>
                </a>

                <a  class="btn btn-warning btn-outline-danger font-weight-bold" onclick="showModel('{{$fdata->id}}')">
                  <span class="material-symbols-outlined">
                    drive_file_rename_outline
                    </span>
                  </a>
              </p>
            </td>



        </tr>


        @endforeach
        
          </tbody>
          <tfoot>
            
            <tr>
              <th>#</th>
              <th>Card ID</th>
              <th>Invoice</th>
              <th>Name</th>
              <th>Email</th>
              <th>phone </th>
              <th>Reference  </th>
              <th>Date of Birth </th>
              <th>Profession</th> 
              <th>Mediam</th>
              <th>Gender</th>
              <th>Nationality</th>
              <th>Division</th>
              <th>District</th>
             
              <th>cda division</th>
              <th>cda district</th>
              <th>cda upzilla</th>
              <th>cda road no</th>
              <th>cda house no</th>
              <th>cda apartment no</th>
              <th>cda address details</th>
              <th>Stutus</th>
              <th style="width:3rem">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  {{-- <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script> --}}
  <script>

$(function () {
    $("#example1").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": true,   order: [[1, 'desc' ]], "aLengthMenu": [[100, 250, 500,1000, -1], [100, 250, 500 ,1000, "All"]],
    
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
  

  function showModel(id){

    console.log(id)
    $('#myModal').modal('show')
  }
  </script>

@endsection