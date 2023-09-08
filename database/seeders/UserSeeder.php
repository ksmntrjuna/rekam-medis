<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->id = Str::uuid();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->username = 'admin';
        $admin->password = bcrypt('admin');
        $admin->role = 'admin';
        $admin->branch = 'pusat';
        $admin->save();
    }
}
