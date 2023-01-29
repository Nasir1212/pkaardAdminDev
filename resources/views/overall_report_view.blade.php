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
            <h1 class="m-0">Overall Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Overall Report</li>
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
               
                <div>
                    <a class="btn btn-warning">Yearly Report </a>
                    <a  class = "btn btn-danger" href="">Monthly Report  </a>
                    <a class="btn btn-info">Daily Report</a>
                </div>

                <div class="yearly_report d-none">
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
                            <label for="">Select Year </label>
                            <select  class="form-control"  name="" id="">
                                <option value="">Select Year</option>
                                <option value="">2023</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                </div>


                <div class="monthly_report  d-none">
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
                            <label for="">Select Month </label>
                            <select  class="form-control"  name="" id="">
                                <option value="">Select Month</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December </option>
                            
                               
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                </div>


                <div class="monthly_report ">
                    <div>
                        <div class="col-sm-12 col-md-7 col-lg-6 mt-3 d-flex">

                       
                        <div class="form-group ">
                            <label for=""> From </label>
                           <input type="text" id="datetimepicker4">
                        </div>

                        <div class="form-group ">
                            <label for=""> To </label> 
                           <input type="text">
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button class="btn btn-success">Generate Report</button>
                        </div>

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