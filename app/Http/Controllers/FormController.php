<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Models\User;

class FormController extends Controller
{
    //
    public function index(Request $request){
        $cari = $request->cari;
        $data = DB::table('users')->where('deleted_at', null);
        if(!empty ($request->cari)){
            $data->where('first_name', 'like', "%". $cari ."%")->orWhere('last_name', 'like', "%". $cari ."%");
        }
        $allData = $data->paginate(5);
        return view('form.index', compact('allData', 'cari'));
    }
    public function search(Request $request){
        // $cari = $request->cari;
        // $allData = DB::table('users')->where('first_name', 'like', "%". $cari ."%")->orWhere('last_name', 'like', "%". $cari ."%")->paginate(5);
        
        
        // return view('form.index', compact('allData', 'cari'));
    }
    public function tambah(Request $request){
        $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('form-index')->with('status', 'success tambah');
    }
    public function edit(Request $request, $id){
        $allData = User::find($id);
        
        return view('form.edit', compact('allData'));
    }
    public function update(Request $request, $id){
        // dd($id);
        $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>['required', 'string', 'email', 'max:255'],
        ]);
        

        $allData = User::findOrFail($id);
        
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,

        ];
        if(!empty ($request->password)){
            $data["password"] = Hash::make($request->password);
        }
        $allData->first_name = $request->first_name;
        $allData->last_name = $request->last_name;
        $allData->username = $request->username;
        $allData->email = $request->email;
        $allData->password = Hash::make($request->password);
        // dd($allData);
        
        $allData->update($data);
        
        return redirect()->route('form-index')->with('status', 'success update');
    }
    public function delete($id){
        $allData = User::find($id);
        $allData->delete();
        
        return redirect()->route('form-index');
    }
    public function restore($id){
        $allData = User::find($id);
        $allData->deleted_at = null;
        $allData->update();
        dd($allData);
        
        return redirect()->route('form-index');
    }
}
