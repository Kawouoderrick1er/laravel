<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // N'oubliez pas de hasher le mot de passe
        ]);
         User::factory()->count(5)->create(); // ajoute 5 utilisateurs

    }
}

// *   `User::create()`: Crée un utilisateur admin.
// *   `Hash::make('password')`:  Hashe le mot de passe avant de l'enregistrer.
// * `User::factory()->count(5)->create()`: On utilise une factory pour creer 5 utilisateurs supplementaires
