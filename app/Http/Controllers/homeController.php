<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card_registation;
use App\Models\branch_user;
use App\Models\OTP;
use App\Models\IP;
use Illuminate\Http\Response;
use App\Mail\AdminOtpMail;
use Illuminate\Support\Facades\Mail;
class homeController extends Controller
{
    public function get_all_register(){

       $data =  card_registation::all();
       return view('all_card_register',['data'=>$data]);


    }
    public function dashboard(){

   
      $visitor = count( IP::where(['ip'=>date('Y/m/d')])->get());
      $total_reg = count( card_registation::all());
      $daily=  count(card_registation::where(['register_date'=>date('Y/m/d')])->get());
      $monthly=  count(card_registation::where('register_date','LIKE','%'.date('m').'%')->get());

      return view('dashboard',['total_reg'=>$total_reg,'daily'=>$daily,'monthly'=>$monthly,'visitor'=>$visitor]);
    }


   

   
        public function card_registation_add(Request $req){

 
            $cda_address_details= $req->input('cda_address_details');  
            $cda_apartment_no = $req->input('cda_apartment_no'); 
            $cda_district = $req->input('cda_district'); 
            $cda_division = $req->input('cda_division'); 
            $cda_house_no = $req->input('cda_house_no'); 
            $cda_road_no = $req->input('cda_road_no');  
            $cda_upzilla = $req->input('cda_upzilla');  
            $cda_village = $req->input('cda_village');  
            $cda_Thana =$req->input('cda_Thana');
            $date_of_birth = $req->input('date_of_birth');    
            $district = $req->input('district'); 
            $division = $req->input('division'); 
            $email = $req->input('email');  
            $full_name = $req->input('full_name');    
            $gender = $req->input('gender');   
            $nationality = $req->input('nationality');  
            $phone_number = $req->input('phone_number');
            $reference_code = $req->input('reference_code');
            $mediam = $req->input('mediam');
            $profession = $req->input('profession');
            
         
            $card_id ='';
            $invoice_number='';
            $db_all_data =card_registation::all();
            if(count( $db_all_data) > 0){
             $card_id_in_db = card_registation::orderBy('card_id', 'desc')->take(1)->first();
             $card_id  =  $card_id_in_db['card_id']+1;
             $invoice_number= $card_id_in_db['invoice_number']+1;
            }else{
             $card_id =300000001;
             $invoice_number=1500001;
    
            }
            $result =  card_registation::insert([
    
                'cda_address_details' =>$cda_address_details,
                'cda_apartment_no' => $cda_apartment_no,
                'cda_district' =>$cda_district,
                'cda_division' =>$cda_division,
                'cda_house_no' =>$cda_house_no,
                'cda_road_no' =>$cda_road_no,
                'cda_upzilla' =>$cda_upzilla,
                'cda_village' =>$cda_village,
                'date_of_birth' =>$date_of_birth,
                'district' =>$district,
                'division' =>$division,
                'email' =>$email,
                'full_name' =>$full_name,
                'gender' =>$gender,
                'nationality' =>$nationality,
                'phone_number' =>$phone_number,
                'reference_code' =>$reference_code,
                'cda_Thana'=>$cda_Thana,
                'card_id'=>$card_id,
                'mediam'=>$mediam,
                'profession'=>$profession,
                'invoice_number'=>$invoice_number,
                'register_date'=> date('Y/m/d') 
                
              
            ]);
                if($result){
                  
                   return  json_encode(array('message'=>'successfully Registation','condition'=>true,'phone'=>$phone_number));
                }else{
                   return json_encode(array('message'=>'failed Registation','condition'=>false));
                }
    
          
      } 


      public function branch(){

        return view('branch_view');
      }

      public function branch_user(Request $req){
            $name = $req->input('name');
            $district = $req->input('district');
            $mail = $req->input('mail');
            $password =crypt($req->input('password'), 'pkaard') ;
            $reference_code = $req->input('reference_code');

            $result = branch_user::insert([
                        'name'=>$name,
                        'district'=>$district,
                        'mail'=>$mail,
                        'password'=>$password,
                        'reference_code'=>$reference_code
            ]);

         if($result){
                           
            return  json_encode(array('message'=>'successfully Added','condition'=>true));
         }else{
            return json_encode(array('message'=>'failed Add','condition'=>false));
         }
               
      }
    
      public function get_branch_all_data(){
         $data =  branch_user::all();
         
         return json_encode($data);
      }

      public function handle_branch_action($id,$action){
         if($action=='get_one'):
            $data =  branch_user::where(['id'=>$id])->get();
            return json_decode($data);
         endif;

         if($action=='delete'):
         $delete =    branch_user::where(['id'=>$id])->delete();
         if($delete){
            return json_encode(array('condition'=>true,'message'=>'successfully deleted'));
         }else{
            return json_encode(array('condition'=>false,'message'=>' delete failed'));

         }
         endif;

      }

      public function update_branch(Request $req){
         $id = $req->input('id');
         $name = $req->input('name');
         $district = $req->input('district');
         $mail = $req->input('mail');
        
         $reference_code = $req->input('reference_code');

        $result =  branch_user::where(['id'=>$id])->update([
            'name'=>$name,
            'district'=>$district,
            'mail'=>$mail,
            'reference_code'=>$reference_code
            
         ]);

         if($result){
            return json_encode(array('condition'=>true,'message'=>'Updated successfully'));
         }else{
            return json_encode(array('condition'=>false,'message'=>'Updated failed'));
         }
      }
    
      public function login_check(Request $req){

         $mail = $req->input('mail');
         $password = crypt($req->input('password'), 'pkaard') ;
        $result =  branch_user::where(['mail'=>$mail,'password'=>$password])->count();

      if($result==1){
         $data =  branch_user::where(['mail'=>$mail,'password'=>$password])->get();
         $req->session()->put(['data'=>$data]);
         $req->session()->put(['mode'=>'branch']);
         $req->session()->put(['is_login'=>true]);
         // return redirect('/');
         // return $req->session()->get('is_login');
          return $req->session()->all();
      }else{
         return json_encode(array('condition'=>false,'message'=>'Email or Passwrod not matched'));

      }
      }

      public function send_otp_admin($mail){

         if($mail == 'nnasiruddin1996@gmail.com'):
         
        $otp  =  rand(100000,999999);
        $mail =  Mail::to($mail)->send(new AdminOtpMail($otp));

        if($mail):
          $sending_otp =  OTP::insert([
              'otp'=>$otp,
              'is_expired'=>0,
              'create_at'=>date("Y-m-d H:i:s")
            
            ]);

            if($sending_otp):
               return json_encode(array('condition'=>true,'message'=>'OTP successfully Send in your mail'));
            else:
               return json_encode(array('condition'=>false,'message'=>'OTP Failed'));

            endif;

        

         endif;

        
      else:
         return json_encode(array('condition'=>false,'message'=>'Email not matched'));

   endif;
         // return $otp;

      // return   OTP::where(['otp'=>$otp,'is_expired'=>'0','create_at'=>'NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR'])->get();

      //return $results = \DB::select('SELECT  * FROM `otp_expired` WHERE `is_expired`=0 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)');
      }


      public function admin_otp_check(Request $req){

         $otp = $req->input('otp');

         $result = \DB::select('SELECT  * FROM `otp_expired` WHERE `is_expired`=0 AND `otp`=:otp AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)',['otp'=>$otp]);
         if(count($result)>0){
            
            \DB::update('UPDATE  `otp_expired` SET  `is_expired` = 1 where `otp` = ?', [$otp]);

           
         $req->session()->put(['mode'=>'admin']);
         $req->session()->put(['is_login'=>true]);

         // $response = new Response('pkaard');
         // $time = 1; // 60 * 60 * 24 * 365;
         // $response->withCookie(cookie('mode', 'admin',  $time));
         // $response->withCookie(cookie('is_login', true, $time ));

         \DB::delete('DELETE  FROM `otp_expired` WHERE  `is_expired` = 1 OR NOW() > DATE_ADD(create_at, INTERVAL 24 HOUR)');
         return  $req->session()->all();
       
        // return json_encode(array('mode'=>$req->cookie('mode'),'is_login'=>$req->cookie('is_login')));
         }

      }

      public function logout_auth(Request $req){
       $req->session()->flush();
       return json_encode(array('condition'=>true));
      }
}
