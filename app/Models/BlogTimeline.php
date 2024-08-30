<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTimeline extends Model
{
    use HasFactory;
    protected $table = 'blog_timeline';
    public function timelineItem()
    {
        return $this->belongsTo(Timeline::class);
    }
}
