<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (City::all() as $city) {
            Company::factory([
                'city_id' => $city->id,
            ])->count(5);
        }
    }
}
