<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class I18nKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.form_title', 'value' => 'Create New Translation'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.form_title', 'value' => 'Crear Nueva Traducción'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.key_label', 'value' => 'Key'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.key_label', 'value' => 'Clave'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.key_placeholder', 'value' => 'e.g., welcome_message'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.key_placeholder', 'value' => 'ej., mensaje_bienvenida'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.group_label', 'value' => 'Group'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.group_label', 'value' => 'Grupo'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.cancel_button', 'value' => 'Cancel'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.cancel_button', 'value' => 'Cancelar'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.save_button', 'value' => 'Save'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.save_button', 'value' => 'Guardar'],
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'new_term.languages_section_title', 'value' => 'Translations by Language'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'new_term.languages_section_title', 'value' => 'Traducciones por Idioma'],
        ];

        foreach ($translations as $translation) {
            \Modules\GCore\Models\Translation::create($translation);
        }
    }
}
