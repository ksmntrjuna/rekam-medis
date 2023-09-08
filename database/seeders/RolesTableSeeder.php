<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            1 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => 2,
                'name' => 'dokter',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            2 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => 3,
                'name' => 'fo',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            3 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => 4,
                'name' => 'therapist',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            4 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => 5,
                'name' => 'cabang',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'name' => 'aa',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'name' => 'apa',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'name' => 'aping',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}