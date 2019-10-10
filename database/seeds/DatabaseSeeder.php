<?php

use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
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
        $this->call(UsersTableSeeder::class);
        $this->call(TenantsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(CarBrandsTableSeeder::class);
        $this->call(CarYearsTableSeeder::class);
        $this->call(CarAttributesTableSeeder::class);

        CarBrand::defaultOrder()->withDepth()->fixTree();
        Year::defaultOrder()->withDepth()->fixTree();

        $this->call(CarAdvertsTableSeeder::class);
//        $this->call(PhotoCarAdvertsTableSeeder::class);

    }
}
