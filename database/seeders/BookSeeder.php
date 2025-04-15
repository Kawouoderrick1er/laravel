<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Livre 1',
            'author' => 'Auteur 1',
            'faculty' => 'Filière 1',
            'specialty' => 'Spécialité 1',
            'subject' => 'Matière 1',
            'image' => 'images/book1.jpg',
            'isbn' => '978-1234567890',
            'summary' => 'Résumé du livre 1',
        ]);

        Book::create([
            'title' => 'Livre 2',
            'author' => 'Auteur 2',
            'faculty' => 'Filière 2',
            'specialty' => 'Spécialité 2',
            'subject' => 'Matière 2',
            'image' => 'images/book2.jpg',
            'isbn' => '978-0987654321',
            'summary' => 'Résumé du livre 2',
        ]);

        Book::create([
            'title' => 'Livre 3',
            'author' => 'Auteur 3',
            'faculty' => 'Filière 3',
            'specialty' => 'Spécialité 3',
            'subject' => 'Matière 3',
            'image' => 'images/book3.jpg',
            'isbn' => '978-1122334455',
            'summary' => 'Résumé du livre 3',
        ]);

         Book::create([
            'title' => 'Livre 4',
            'author' => 'Auteur 4',
            'faculty' => 'Filière 4',
            'specialty' => 'Spécialité 4',
            'subject' => 'Matière 4',
            'image' => 'images/book4.jpg',
            'isbn' => '978-1122334455',
            'summary' => 'Résumé du livre 4',
        ]);

         Book::create([
            'title' => 'Livre 5',
            'author' => 'Auteur 5',
            'faculty' => 'Filière 5',
            'specialty' => 'Spécialité 5',
            'subject' => 'Matière 5',
            'image' => 'images/book5.jpg',
            'isbn' => '978-1122334455',
            'summary' => 'Résumé du livre 5',
        ]);

          Book::create([
            'title' => 'Livre 6',
            'author' => 'Auteur 6',
            'faculty' => 'Filière 6',
            'specialty' => 'Spécialité 6',
            'subject' => 'Matière 6',
            'image' => 'images/book6.jpg',
            'isbn' => '978-1122334455',
            'summary' => 'Résumé du livre 6',
        ]);
        // Vous pouvez ajouter d'autres livres ici
    }
}
