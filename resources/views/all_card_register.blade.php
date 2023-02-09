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
          <tbody id="list_card_data">
            <tr>
              <td> <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div></td>
            </tr>
           
          {{-- @php
          $i = 1
          @endphp --}}
        {{-- @foreach ($data as $fdata) --}}

        {{-- <p>This is user {{ $user->id }}</p> --}}
        {{-- <tr>
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
            <td>
              
              @if($fdata->status==1)

              <button onclick="delevery_stutus('{{$fdata->id}}');" class="btn btn-warning"> 
             
                Delevery
           
            </button>
          @else 
            <p class="bg-success">Delevery Success</p>

          @endif
          </td>
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



        </tr> --}}


        {{-- @endforeach --}}
        
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

  <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="show_update_data">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
    // $("#example1").DataTable({
    //   "responsive": false, "lengthChange": true, "autoWidth": true,   order: [[1, 'desc' ]], "aLengthMenu": [[100, 250, 500,1000, -1], [100, 250, 500 ,1000, "All"]],
    
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
   $('#exampleModalLong').modal('show')
let view=``;
    fetch(`get_one_data_card_register/${id}`)
    .then(response=>response.json())
    .then(data=>{
      console.log(data)
      let division_select = `<option value="">Select Division</option>`;
      let district_select = `<option value="">Select District</option>`;
      let cda_division_select = `<option value="">Select Division</option>`;
      let cda_district_select = `<option value="">Select District</option>`;
      division.forEach(e=>{
        division_select +=`<option ${e['name']==data[0]['division']?'selected="true"':''} value="${e['name']}">${e['name']}</option>`;
        District.forEach(d=>{
          if(e['name']==data[0]['division'] ){
            if(d['division_id']==e['id']){
              console.log(d)
              district_select +=`<option ${d['name']==data[0]['district']?'selected="true"':''} value="${d['name']}">${d['name']}</option>`;

            }
          }
        })
      })

      division.forEach(e=>{
        cda_division_select +=`<option ${e['name']==data[0]['cda_division']?'selected="true"':''} value="${e['name']}">${e['name']}</option>`;
        District.forEach(d=>{

          if(e['name']== data[0]['cda_division']){

            if(d['division_id']==e['id']){
              console.log(d)
              cda_district_select +=`<option ${d['name']==data[0]['cda_district']?'selected="true"':''} value="${d['name']}">${d['name']}</option>`;

          }
          }
         
        })
      })
       view += /*html*/`
      <form name="form_data">
              <div class="row">
              
              <div class="form-group col-12" >
                  <label for="">Phone Number ( মোবাইল নাম্বার )  <i class="text-danger">*</i></label>
                  <input type="text" value="${data[0]['phone_number']}" name="phone_number" class="form-control" id="" placeholder="Phone Number">
                  <small id="" class="form-text text-muted"> </small>
              </div>
              
              
              <div class="form-group col-12">
                  <label for=""> Email (ইমেইল) <i class="text-danger">*</i></label>
                  <input type="text"  value="${data[0]['email']}"  name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder=" Email Address ">
                  <small id="" class="form-text text-muted"> </small>
              </div>
              
              <div class="form-group col-12">
                  <label for="">How did you hear about the Pkaard?  (আপনি Pkaard সম্পর্কে কোন মাধ্যম থেকে জেনেছেন) <i class="text-danger">*</i></label>
                  <select  name="mediam" id="" class="form-control">
                      <option value="">Select Your Choice</option>
                      <option ${data[0]['mediam']=='Website'?'selected="true"':''}  value="Website">Website</option>
                      <option  ${data[0]['mediam']=='Facebook'?'selected="true"':''}  value="Facebook">Facebook</option>
                      <option  ${data[0]['mediam']=='LinkedIn'?'selected="true"':''}  value="LinkedIn">LinkedIn</option>
                      <option  ${data[0]['mediam']=='Instagram'?'selected="true"':''}  value="Instagram">Instagram</option>
                      <option  ${data[0]['mediam']=='What’s App '?'selected="true"':''}  value="What’s App ">What’s App </option>
                      <option  ${data[0]['mediam']=='Email'?'selected="true"':''}  value="Email">Email</option>
                      <option  ${data[0]['mediam']=='Friends/Family'?'selected="true"':''}  value="Friends/Family">Friends/Family</option>
                      <option  ${data[0]['mediam']=='Promotional SMS'?'selected="true"':''}  value="Promotional SMS">Promotional SMS</option>
                      <option  ${data[0]['mediam']=='District Coordinator '?'selected="true"':''}  value="District Coordinator ">District Coordinator </option>
                      <option  ${data[0]['mediam']=='Social Influencer '?'selected="true"':''}  value="Social Influencer ">Social Influencer </option>
                      <option  ${data[0]['mediam']=='Advertisement'?'selected="true"':''}  value="Advertisement ">Advertisement </option>
                      <option  ${data[0]['mediam']=='BACKHAND'?'selected="true"':''}   value="BACKHAND ">BACKHAND </option>
                      <option  ${data[0]['mediam']=='Other'?'selected="true"':''}  value="Other">Other </option>
                  </select>
                  <small id="" class="form-text text-muted"> </small>
              </div>
              
              
              <div class="form-group col-12" >
                  <label for="">Reference Code (রেফারেন্স কোড )</label>
                
                  <input type="text"   value="${data[0]['reference_code']}"    maxlength="6" value="" name="reference_code" class="form-control" id="">
                  <small id="" class="form-text text-muted"> </small>
              </div>
              
                    
              </div>
          </div>
          </div>
      
                  <div class="form registration_steping  registration_step_two  ">
              
                      <h4 class="text-warning text-center font-weight-bold mb-3">Step Two</h4>     
              
                  <div>
                      
              
                
                  <div class="row">
              
              
                  <div class="form-group col-12">
                  <label for="" class="text-capitalize"> Full Name in English  (ইংরেজিতে পূর্ণ নাম ) <i class="text-danger">*</i> </label>
                  <input type="text"class="form-control"   value="${data[0]['full_name']}" name="full_name" id="" aria-describedby="emailHelp" placeholder="Name">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
                  <div class="form-group col-12" >
                  <label for=""  class="text-capitalize"> nationality(জাতীয়তা)  <i class="text-danger">*</i></label>
                  <input type="text" value="Bangladeshi"   value="${data[0]['nationality']}" name="nationality" class="form-control text-capitalize" id="" placeholder="nationality">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
                
              
              
                  
                  <div class="form-group col-12">
                      <label for="" class="text-capitalize"> Date of Birth (জন্ম তারিখ)<i class="text-danger">*</i> </label>
                    
                      <input type="text" id="datemask"   value="${data[0]['date_of_birth']}"  name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                      <small id="" class="form-text text-muted"> </small>
                    
                  </div>
              
                  <div class="form-group col-12" >
                  <label for="">Gender (লিঙ্গ )  <i class="text-danger">*</i></label>
                  <select name="gender" id="" class="form-control">
                  <option value="">Select Gender</option>
                  <option   ${data[0]['gender']=='male'?'selected="true"':''} value="male">Male</option>
                  <option  ${data[0]['gender']=='female'?'selected="true"':''} value="female">Female</option>
                  <option  ${data[0]['gender']=='others'?'selected="true"':''} value="others">Others</option>
                  </select>
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
              
                  <div class="form-group col-12" >
                  <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
                  <select name="division" id="division" onchange="handle_division(this)" class="form-control">
                  <option value="">Select Division</option>
                  
                  </select>
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
              
                  <div class="form-group col-12" >
                  <label for="">District (জেলা )  <i class="text-danger">*</i></label>
                  <select name="district" id="district"  class="form-control">
                  <option value="">Select District</option>
                
                  </select>
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
              
                  <div class="form-group col-12">
                      <label for="" class="text-capitalize"> Profession  (পেশা) <i class="text-danger">*</i> </label>
                      <input type="text"   value="${data[0]['profession']}" class="form-control" name="profession" id="" aria-describedby="emailHelp" placeholder=" Profession ">
                      <small id="" class="form-text text-muted"> </small>
                      </div>
                  </div>
                  
                  </div>
                  </div>
              
                  <div class="form registration_steping  registration_step_three  ">
              
                      <h4 class="text-warning text-center font-weight-bold mb-3">Step Three</h4> 
                      <h5 class="text-danger text-center font-weight-bold mb-3" style="font-size: 1.8rem;">Card Delivery Address </h5>    
                      <h5 class="text-danger text-center font-weight-bold mb-3" style="font-family: 'Bangla', Arial, sans-serif !important;">(কার্ড পাঠানোর ঠিকানা) </h5>    
                  <div>
                      
              
                  <div class="row">
              
                  <div class="form-group col-12">
                  <label for="" class="text-capitalize">  Apartment No  (এপার্টমেন্ট  নং) <i class="text-danger">*</i> </label>
                  <input type="text"class="form-control"   value="${data[0]['cda_apartment_no']}" name="cda_apartment_no" id="" aria-describedby="emailHelp" placeholder=" Apartment No ">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
                  <div class="form-group col-12" >
                  <label for=""  class="text-capitalize">  House No <b> /</b> Holding No (বাসা নং)  <i class="text-danger">*</i></label>
                  <input type="text"   value="${data[0]['cda_house_no']}"  class="form-control text-capitalize" name="cda_house_no" id="" placeholder="House No / Holding No">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
              
                  <div class="form-group col-12">
                  <label for=""  class=""> Road No  (রোড নং) <i class="text-danger">*</i></label>
                
                  <input type="text"   value="${data[0]['cda_road_no']}" placeholder="Road No " name="cda_road_no" class="form-control " >
                  <small id="" class="form-text text-muted"> </small>
              
                  </div>
                  
                  <div class="form-group col-12">
                  <label for="" class="text-capitalize"> Area  <b> /</b> Village   (এলাকা  <b> /</b> গ্রাম) <i class="text-danger">*</i> </label>
                  <input type="text"class="form-control" id="" name="cda_village" aria-describedby="emailHelp" placeholder=" Area / Village ">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              
                  
                  <div class="form-group col-12" >
                      <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
                      <select  name="cda_division" id="cda_division" onchange="handle_cda_division(this)" class="form-control">
                      <option value="">Select Division</option>
                    
                      </select>
                      <small id="" class="form-text text-muted"> </small>
                      </div>
              
              
              
                      <div class="form-group col-12" >
                      <label for="">District (জেলা )  <i class="text-danger">*</i></label>
                      <select name="cda_district" id="cda_district"  class="form-control">
                      <option value="">Select District</option>
                    
                      </select>
                      <small id="" class="form-text text-muted"> </small>
                      </div>
              
              
              
                      <div class="form-group col-12" >
                      <label for="">Upzilla ( উপজেলা ) </label>
                      <input type="text"   value="${data[0]['cda_upzilla']}"  name="cda_upzilla"  id="cda_upzilla" placeholder="Upzilla"   class="form-control">
                      
                      <small id="" class="form-text text-muted"> </small>
                      </div>
              
                      <div class="form-group col-12" >
                  <label for=""  class="text-capitalize"> Police station <b> /</b> Thana (থানা )  <i class="text-danger">*</i></label>
                  <input type="text"    value="${data[0]['cda_Thana']}" class="form-control text-capitalize" name="cda_Thana" id="" placeholder="Police station /  Thana ">
                  <small id="" class="form-text text-muted"> </small>
                  </div>
                 
                  <div class="form-group col-12">
                  <label for="" class="text-capitalize"> Address in Details   (বিস্তারিত ঠিকানা) <i class="text-danger">*</i> </label>
                  <textarea    type="text"class="form-control"rows="5" id="" name="cda_address_details" placeholder="Address in Details" aria-describedby="emailHelp"> ${data[0]['cda_address_details']} </textarea>
                  <small id="" class="form-text text-muted"> </small>
                  </div>
              

      
          </form>
      
      `;

      document.getElementById("show_update_data").innerHTML=view;
      document.getElementById("division").innerHTML=division_select;
      document.getElementById("district").innerHTML=district_select;
      document.getElementById("cda_division").innerHTML=cda_division_select;
      document.getElementById("cda_district").innerHTML=cda_district_select;

    })
  }



function delevery_stutus(e){
  console.log(e)
 

  swal({
  title: "Are you sure to Change",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willChange) => {
  if (willChange) {
  

    fetch(`delevery_stutus`,{
    method: 'POST',
   body:JSON.stringify({'id':e}),
   headers: new Headers({
               'Content-Type': 'application/json',
              
            })

          })
  .then(response=>response.json())
  .then(data=>{
    console.log(data);

    if(data['condition']==true){
      swal ( "Success" ,  "Status Changed" ,  "success" )
get_all_card_register()
     //location.reload();
    }else{
      swal('Opps !','Something went wrong','error')
    }
  })


  }
});


}

function get_all_card_register(){

  fetch(`get_all_card_register`)
  .then(response=>response.json())
  .then(data=>{
// console.log(data);
let elem = ``;
let i = 1;
data.forEach(fdata=>{
  // console.log(fdata)
  elem +=/*html*/`
  <tr style=" ${fdata['mediam']=='BACKHAND'?'outline: 1px solid #0080009e;':''}">
          <td>${i++}</td>
            <td>1509002${fdata['card_id']}</td>            
            <td>pw${fdata['invoice_number']}</td>
            <td>${fdata['full_name']}</td>
            <td>${fdata['email']}</td>
            <td>${fdata['phone_number']}</td>
            <td>${fdata['reference_code']}</td>
            <td>${fdata['date_of_birth']}</td>
            <td>${fdata['profession']}</td>
            <td>${fdata['mediam']}</td>
            <td>${fdata['gender']}</td>
            <td>${fdata['nationality']}</td>
            <td>${fdata['division']}</td>
            <td>${fdata['district']}</td>
       
            <td>${fdata['cda_division']}</td>
            <td>${fdata['cda_district']}</td>
            <td>${fdata['cda_upzilla']}</td>
            <td>${fdata['cda_road_no']}</td>
            <td>${fdata['cda_house_no']}</td>
            <td>${fdata['cda_apartment_no']}</td>
            <td>${fdata['cda_address_details']}</td>
            <td>
              
             ${fdata['status']==1?`<button onclick="delevery_stutus('${fdata['id']}');" class="btn btn-warning"> Delevery </button>`:'<p class="bg-success">Delevery Success</p>'}

        
            

       
          </td>
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

                <a  class="btn btn-warning btn-outline-danger font-weight-bold" onclick="showModel('${fdata['id']}')">
                  <span class="material-symbols-outlined">
                    drive_file_rename_outline
                    </span>
                  </a>
              </p>
            </td>



        </tr>

  
  `;
})
document.getElementById("list_card_data").innerHTML=elem;
// $("#example1").DataTable({
//       "responsive": false, "lengthChange": true, "autoWidth": true,   order: [[1, 'desc' ]], "aLengthMenu": [[100, 250, 500,1000, -1], [100, 250, 500 ,1000, "All"]],
    
//       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  })
}
get_all_card_register()

function handle_division(e){

        let opData = '<option value="">Select District</option> ';

        division.forEach(div=>{
          if(div['name']==e.options[e.selectedIndex].value){
       District.forEach(function (data){

          if(div['id']== data['division_id']){

opData += `<option   value="${data['name']}">${data['name']}</option>`;

}
})

}
})
       document.getElementById('district').innerHTML = opData

    }


function handle_cda_division(e){

       let opData = '<option value="">Select District</option> ';

        division.forEach(div=>{
          if(div['name']==e.options[e.selectedIndex].value){
       District.forEach(function (data){

          if(div['id']== data['division_id']){

opData += `<option   value="${data['name']}">${data['name']}</option>`;

}
})

}
})
       document.getElementById('cda_district').innerHTML = opData

    }


  </script>

@endsection