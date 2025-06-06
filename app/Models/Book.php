<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'faculty',
        'specialty',
        'subject',
        'image',
        'isbn',
        'summary',
    ];
    public function borrows(): HasMany
    {
        return $this->hasMany(Borrow::class);
    }
}
