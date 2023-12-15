<?php

namespace Database\Factories;
// use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserRoleFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserRole::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'code' => strtolower($this->faker->unique()->word()),
            'permissions' => $this->faker->word(),
            'status' => $this->faker->randomElement($array = array('0','1')),
            // 'created_by' => $this->faker->randomElement($users),
            // 'updated_by' => $this->faker->randomElement($users),
        ];
    }
}
