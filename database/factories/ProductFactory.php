<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [            
            'sku'=> $this->faker->sentence(),
            'name' => $this->faker->name(),
            'imagen' => $this->faker->url(),
            'stock' => $this->faker->randomDigit(1,50),
            'calificacion' => $this->faker->randomDigit(1,10), 
        ];

        

    }

    
    protected function name(): Attribute
    {
        return new Attribute(

            get: fn($value) => ucwords ($value),
            

            set:fn($value)=> strtolower($value)
                    
        );
    }
}
