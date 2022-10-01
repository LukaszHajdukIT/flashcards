<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Set
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'flashcard_id',
    ];

    public function flashcards()
    {
      return $this->hasMany('App\Flashcard');
    }
}
