<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;
use App\Exports\DataExport;
use App\Exports\EngineExport;
use App\Exports\GenerationExport;
use App\Exports\MakeExport;
use App\Exports\ModalExport;
use App\Exports\exportUesrs;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;

class manageData extends Controller
{
    public function allMakeData(){
        $allData = DB::table('make_datas')->get();
        return view('pages.make.allData', compact('allData'));
    }
    public function allModalData(){
        $allData = DB::table('modal_datas')->get();
        return view('pages.modal.allData', compact('allData'));
    }
    public function allGenData(){
        $allData = DB::table('generation_datas')->get();
        return view('pages.generation.allData', compact('allData'));
    }
    public function allEngineData(){
        $allData = DB::table('engine_datas')->get();
        return view('pages.engine.allData', compact('allData'));
    }
    public function allDataData(){
        $allData = DB::table('datas')->get();
        return view('pages.data.allData', compact('allData'));
    }
    public function exportData(){
        return Excel::download(new DataExport, 'data_'.date('Y-m-d_H:i:s').'.csv');
    }
    public function exportEngineData(){
        return Excel::download(new EngineExport, 'engine_data_'.date('Y-m-d_H:i:s').'.csv');
    }
    public function exportGenData(){
        return Excel::download(new GenerationExport, 'generation_data_'.date('Y-m-d_H:i:s').'.csv');
    }
    public function exportMakeData(){
        return Excel::download(new MakeExport, 'make_data_'.date('Y-m-d_H:i:s').'.csv');
    }
    public function exportModalData(){
        return Excel::download(new ModalExport, 'modal_data_'.date('Y-m-d_H:i:s').'.csv');
    }
    public function deleteData(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('datas')->where('id', $request['user_id'])->delete();
        return back()->with('success', 'Data Deleted successfully!');
    }
    public function deleteEngine(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('engine_datas')->where('id', $request['user_id'])->delete();
        return back()->with('success', 'Data Deleted successfully!');
    }
    public function deleteGen(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('generation_datas')->where('id', $request['user_id'])->delete();
        return back()->with('success', 'Data Deleted successfully!');
    }
    public function deleteMake(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('make_datas')->where('id', $request['user_id'])->delete();
        return back()->with('success', 'Data Deleted successfully!');
    }
    public function deleteModal(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('modal_datas')->where('id', $request['user_id'])->delete();
        return back()->with('success', 'Data Deleted successfully!');
    }
    



    public function allAdmins(){
        $allUsers = DB::table('users')->get();
        return view('pages.admins.alldata', compact('allUsers'));
    }
    public function addAdmins(){
        return view('pages.admins.adddata');
    }
    public function storeUser(Request $request){
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        
        $user = User::create([
            'name' => 'user'.rand(9,100),
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return redirect()->route('allAdmins')->with('success', 'Admin added successfully!');

    }
    public function deleteUser(Request $request){
        $request->validate([
            'user_id' => ['required']
        ]);
        $deleted = DB::table('users')->where('id', $request['user_id'])->delete();
        return redirect()->route('allAdmins')->with('success', 'User Deleted successfully!');
    }
    public function exportUesrs(){
        return Excel::download(new exportUesrs, 'users_'.date('Y-m-d_H:i:s').'.csv');
    }

    public function profileEdit(){
        return view('profile');
    }
    public function updateProfile(Request $request){

        if(!empty($request->old_password) && $request->old_password !== ''){

            $request->validate([
                'new_password' => 'required|min:8',
                'confirm_password' => 'required|same:new_password|min:8'
            ]);

            $old_pass = Auth::user()->password;
            $old_pass_form = $request->old_password;

            if (Hash::check($old_pass_form, $old_pass)) {
                if($request->hasFile('avatar')){
                    $file = $request->file('avatar');
                    $file_store = $file->store('uploaded_profile');
                }
                if(isset($file_store)){
                    $user = array(
                        'name' => $request->name,
                        'email' => $request->email,
                        'img' => 'uploads/'.$file_store,
                        'password' => Hash::make($request->new_password),
                    );
                }else{
                    $user = array(
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->new_password),
                    );
                }
                $id = Auth::user()->id;
                DB::table('users')->where('id', $id)->update($user);
                return back()->with('success', 'Updated successfully!');
            }else{
                return back()->with('error', 'Old Password Not matched!');
            }
               



        }else{
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $file_store = $file->store('uploaded_profile');
            }
            if(isset($file_store)){
                $user = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'img' => 'uploads/'.$file_store
                );
            }else{
                $user = array(
                    'name' => $request->name,
                    'email' => $request->email,
                );
            }
            $id = Auth::user()->id;
            DB::table('users')->where('id', $id)->update($user);
            return back()->with('success', 'Updated successfully!');
        }

        



    }

}
