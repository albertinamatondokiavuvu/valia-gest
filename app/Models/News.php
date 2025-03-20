<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{

    use HasFactory;
    protected $guarded=['id'];
    protected $casts = [
        'imanges_opcional' => 'array',
    ];

protected $dates = [
    'date', // Isso converte automaticamente o campo para Carbon
];

// Garanta que o slug seja gerado automaticamente
protected static function boot()
{
    parent::boot();

    static::creating(function ($news) {
        $news->slug = self::generateUniqueSlug($news->titulo);
    });

    static::updating(function ($news) {
        if ($news->isDirty('titulo')) {
            $news->slug = self::generateUniqueSlug($news->titulo, $news->id);
        }
    });
}

private static function generateUniqueSlug($title, $id = null)
{
    $slug = Str::slug($title);
    $counter = 1;
    $originalSlug = $slug;

    while (News::where('slug', $slug)->where('id', '!=', $id)->exists()) {
        $slug = $originalSlug . '-' . $counter;
        $counter++;
    }

    return $slug;
}
}
