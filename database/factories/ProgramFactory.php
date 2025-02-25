<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class ProgramFactory extends Factory
{
    protected $model = \App\Models\Program::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => 'programs/' . $this->faker->image('storage/app/public/programs', 640, 480, null, false),
        ];
    }
}
