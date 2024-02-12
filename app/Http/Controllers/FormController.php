<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Models\User;

class FormController extends Controller
{
    //
    public function index(){
        $allData = DB::table('users')->where('deleted_at', null)->get();
        
        return view('form.index', compact('allData'));
    }
    public function tambah(Request $request){
        
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('form-index');

        // return User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'username' => $data['username'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
    public function edit(Request $request, $id){
        $allData = User::find($id);
        // $allData->first_name = $request->first_name;
        // $allData->last_name = $request->last_name;
        // $allData->username = $request->username;
        // $allData->email = $request->email;
        // $allData->password = Hash::make($request->password);
        // $allData->save();
        
        return view('form.edit', compact('allData'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $allData = User::find($id);
        $allData->first_name = $request->first_name;
        $allData->first_name = $request->first_name;
        $allData->last_name = $request->last_name;
        $allData->username = $request->username;
        $allData->email = $request->email;
        $allData->password = Hash::make($request->password);
        
        $allData->update();
        
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
