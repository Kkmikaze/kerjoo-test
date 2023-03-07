<?php

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
        factory(App\Models\User::class, 5)->create()->each(function ($user) {
            $annualLeaves = factory(App\Models\AnnualLeave::class)->make();
            $user->annualLeaves()->save($annualLeaves);

            $annualLeaveDates = factory(App\Models\AnnualLeaveDate::class, 5)->make();
            $annualLeaves->annualLeaveDates()->saveMany($annualLeaveDates);
        });
    }
}
