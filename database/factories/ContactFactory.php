<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Contact::class;

    public function definition()
    {
        return [
            'address' => $this->faker->text(),
            'mobile' => $this->faker->regexify('09[0-9]{9}'),
            'email' => $this->faker->unique()->safeEmail(),
            'youtube_link' => $this->faker->url(),
            'facebook_link' => $this->faker->url(),
            'instagram_link' => $this->faker->url(),
            'twitter_link' => $this->faker->url(),
            'linkedin_link' => $this->faker->url(),
        ];
    }
}
