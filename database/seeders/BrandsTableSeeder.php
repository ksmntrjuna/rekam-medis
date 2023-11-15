<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
      
        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => '1',
                'name' => 'Navagreen',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            1 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => '2',
                'name' => 'Natasha',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            2 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => '3',
                'name' => 'Toyota',
                'updated_at' => '2020-12-04 08:07:52',
            ),
            3 => 
            array (
                'created_at' => '2020-12-04 08:07:52',
                'id' => '4',
                'name' => 'Honda',
                'updated_at' => '2020-12-04 08:07:52',
            ),
        ));
    }
}
