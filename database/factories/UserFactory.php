<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'data_nascimento' => $this->faker->date,
            'cpf' => $this->faker->unique()->numerify('###########'),
            'cep' => $this->faker->postcode,
            'endereco' => $this->faker->streetAddress,
            'estado' => $this->faker->state,
            'cidade' => $this->faker->city,
            'bairro' => $this->faker->word,
            'numero' => $this->faker->buildingNumber,
            'complemento' => $this->faker->secondaryAddress,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Define uma senha padrão (criptografada) para todos os usuários
        ];
    }
}
