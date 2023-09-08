<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'dokter', 'fo', 'therapist', 'cabang', 'aa', 'apa', 'aping'];
        foreach($roles as $role){
        	$r = new Role;
        	$r->name = $role;
        	$r->save();
        }
    }
}
