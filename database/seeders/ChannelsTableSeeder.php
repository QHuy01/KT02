<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('CHANNEL')->insert([
                'ChannelName' => $faker->company,
                'Description' => $faker->sentence,
                'SubscribersCount' => $faker->numberBetween(1000, 10000),
                'URL' => $faker->url,
                'Created_At' => now(),
                'Update_At' => now()
            ]);
        }
    }
}
