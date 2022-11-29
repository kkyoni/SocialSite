<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DataTables,Notify,Validator,Str,Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // protected $authLayout = '';
    // protected $pageLayout = '';
    // protected $frontLayout = '';

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function my_account(Request $request){
        if(Auth::check()){
            $user = User::where(['status'=>'active','id'=>Auth::user()->id])->first();
            return view('front.pages.my_account.profile',compact('user'));
        }else{
            return redirect()->route('front.index');
        }
    }

    public function updateProfileDetail(Request $request){
        $validator = Validator::make($request->all(),[
            'name'  => 'required',
            'phone'  => 'required',
            'email'  => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(10).'.'.$extension;
                Storage::disk('public')->putFileAs('avatar', $file,$filename);
            }else{
                $userDetail=User::where('id',Auth::user()->id)->first()->avatar;
                $filename = $userDetail;
            }
            User::where('id',Auth::user()->id)->update([
                'avatar'                => @$filename,
                'name'                  => @$request->name,
                'phone'                => @$request->phone,
            ]);
            return redirect()->route('front.my_account');
        }catch(\Exception $e){
            Notify::error($e->getMessage());
        }
    }
}
