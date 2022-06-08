<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $filePath = public_path('img');

        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'ci' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'profesion_id'=>$this->faker->numberBetween(1,15),
            'fotografia'=>$this->faker->image($filePath,100,100,null,false,true),
            
        ];
    }
}
