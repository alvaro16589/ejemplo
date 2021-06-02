<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        return [
            'nombre'=> $this->faker->firstName('male'|'female'),
            'apellidoPaterno'=> $this->faker->firstName(),
            'apellidoMaterno'=> $this->faker->lastName(),
            'ci'=> $this->faker->randomNumber(),
            'sexo'=> $this->faker->randomElement(["Masculino","Femenino"])
        ];
    }
}
