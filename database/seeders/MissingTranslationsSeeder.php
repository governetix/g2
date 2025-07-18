<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GCore\Models\Translation;

class MissingTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // i18n.page.title
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'page.title', 'value' => 'Translations Management'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'page.title', 'value' => 'Gestión de Traducciones'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'page.title', 'value' => 'Gerenciamento de Traduções'],

            // i18n.button.add_new_translation
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'button.add_new_translation', 'value' => 'Add New Translation'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'button.add_new_translation', 'value' => 'Añadir Nueva Traducción'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'button.add_new_translation', 'value' => 'Adicionar Nova Tradução'],

            // i18n.button.upload_json
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'button.upload_json', 'value' => 'Upload JSON'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'button.upload_json', 'value' => 'Subir JSON'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'button.upload_json', 'value' => 'Carregar JSON'],

            // i18n.section.language_overview_title
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'section.language_overview_title', 'value' => 'Language Overview'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'section.language_overview_title', 'value' => 'Resumen de Idiomas'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'section.language_overview_title', 'value' => 'Visão Geral do Idioma'],

            // i18n.card.strings_translated
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'card.strings_translated', 'value' => 'strings translated'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'card.strings_translated', 'value' => 'cadenas traducidas'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'card.strings_translated', 'value' => 'strings traduzidas'],

            // i18n.section.missing_strings_title
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'section.missing_strings_title', 'value' => 'Missing Strings'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'section.missing_strings_title', 'value' => 'Cadenas Faltantes'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'section.missing_strings_title', 'value' => 'Strings Ausentes'],

            // i18n.missing_strings.description
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'missing_strings.description', 'value' => 'These strings are used in the application but are not yet translated.'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'missing_strings.description', 'value' => 'Estas cadenas se usan en la aplicación pero aún no están traducidas.'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'missing_strings.description', 'value' => 'Essas strings são usadas no aplicativo, mas ainda não foram traduzidas.'],

            // i18n.missing_strings.detected_count
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'missing_strings.detected_count', 'value' => 'missing strings detected'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'missing_strings.detected_count', 'value' => 'cadenas faltantes detectadas'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'missing_strings.detected_count', 'value' => 'strings ausentes detectadas'],

            // i18n.button.scan_missing_strings
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'button.scan_missing_strings', 'value' => 'Scan Missing Strings'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'button.scan_missing_strings', 'value' => 'Escanear Cadenas Faltantes'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'button.scan_missing_strings', 'value' => 'Escanear Strings Ausentes'],

            // i18n.section.all_translations_title
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'section.all_translations_title', 'value' => 'All Translations'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'section.all_translations_title', 'value' => 'Todas las Traducciones'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'section.all_translations_title', 'value' => 'Todas as Traduções'],

            // i18n.placeholder.search_text
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'placeholder.search_text', 'value' => 'Search translations...'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'placeholder.search_text', 'value' => 'Buscar traducciones...'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'placeholder.search_text', 'value' => 'Pesquisar traduções...'],

            // i18n.filter.group_option_default
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.group_option_default', 'value' => 'Filter by Group'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.group_option_default', 'value' => 'Filtrar por Grupo'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.group_option_default', 'value' => 'Filtrar por Grupo'],

            // i18n.filter.group_gcore
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.group_gcore', 'value' => 'Core Module'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.group_gcore', 'value' => 'Módulo Core'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.group_gcore', 'value' => 'Módulo Core'],

            // i18n.filter.group_auth
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.group_auth', 'value' => 'Authentication'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.group_auth', 'value' => 'Autenticación'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.group_auth', 'value' => 'Autenticação'],

            // i18n.filter.group_validation
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.group_validation', 'value' => 'Validation'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.group_validation', 'value' => 'Validación'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.group_validation', 'value' => 'Validação'],

            // i18n.filter.status_option_default
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.status_option_default', 'value' => 'Filter by Status'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.status_option_default', 'value' => 'Filtrar por Estado'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.status_option_default', 'value' => 'Filtrar por Status'],

            // i18n.filter.status_incomplete
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.status_incomplete', 'value' => 'Incomplete'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.status_incomplete', 'value' => 'Incompleto'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.status_incomplete', 'value' => 'Incompleto'],

            // i18n.filter.status_complete
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'filter.status_complete', 'value' => 'Complete'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'filter.status_complete', 'value' => 'Completo'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'filter.status_complete', 'value' => 'Completo'],

            // i18n.table.header.key
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'table.header.key', 'value' => 'Key'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'table.header.key', 'value' => 'Clave'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'table.header.key', 'value' => 'Chave'],

            // i18n.table.header.group
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'table.header.group', 'value' => 'Group'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'table.header.group', 'value' => 'Grupo'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'table.header.group', 'value' => 'Grupo'],

            // i18n.table.header.english
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'table.header.english', 'value' => 'English'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'table.header.english', 'value' => 'Inglés'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'table.header.english', 'value' => 'Inglês'],

            // i18n.table.header.spanish
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'table.header.spanish', 'value' => 'Spanish'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'table.header.spanish', 'value' => 'Español'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'table.header.spanish', 'value' => 'Espanhol'],

            // i18n.table.header.portuguese
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'table.header.portuguese', 'value' => 'Portuguese'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'table.header.portuguese', 'value' => 'Portugués'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'table.header.portuguese', 'value' => 'Português'],

            // i18n.pagination.previous
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'pagination.previous', 'value' => 'Previous'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'pagination.previous', 'value' => 'Anterior'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'pagination.previous', 'value' => 'Anterior'],

            // gcore::i18n.pagination.next
            ['locale' => 'en', 'group' => 'i18n', 'key' => 'pagination.next', 'value' => 'Next'],
            ['locale' => 'es', 'group' => 'i18n', 'key' => 'pagination.next', 'value' => 'Siguiente'],
            ['locale' => 'pt', 'group' => 'i18n', 'key' => 'pagination.next', 'value' => 'Próximo'],
        ];

        foreach ($translations as $translationData) {
            Translation::firstOrCreate(
                ['locale' => $translationData['locale'], 'group' => $translationData['group'], 'key' => $translationData['key']],
                ['value' => $translationData['value']]
            );
        }
    }
}