<?php

namespace Database\Seeders;

use App\Models\IpInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class IpInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IpInfo::factory(10)->create()->each(function($ur_info) {
            $ur_info->user()->save(User::factory()->make([
                'role_id' => 5
            ]));
        });
    }
}
