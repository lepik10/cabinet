<?php

namespace Database\Seeders;

use App\Models\UrInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class UrInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UrInfo::factory(10)->create()->each(function($ur_info) {
            $ur_info->user()->save(User::factory()->make([
                'role_id' => 4
            ]));
        });
    }
}
