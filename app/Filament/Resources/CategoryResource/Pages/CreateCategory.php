<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Models\Category;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $translations = $data['translations'];
        unset($data['translations']);

        // Auto-generate slug from English name
        $english = $translations['en']['name'] ?? 'untitled';
        $data['slug'] = Str::slug($english);

        $this->record = Category::create($data);

        foreach ($translations as $translation) {
            $this->record->translations()->create($translation);
        }

        return $data;
    }
}
