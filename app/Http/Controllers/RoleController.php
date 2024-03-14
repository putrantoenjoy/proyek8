<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;

class RoleController extends Controller
{
    //
    public function index(Request $request){
        // $user = DB::table('role_has_permissions')->where('role_id', $request);
        $permissions = Permission::get();
        $roles = Role::with('permissions')->get();
        return view('role.index', compact('permissions', 'roles'));
    }
    public function update(Request $request, $id)
    {
        // $role;

        
        // $checkboxes = $request->input('permission_id');
        DB::table('role_has_permissions')->where('role_id', $request->role_id)->delete();
        for ($i=0; $i < count($request->permission_id); $i++) { 
            $data = [
                "role_id" => $request->role_id,
                "permission_id" => $request->permission_id[$i],
            ];
            DB::table('role_has_permissions')->insert($data);
        }
        // return back();
        // $role = $request->role;
        // dd($request->all());
        // return response()->json(['status' => 'sukses']);
    }
    // public function tambah(Request $request)
    // {
    //     $checkboxes = $request->input('permission_id');
    //     dd($checkboxes);
    //     // return response()->json(['status' => 'sukses']);
    // }
}
