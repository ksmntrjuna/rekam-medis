<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApiTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('api_tokens')->delete();
        
        \DB::table('api_tokens')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'merchant_id' => 2,
                'name' => 'POS',
                'status' => '1',
                'token' => 'EN6REh8PAChtwydEJGrKV6FreT9z5ErkjEdVvVS6fqfWF',
                'type' => 'pos',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}