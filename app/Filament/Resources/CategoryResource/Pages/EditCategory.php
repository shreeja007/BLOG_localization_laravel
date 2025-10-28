<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $translations = $data['translations'];
        unset($data['translations']);

        $english = $translations['en']['name'] ?? 'untitled';
        $data['slug'] = Str::slug($english);

        $this->record->update($data);

        $this->record->translations()->delete();
        foreach ($translations as $translation) {
            $this->record->translations()->create($translation);
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $translations = [];

        foreach ($this->record->translations as $translation) {
            $translations[$translation->locale] = [
                'locale' => $translation->locale,
                'name' => $translation->name,
            ];
        }

        $data['translations'] = $translations;

        return $data;
    }

}
