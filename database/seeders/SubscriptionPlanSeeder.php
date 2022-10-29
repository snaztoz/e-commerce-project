<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'free',
                'price' => 0,
            ],
            [
                'name' => 'personal',
                'price' => 25000,
            ],
            [
                'name' => 'pro',
                'price' => 40000,
            ],
        ];

        foreach ($plans as $plan) {
            DB::table('subscription_plans')->insert($plan);
        }
    }
}
