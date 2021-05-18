<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model implements HasMedia
{
    use HasFactory, Commentable, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'published', 'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $guarded = ['image'];

    public function children()
    {
        return $this->HasMany(self::class, 'parent_id');
    }

    public function categories()
    {
        return $this->morphToMany(Commentable::class, 'categoryable');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40), '_');
    }

}
