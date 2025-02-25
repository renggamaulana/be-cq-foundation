<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class EventFactory extends Factory
{
    protected $model = \App\Models\Event::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'studio' => $this->faker->company,
            'image' => 'events/' . $this->faker->image('storage/app/public/events', 640, 480, null, false),
            'date' => $this->faker->date,
            'day' => $this->faker->dayOfWeek,
            'time_start' => $this->faker->time,
            'time_end' => $this->faker->time,
            'live' => $this->faker->boolean,
        ];
    }
}
