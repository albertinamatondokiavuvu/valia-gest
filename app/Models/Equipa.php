<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Equipa extends Model
{
    use HasFactory;
    protected $guarded=['id'];

protected $dates = [
    'date', // Isso converte automaticamente o campo para Carbon
];
// Garanta que o slug seja gerado automaticamente
protected static function boot()
{
    parent::boot();

    static::creating(function ($equipas) {
        $equipas->slug = self::generateUniqueSlug($equipas->nome);
    });

    static::updating(function ($equipas) {
        if ($equipas->isDirty('nome')) {
            $equipas->slug = self::generateUniqueSlug($equipas->nome, $equipas->id);
        }
    });
}

private static function generateUniqueSlug($title, $id = null)
{
    $slug = Str::slug($title);
    $counter = 1;
    $originalSlug = $slug;

    while (equipa::where('slug', $slug)->where('id', '!=', $id)->exists()) {
        $slug = $originalSlug . '-' . $counter;
        $counter++;
    }

    return $slug;
}
}
