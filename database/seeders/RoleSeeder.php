<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $user = User::where('first_name', 'admin')->first();
        // echo $user;
        // return $user;
        $role = Role::first();
        if($role == null){
            $data = [
                "admin",
                "user",
                "administrasi"
            ];
            $data_permission = [
                "satuan-index",
                "satuan-tambah",
                "satuan-update",
                "satuan-delete",
                "kategori-index",
                "kategori-tambah",
                "kategori-update",
                "kategori-delete",
                "permission-index",
                "permission-tambah",
                "permission-update",
                "permission-delete",
                "home",
                "form-index",
                "form-search",
                "form-tambah",
                "form-edit",
                "form-update",
                "form-delete",
                "form-restore"
            ];
            
            for($i = 0; $i < count($data) ; $i++){
                $role = Role::create(['name' => $data[$i]]);
            }
            for($i = 0; $i < count($data_permission) ; $i++){
                $data_permission_view = Str::replace("-", ' ',$data_permission[$i]);
                $permission = Permission::create([
                    'name' => $data_permission[$i],
                    'view'=> $data_permission_view
                ]);
                $role = Role::findById(1);
                $user = User::where('first_name', 'admin')->first();
                $user->assignRole('admin');
                $role->givePermissionTo([$permission]);
                
                // $user = User::where('id', '!=', 1)->get();
                // $user->syncRoles('user');
                if($permission == 'create'  || $permission == 'update'){

                }
            }
        }else {
            echo "Tidak bisa membuat role, karena sudah dibuat\n";
            $this->call(DatabaseSeeder::class);
        }
    }
}
