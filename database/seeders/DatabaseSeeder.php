<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     RoleSeeder::class,
        //     BranchSeeder::class,
        //     UserSeeder::class,
        // ]);
        $this->call(ApiTokensTableSeeder::class);
        $this->call(OutletsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TreatmentTableSeeder::class);
        $this->call(TreatmentPositionTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
