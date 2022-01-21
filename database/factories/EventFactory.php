<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */    

    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::slug($name);

        return [      
            'id' => Str::uuid(),                  
            'name' => $name,
            'slug' => $slug,
            'createdAt' => now(),
            'updatedAt' => now(),            
        ];
    }
}
