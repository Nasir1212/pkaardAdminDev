{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
    #show_district{
        list-style: none
    }
</style>

<div class="card">



     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Communication</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Communication </li>
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
        <div class="row">
           <div class="col-12">

         <div class="row">
            <div class="dropdown col-6">
                <button class="btn btn-danger  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-comments"></i> SMS 
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            <button class="btn btn-info m-2 col-4"> <i class="nav-icon far fa-envelope"></i> Email </button>
            <button class="btn btn-warning m-2 col-4">Whatsapp </button>
        </div>
          </div>
           </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script>
    // console.log(District)
    // $('#datetimepicker4').datetimepicker({
    //     format: 'DD/MM/YYYY',
    //     viewMode: 'years',
    //     icons: {
    //               time: "fa fa-clock-o",
    //               date: "fa fa-calendar",
    //                up: "fa fa-arrow-up",
    //                down: "fa fa-arrow-down"
    //            }
         
    // });

</script>

<script>
  console.log(District)

 
  window.onload = ()=>{
let dist_ele = `<option > Select District  </option> <option> All District  </option>`;
    District.forEach(element => {
    console.log(element)
dist_ele +=`<option value='${element['name']}' >${element['name']}</option> `;


    
  });

document.getElementById('district').innerHTML = dist_ele;

  }
</script>


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
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script>

$('#datetimepicker4').datetimepicker({
        format: 'DD/MM/YYYY',
        viewMode: 'years',
        icons: {
                  time: "fa fa-clock-o",
                  date: "fa fa-calendar",
                   up: "fa fa-arrow-up",
                   down: "fa fa-arrow-down"
               }
         
    });
  
  
  </script>

@endsection