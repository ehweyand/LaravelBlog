<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Para utilizar o slug, usar o trait

class Post extends Model {
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title','slug','description','image_path', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    // Slug
    //Exige o retorno como um array
    //Gera um slug do title
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
