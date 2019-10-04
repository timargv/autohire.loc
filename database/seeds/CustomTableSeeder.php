<?php

use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use Illuminate\Database\Seeder;

class CustomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(CarBrandsTableSeeder::class);
        $this->call(CarYearsTableSeeder::class);
        $this->call(CarAttributesTableSeeder::class);

        CarBrand::defaultOrder()->withDepth()->fixTree();
        Year::defaultOrder()->withDepth()->fixTree();

    }
}
