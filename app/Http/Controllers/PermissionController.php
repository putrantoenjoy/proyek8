<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware(['role:admin']);
    // }
    public function index(){
        $permissions = Permission::get();
        $roles = Role::get();
        return view('permission.index', compact('permissions', 'roles'));
    }
}
