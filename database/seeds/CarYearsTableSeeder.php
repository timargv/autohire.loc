<?php

use App\Entity\Categories\Car\Year;
use Illuminate\Database\Seeder;

class CarYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create(['name' => 2019, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2019')]);
        Year::create(['name' => 2018, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2018')]);
        Year::create(['name' => 2017, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2017')]);
        Year::create(['name' => 2016, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2016')]);
        Year::create(['name' => 2015, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2015')]);
        Year::create(['name' => 2014, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2014')]);
        Year::create(['name' => 2013, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2013')]);
        Year::create(['name' => 2012, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2012')]);
        Year::create(['name' => 2011, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2011')]);
        Year::create(['name' => 2010, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2010')]);
        Year::create(['name' => 2009, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2009')]);
        Year::create(['name' => 2008, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2008')]);
        Year::create(['name' => 2007, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2007')]);
        Year::create(['name' => 2006, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2006')]);
        Year::create(['name' => 2005, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2005')]);
        Year::create(['name' => 2004, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2004')]);
        Year::create(['name' => 2003, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2003')]);
        Year::create(['name' => 2002, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2002')]);
        Year::create(['name' => 2001, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2001')]);
        Year::create(['name' => 2000, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2000')]);
        Year::create(['name' => 1999, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1999')]);
        Year::create(['name' => 1998, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1998')]);
        Year::create(['name' => 1997, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1997')]);
        Year::create(['name' => 1996, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1996')]);
        Year::create(['name' => 1995, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1995')]);
        Year::create(['name' => 1994, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1994')]);
        Year::create(['name' => 1993, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1993')]);
        Year::create(['name' => 1992, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1992')]);
        Year::create(['name' => 1991, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1991')]);
        Year::create(['name' => 1990, 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1990')]);


    }
}
