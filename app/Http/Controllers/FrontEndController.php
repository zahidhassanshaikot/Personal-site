<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use App\AboutMe;
use App\ContactMe;
use App\ServiceInfo;
use App\payment;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function index(){
    	$obj_user=User::where('id','>',0)->first();
    	$obj_about=AboutMe::take(1)->first();
    	// return $obj_user;
        return view('front-end.home',[
        	'obj_user'=> $obj_user,
        	'obj_about'=> $obj_about
        ]);
    }
    public function service(){
        $obj_service=ServiceInfo::orderBy('id','DESC')->paginate(10);
        return view('front-end.service',['obj_service'=>$obj_service]);
    }

     public function sendContactMessage(Request $request){
     	$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'message' => 'required',
          
        ]);
		$obj_msg=new ContactMe();
        $obj_msg->name=$request->name;
        $obj_msg->email_address=$request->email;
        $obj_msg->phone_no=$request->phone_no;
        $obj_msg->message=$request->message;
        $obj_msg->save();
         

        return redirect()->back()->with('message_c','Message successfully Send');
    }

    public function serviceDetails($id){
        $obj_service=ServiceInfo::find($id); 

        return view('front-end.service-details',['obj_service'=>$obj_service]);
    }
    public function payment($id){
    
        return view('front-end.payment-page',['service_id'=>$id]);
    }
    public function savePaymentInfo(Request $request){
    $this->validate($request, [
            'trxId' => 'required'
          
        ]);
    $obj=new payment();    
    $obj->trxId=$request->trxId;    
    $obj->service_id=$request->service_id;    
    $obj->save();    

    return redirect()->back()->with(
            'message','Successfully payment completed');
    }


}
