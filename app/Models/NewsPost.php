<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'content',
        'status',
        'user_id'
    ];
    public function categories()
    {
        return  $this->belongsToMany(Category::class)->withTimestamps();
    }
    public function scopePublish($query)
    {
        return $query->where('status', 'publish');
    }
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }
    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%{$title}%");
    }
}
