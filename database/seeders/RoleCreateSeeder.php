<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $input = fopen("php://stdin","r");
        echo "masukkan nama\nnama: ";
        $pilih = trim(fgets($input));
        $data = $pilih;
        if($data[0] != null){
            Permission::create(['name'=> $data]);
            echo "berhasil membuat!\nTunggu sebentar\n\n";
            sleep(1);
        }
        
        echo "mulai lagi\n";
        $this->call(RoleCreateSeeder::class);
    }
}
