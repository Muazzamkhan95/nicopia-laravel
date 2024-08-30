<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Project extends Model
{
    use HasFactory;
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    public function videoGalleries()
    {
        return $this->hasMany(VideoGallery::class);
    }
    public function timelines()
    {
        return $this->hasMany(Timeline::class);
    }

    public function blogTimeline()
    {
        return $this->hasManyThrough(BlogTimeline::class, Timeline::class);
    }
}
