<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class PartnerFactory extends Factory
{
    protected $model = \App\Models\Partner::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'image' => 'partners/' . $this->faker->image('storage/app/public/partners', 640, 480, null, false),
        ];
    }
}
