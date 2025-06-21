<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'instructor',
        'duration',
        'level',
        'students',
        'rating',
        'video_url',
        'topics',
        'price',
        'is_active'
    ];

    protected $casts = [
        'topics' => 'array',
        'rating' => 'decimal:1',
        'price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class)->orderBy('order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByLevel($query, $level)
    {
        return $query->where('level', $level);
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->where(function ($q) use ($searchTerm) {
            $q->where('title', 'like', "%{$searchTerm}%")
              ->orWhere('description', 'like', "%{$searchTerm}%")
              ->orWhere('instructor', 'like', "%{$searchTerm}%");
              
            // For JSON search, we need to handle it differently based on database
            if (config('database.default') === 'mysql') {
                $q->orWhereRaw("JSON_SEARCH(topics, 'one', ?) IS NOT NULL", ["%{$searchTerm}%"]);
            } else {
                // For SQLite or other databases
                $q->orWhere('topics', 'like', "%{$searchTerm}%");
            }
        });
    }
}
