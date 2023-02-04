{{-- @dd($data); --}}
@extends('master.master')

@section('content')
<style>
    .ref_number_box {
    display: grid;
    grid-template-columns: repeat(6,1fr);
    gap: 1rem;
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
            <h1 class="m-0">Branch</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Branch</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

        
    <div class="card-header ">
        <div class=" float-right">
            <h3 class="card-title"><button class="btn btn-warning"  data-toggle="modal" data-target=".bd-example-modal-lg">Add New Branch</button></h3>
        </div>
      
      </div>
      <!-- /.card-header -->
      <div class="card-body">

       
        
        
        
        <table class="table table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">District</th>
              <th scope="col">Mail</th>
              <th scope="col">Reference Code </th>
              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody id="get_branch_all_data">
           
          </tbody>
        </table>
      
       

        
        
      
      
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Large modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg"  id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add New Branch</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid">
                <form name="branch_member">
                <div class="row">
                   
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Name </label>
                        <input type="text"class="form-control" name="name" id=""  placeholder=" Name">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> District </label>
                        <select class="form-control" name="district"onchange="select_district(this);" id="district">
                            <option value="">Select District</option>
                        </select>
                        {{-- <input type="text"class="form-control" name="mail" id=""  placeholder=" Mail"> --}}
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Mail </label>
                        <input type="text"class="form-control" name="mail" id=""  placeholder=" Mail">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> password </label>
                        <div class=" input-group">

                       
                       
                        <input type="password"class="form-control" name="password" id=""  placeholder=" Password">
                    

                        <div class="input-group-append" >
                            <div class="input-group-text cursor-pointer " onclick="show_password(this)">
                                <span id="icon_of" class="material-symbols-outlined  cursor-pointer"   style="cursor:  pointer !important;">visibility_off </span>

                                <span id="icon_on" class="material-symbols-outlined   cursor-pointer"  style="cursor:  pointer !important; display:none"> visibility  </span>
                            </div>
                        </div>
                        <small id="" class="form-text text-muted"> </small>

                    </div>
                    </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                        <div class="ref_number_box">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="1">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="2">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="3">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="4">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="5">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="6">
                           
                        </div>
                        <input type="hidden" value="" name="reference_code" class="form-control" id="">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                </div>

                
            </div>

        </form>
            
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="add_branch()" class="btn btn-primary">Add </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg"  id="update_branch_model"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Update Branch</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid" id="update_branch_container_body">
               

                
            </div>

      
            
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="update_branch()" class="btn btn-primary">Update </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
{{-- <!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script> --}}


  
  <script>


function handle_cda_division(){

  let opData = '<option value="">Select District</option> ';
  District.forEach(function (data){
  opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

  })
  document.getElementById('district').innerHTML = opData

    }
window.onload = ()=>{
    handle_cda_division();
    get_branch_all_data()
}

let ref_code_one =   document.getElementsByClassName('ref_code_one')

for (const ele  of ref_code_one) {
   
   ele.addEventListener('keyup',function(){
       
      if(this.id != 6 && this.value.length >0){
    
       document.getElementById(Number(this.id)+1).focus();
      }
      let all_ref_code ='';
      for (const ele  of ref_code_one) {
       all_ref_code += ele.value
      }

      document.getElementsByName('reference_code')[0].value= all_ref_code
      
   })
}





function add_branch(){
    let branch_member = Object.fromEntries(new FormData(document.forms['branch_member']));

   
    fetch('/branch_user', {
    method: 'POST',
    body:JSON.stringify(branch_member),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
if(data['condition']==true){
  get_branch_all_data();
    swal("successful", "Successfully Added", "success"); 
    $('#exampleModal').modal('hide')
}else{
    swal("Opps!", "Something went wrong", "error"); 
}
   

  })
}

function select_district(e){
   
    document.getElementsByName('mail')[0].value = `${e.value.toLowerCase()}@pkaard.com`;
if(document.getElementsByName('mail')[1]){
  document.getElementsByName('mail')[1].value = `${e.value.toLowerCase()}@pkaard.com`;

}
  }

function show_password(e){
    if( e.children[1].style.display=='none'){
        e.children[1].style.display='block'
        e.children[0].style.display='none'
        document.getElementsByName('password')[0].type='text'
       
    }else{
        e.children[0].style.display='block'
        e.children[1].style.display='none'
         document.getElementsByName('password')[0].type='password'
       
    }

    


}

function get_branch_all_data(){
  let elem = ``;
  fetch(`get_branch_all_data`)
  .then(response =>response.json())
  .then(data=>{

    let i = 1;
    data.forEach(d=>{
      elem += /*html*/`
    <tr>
      <td>${i++}</td>
       <td>${d['name']}</td>  
       <td>${d['mail']}</td>  
       <td>${d['district']}</td>  
       <td>${d['reference_code']}</td>
       <td>
        <a class="btn btn-warning"  onclick="action_branch('${d['id']}','get_one')"><i class="nav-icon fas fa-edit"></i> </a>
        <b>|</b>
       <a class="btn btn-danger"   onclick="action_branch('${d['id']}','delete')"><i class="far fa-trash-alt"></i></a></td>  
    </tr>
    `;

    })

    document.getElementById('get_branch_all_data').innerHTML = elem;
  
  })
}

function action_branch(id,action){

fetch(`handle_branch_action/${id}/${action}`)
.then(response=>response.json())
.then(data=>{
  if(action=='delete'){

  if(data['condition']==true){
    get_branch_all_data();
    swal("successful", `${data['message']}`, "success"); 
  }else if(data['condition']==false){
    swal("Opps!", `${data['message']}`, "error"); 
  }
}

if(action=='get_one'){
  let elem = '';
      
  let opData = '<option value="">Select District</option> ';
  data.forEach(d=>{


  District.forEach(function (data){
  opData += `<option  ${d['district']==data['name']?'selected':''} value="${data['name']}">${data['name']}</option>`;

  })
  


    elem +=/*html*/`
    <form name="branch_member_update">
                <div class="row">
                   
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Name </label>
                        <input type="text"class="form-control" value="${d['name']}" name="name" id=""  placeholder=" Name">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> District </label>
                        <select class="form-control" name="district"onchange="select_district(this);" id="district2">
                            <option value="">Select District</option>
                        </select>
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Mail </label>
                        <input type="text"class="form-control" value="${d['mail']}" name="mail" id="mail2"  placeholder=" Mail">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                
                        <input type='hidden'value="${d['id']}" name='id'/>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                       
                        <input type="text" value="${d['reference_code']}" name="reference_code" class="form-control" id="">
                        <small id="" class="form-text text-muted"> </small>
                        
                      </div>

                </div>

                
           

        </form>
    
    `;
  })

  $('#update_branch_model').modal('show')
  document.getElementById('update_branch_container_body').innerHTML=elem;
  document.getElementById('district2').innerHTML = opData

}

})
}



//update branch 
function update_branch(){

  let branch_member_update = Object.fromEntries(new FormData(document.forms['branch_member_update']));

fetch('/update_branch', {
method: 'POST',
body:JSON.stringify(branch_member_update),
headers: new Headers({
            'Content-Type': 'application/json',
          
        })
})
.then(response => response.json())
.then(data => {
  
if(data['condition']==true){
  get_branch_all_data();
  $('#update_branch_model').modal('hide')

swal("successful", "Successfully Updated", "success"); 


}else{
swal("Opps!", "Something went wrong", "error"); 
}


})

}
  </script>

@endsection