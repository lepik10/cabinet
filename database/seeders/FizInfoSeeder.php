<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\FizInfo;

class FizInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FizInfo::factory(10)->create()->each(function($fiz_info) {
            $fiz_info->user()->save(User::factory()->make([
                'role_id' => 3
            ]));
        });
    }
}
