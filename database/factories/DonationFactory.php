<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Donation;
use Illuminate\Support\Facades\Storage;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        $targetFund = $this->faker->numberBetween(1000000, 50000000);
        $collectedFund = $this->faker->numberBetween(0, $targetFund);
        return [
            'title' => $this->faker->sentence,
            'collected_fund' => $collectedFund,
            'target_fund' => $targetFund,
            'deadline' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'progress' => round(($collectedFund / $targetFund) * 100, 2),
            'image' => 'donations/' . $this->faker->image('storage/app/public/donations', 640, 480, null, false),
        ];
    }
}
