<?php

namespace Database\Factories;

use App\Models\UrInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Traits\Factory\File;

class UrInfoFactory extends Factory
{
    use File;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UrInfo::class;

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
            'name_full' => $this->faker->name,
            'kpp' => rand(100000000000, 999999999999),
            'ogrn' => rand(100000000000, 999999999999),
            'inn' => rand(100000000000, 999999999999),
            'address_ur' => $this->faker->realText(50),
            'address_fact' => $this->faker->realText(50),
            'bank_name' => $this->faker->realText(50),
            'dolzhnost_fio' => $this->faker->realText(10),
            'bank_rc' => rand(100000000000, 999999999999),
            'bank_kc' => rand(100000000000, 999999999999),
            'bank_bik' => rand(100000000000, 999999999999),
            'phone' => '+7 (999) 999-99-99',
            'contact_name' => $this->faker->name,
            'contact_phone' => '+7 (999) 999-99-99',
            'doc_copiya_inn' => $this->setFile(rand(1000, 9999) . '.txt', $num, UrInfo::$doc_folder_name),
            'doc_ogrn' => $this->setFile(rand(1000, 9999) . '.txt', $num, UrInfo::$doc_folder_name),
            'doc_egrul' => $this->setFile(rand(1000, 9999) . '.txt', $num, UrInfo::$doc_folder_name),
            'doc_copiya_polnomoch' => $this->setFile($this->faker->company() . '.txt', $num, UrInfo::$doc_folder_name),
        ];
    }
}
