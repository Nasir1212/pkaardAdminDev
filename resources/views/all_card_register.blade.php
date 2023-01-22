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
                <th>Card ID</th>
                <th>Invoice</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone </th>
                <th>Reference  </th>
                <th>Reg: Date</th>
                <th>Division</th>
                <th>District</th>
                <th>Upzilla</th>
                <th>cda division</th>
                <th>cda district</th>
                <th>cda upzilla</th>
                <th>cda road no</th>
                <th>cda house no</th>
                <th>cda apartment no</th>
                <th>cda address details</th>
              </tr>
          </thead>
          <tbody>
       

        @foreach ($data as $fdata)

        {{-- <p>This is user {{ $user->id }}</p> --}}
        <tr>
            <td>{{$fdata->card_id}}</td>
            <td>{{$fdata->invoice_number}}</td>
         
            <td>{{$fdata->full_name}}</td>
            <td>{{$fdata->email}}</td>
            <td>{{$fdata->phone_number}}</td>
            <td>{{$fdata->reference_code}}</td>
            <td>{{$fdata->register_date}}</td>
            <td>{{$fdata->division}}</td>
            <td>{{$fdata->district}}</td>
            <td>{{$fdata->upzilla}}</td>
            <td>{{$fdata->cda_division}}</td>
            <td>{{$fdata->cda_district}}</td>
            <td>{{$fdata->cda_upzilla}}</td>
            <td>{{$fdata->cda_road_no}}</td>
            <td>{{$fdata->cda_house_no}}</td>
            <td>{{$fdata->cda_apartment_no}}</td>
            <td>{{$fdata->cda_address_details}}</td>



        </tr>


        @endforeach
            {{-- <tr> --}}
{{--                 
              
        "cda_address_details" => "343"
        "cda_apartment_no" => "3434"
        "cda_district" => "chittagong"
        "cda_division" => "chittagong"
        "cda_house_no" => "21"
        "cda_road_no" => "323/9"
        "cda_upzilla" => "potiya"
        "cda_village" => "lalrkhil"
        "date_of_birth" => "11/10/2000"
        "district" => "chittagong"
        "division" => "chittagong"
        "email" => "nnasiruddin1996@gmail.com"
        "full_name" => "Nasir Uddin"
        "gender" => "male"
        "nationality" => "bangladeshi"
        "phone_number" => "01890492444"
        "reference_code" => "12121b6"
        "upzilla" => "potiya"
        "register_date" => "11/2/2023"
        "invoice_number" => "12142323" --}}
            {{-- </tr> --}}
          </tbody>
          <tfoot>
            
                <tr>
                    <th>Card ID</th>
                    <th>Invoice</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone </th>
                    <th>Reference  </th>
                    <th>Reg: Date</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Upzilla</th>
                    <th>cda division</th>
                    <th>cda district</th>
                    <th>cda upzilla</th>
                    <th>cda road no</th>
                    <th>cda house no</th>
                    <th>cda apartment no</th>
                    <th>cda address details</th>
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
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
  <script>

$(function () {
    $("#example1").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": true,
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
  
  </script>

@endsection