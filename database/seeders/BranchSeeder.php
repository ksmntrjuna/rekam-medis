<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new Outlet();
        $outlet->code = 'pusat';
        $outlet->outlet_name = 'Pusat';
        $outlet->outlet_address = 'Jogja';
        $outlet->save();
    }
}
