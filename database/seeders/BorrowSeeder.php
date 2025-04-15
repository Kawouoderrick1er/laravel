<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérer un utilisateur et un livre existants
        $user = User::first();
        $book = Book::first();

        if ($user && $book) {
            // Créer un emprunt
            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'borrow_date' => now(),
                'return_date' => now()->addDays(14), // Retour prévu dans 14 jours
            ]);
        }
    }
}

// Pour le moment, nous allons creer un emprunt.
// User::first(): On prend le premier utilisateur.
// Book::first(): On prend le premier livre.
// now(): Permet d'avoir la date du jour.
// now()->addDays(14): Permet d'ajouter 14 jours à la date du jour.