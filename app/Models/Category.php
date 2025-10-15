<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["slug"];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(CategoryTranslation::class)->where('locale', app()->getLocale());
    }

    public function getTranslatedNameAttribute()
    {
        return $this->translation?->name
            ?? $this->translations->firstWhere('locale', config('app.fallback_locale'))?->name;
    }
}
