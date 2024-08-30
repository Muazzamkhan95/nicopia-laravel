<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $fillable = ['timeline_year'];
    // public function blogs()
    // {
    //     return $this->belongsToMany(Blog::class);
    // }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_timeline');
    }
}
