<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'category_id'];

    public function translations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(PostTranslation::class)->where('locale', app()->getLocale());
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeWithCurrentLocale($query)
    {
        return $query->with([
            'translation' => function ($q) {
                $q->where('locale', app()->getLocale());
            }
        ]);
    }

    public function getTranslatedTitleAttribute()
    {
        return $this->translation?->title
            ?? $this->translations->firstWhere('locale', config('app.fallback_locale'))?->title;
    }

    public function getTranslatedBodyAttribute()
    {
        return $this->translation?->body
            ?? $this->translations->firstWhere('locale', config('app.fallback_locale'))?->body;
    }
}
