<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use App\AboutMe;
use App\ContactMe;
use App\ServiceInfo;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class BackEndController extends Controller
{
    public function deshboard(){
    	return view('back-end.deshboard');
    }

    public function manageProfile(){
    	return view('back-end.manage-profile');
    }

    public function editProfile(){
    	return view('back-end.edit-profile');
    }

    public function updateProfile( Request $request){
    	 $this->validate($request, [
            'name' => 'required|max:30|min:2', 
        ]);
        $user_id=Auth::user()->id;

            $user = User::find($user_id);

            $user->name = $request->name;
            $user->short_description = $request->short_description;
            
            $user->designation = $request->designation;
         
            $user->phone_no = $request->phone_no;
            if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg|max:2048',
            ]);
            if (File::exists($user->image)) {
                unlink($user->image);
            }
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = "banner" . '.' . $fileType;
            $directory = 'front-end/images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $user->image = $imageUrl;
        }
            $user->save();

    	return redirect('manage-profile')->with('message', 'Your profile successfully updated.');
    }

    public function manageAbout(){
        $obj_about=AboutMe::take(1)->first();

        return view('back-end.manage-about',['obj_about'=>$obj_about]);
    }   
    public function editAboutMe($id){
        $obj_about=AboutMe::find($id);

        return view('back-end.edit-aboutMe',['obj_about'=>$obj_about]);
    }  

    public function updateAboutMe(Request $request){
// return $request;
        $this->validate($request, [
            'title' => 'required',
          
        ]);
        $obj_about=AboutMe::find($request->id);

        $obj_about->title=$request->title;
        $obj_about->short_description=$request->short_description;
        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
            if (File::exists($obj_about->image)) {
                unlink($obj_about->image);
            }
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "ab" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $obj_about->image = $imageUrl;
        
        }
        $obj_about->save();
        

    	return redirect('manage-about')->with('message','Successfully updated');
    }    

    public function manageService(){
        $obj_service=ServiceInfo::orderBy('id','DESC')->paginate(10);
        return view('back-end.manage-service',['obj_service'=>$obj_service]);
    }

    public function addNewService(){
        
        return view('back-end.add-service');
    }
    public function saveNewService(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'short_description' => 'required',
          
        ]);
        // return $request;
        $obj_service= new ServiceInfo();
        $obj_service->title= $request->title;
        $obj_service->price= $request->price;
        $obj_service->short_description= $request->short_description;
        $obj_service->long_description= $request->long_description;

 if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
            
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "service" . rand(5, 30) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $obj_service->image = $imageUrl;
        
        }
            $obj_service->save();

    	return redirect()->back()->with('message','Successfully Saved');
    }

    public function editService($id){

        $obj_service=ServiceInfo::find($id);
      
        return view('back-end.edit-service',['obj_service'=>$obj_service]);
    }
    public function updateService(Request $request){

 $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'short_description' => 'required',
          
        ]);
        // return $request;
        $obj_service=ServiceInfo::find($request->s_id);
        $obj_service->title= $request->title;
        $obj_service->price= $request->price;
        $obj_service->short_description= $request->short_description;
        $obj_service->long_description= $request->long_description;

 if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
               if (File::exists($obj_service->image)) {
                unlink($obj_service->image);
            }
            
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "service" . rand(5, 30) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $obj_service->image = $imageUrl;
        
        }
            $obj_service->save();

      
        return redirect('manage-service')->with('message','Info Successfully updated');
    }

    public function deleteService($id){
        $obj_service=ServiceInfo::find($id);

             if (File::exists($obj_service->image)) {
                unlink($obj_service->image);
            }
            $obj_service->delete();
        return redirect('manage-service')->with('message','Info Successfully Deleted');
    }
  

    public function passwordChange(){
    	return view('back-end.password-change');
    }
  

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => ['required',
                'min:6',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',
        ]);
        // return $request;s
        $current_password = Auth::User()->password;
        if (Hash::check($request->old_password, $current_password)) {
            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->password);;
            $obj_user->save();
            return redirect('manage-profile')->with('message', 'Your password successfully change.');
        } else {
            return redirect()->back()->with('message', 'Please enter correct current password.');
        }
    }
    public function viewContact(){
        $obj_contact=ContactMe::orderBy('id','DESC')->paginate(10);
        return view('back-end.contactMsg',['obj_contact'=>$obj_contact]);
    }

}
