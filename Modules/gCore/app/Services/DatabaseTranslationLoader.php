<?php

namespace Modules\GCore\Services;

use Illuminate\Translation\FileLoader;
use Illuminate\Filesystem\Filesystem;
use Modules\GCore\Repositories\TranslationRepository;

class DatabaseTranslationLoader extends FileLoader
{
    protected $translationRepository;

    public function __construct(Filesystem $files, string $path, TranslationRepository $translationRepository)
    {
        parent::__construct($files, $path);
        $this->translationRepository = $translationRepository;
    }

    public function load($locale, $group, $namespace = null)
    {
        $fileTranslations = parent::load($locale, $group, $namespace);

        if (is_null($namespace) || $namespace == '*') {
            $databaseTranslations = $this->translationRepository->findByLocaleAndGroup($locale, $group);

            // Merge database translations with file translations, giving precedence to database
            return array_merge($fileTranslations, $databaseTranslations->pluck('value', 'key')->toArray());
        }

        return $fileTranslations;
    }

    public function findByLocaleGroupAndKey(string $locale, string $group, string $key)
    {
        return $this->translationRepository->findByLocaleGroupAndKey($locale, $group, $key);
    }
}
