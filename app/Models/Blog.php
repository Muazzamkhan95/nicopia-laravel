<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description', 'categories'];
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function timelines()
    {
        return $this->belongsToMany(Timeline::class);
    }
}
