<?php

namespace Modules\GCore\Repositories;

use Modules\GCore\Models\Translation;

class TranslationRepository
{
    public function all()
    {
        return Translation::all();
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
        return Translation::where('locale', $locale)
            ->where('group', $group)
            ->where('key', $key)
            ->first();
    }
}
