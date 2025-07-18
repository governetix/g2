<?php

namespace Modules\GCore\Repositories;

use Modules\GCore\Models\Translation;
use Illuminate\Support\Collection; // Asegúrate de que esta línea esté presente

class TranslationRepository
{
    public function all()
    {
        return Translation::all();
    }

    public function getAllGrouped(): Collection
    {
        $translations = Translation::all();
        // --- LÍNEA DE DEPURACIÓN 1 ---
        // dd($translations->count()); // ¿Cuántos registros trae Translation::all()?

        $grouped = $translations->groupBy(function ($item) {
            return $item->group . '.' . $item->key;
        });
        // --- LÍNEA DE DEPURACIÓN 2 ---
        // dd($grouped->count()); // ¿Cuántos grupos únicos se formaron?

        $formattedTranslations = collect();
        foreach ($grouped as $keyIdentifier => $translationGroup) {
            $formattedTranslation = [
                'group' => $translationGroup->first()->group,
                'key' => $translationGroup->first()->key,
            ];
            foreach ($translationGroup as $translation) {
                $formattedTranslation[$translation->locale] = $translation->value;
            }
            $formattedTranslations->push($formattedTranslation);
        }
        // --- LÍNEA DE DEPURACIÓN 3 ---
        // dd($formattedTranslations->count()); // ¿Cuántos ítems finales hay en la colección formateada?
        // dd($formattedTranslations); // Para ver el contenido de la colección

        return $formattedTranslations;
    }

    public function find($id)
    {
        return Translation::find($id);
    }

    public function create(array $data)
    {
        return Translation::create($data);
    }

    public function update($id, array $data)
    {
        $translation = Translation::find($id);
        if ($translation) {
            $translation->update($data);
            return $translation;
        }
        return null;
    }

    public function delete($id)
    {
        $translation = Translation::find($id);
        if ($translation) {
            $translation->delete();
            return true;
        }
        return false;
    }

    public function findByLocaleGroupAndKey(string $locale, string $group, string $key)
    {
        $query = Translation::where('locale', $locale)
            ->where('group', $group);

        if ($key !== '*') {
            $query->where('key', $key);
        }

        return $query->first();
    }

    public function findByLocaleAndGroup(string $locale, string $group)
    {
        $query = Translation::where('locale', $locale);

        if ($group !== '*') {
            $query->where('group', $group);
        }

        return $query->get();
    }
}
