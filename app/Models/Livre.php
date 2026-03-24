<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $table = 'livre';

    protected $fillable = [
        'title',
        'description',
        'isbn',
        'auteur',
        'category_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
