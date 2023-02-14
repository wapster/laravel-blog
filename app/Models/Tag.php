<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use Sluggable;
    use Cviebrock\EloquentSluggable\Sluggable;

    public function posts()
    {
        return $this->belongToMany(
            Post::class,
            'post_tags',
            'tag_id',
            'post_id',
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
