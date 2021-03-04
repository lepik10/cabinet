<?php

namespace Database\Factories;

use App\Models\FizInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Traits\Factory\File;

class FizInfoFactory extends Factory
{
    use File;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FizInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $num = 0;
        $num++;
        return [
            'birth_date' => $this->faker->date('d/m/Y', 'now'),
            'birth_place' => $this->faker->realText(100),
            'citizenship' => $this->faker->realText(10),
            'passport_ser' => rand(1000, 9999),
            'passport_num' => rand(100000, 999999),
            'passport_who' => $this->faker->realText(100),
            'passport_date' => $this->faker->date('d/m/Y', 'now'),
            'inn' => rand(100000000000, 999999999999),
            'snils' => rand(10000000000, 99999999999),
            'address_reg' => $this->faker->realText(100),
            'address_prozh' => $this->faker->realText(100),
            'phone' => '+7 (999) 999-99-99',
            'doc_copiya_passport' => $this->setFile(rand(1000, 9999) . '.txt', $num, FizInfo::$doc_folder_name),
            'doc_copiya_inn' => $this->setFile(rand(1000, 9999) . '.txt', $num, FizInfo::$doc_folder_name),
            'doc_copiya_snils' => $this->setFile(rand(1000, 9999) . '.txt', $num, FizInfo::$doc_folder_name),
            'doc_doverennost' => $this->setFile(rand(1000, 9999) . '.txt', $num, FizInfo::$doc_folder_name),
        ];
    }
}
