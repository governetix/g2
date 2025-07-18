<?php
// Prepare the rows data for the x-gcore::table component
// Prepara los datos de las filas para el componente x-gcore::table
// Aseguramos que $translations sea un paginador y mapeamos sus ítems.
// We ensure $translations is a paginator and map its items.
$tableRows = collect($translations->items())->map(function ($translation) {
    // The $translation here is already a grouped array from the repository
    // e.g., ['group' => 'i18n', 'key' => 'new_term.form_title', 'en' => '...', 'es' => '...', 'pt' => '...']

    // For now, action buttons are removed as they operate on single IDs, not grouped keys.
    // If editing/deleting grouped translations is needed, a different approach is required.

    return [
        $translation['key'],
        $translation['group'],
        $translation['en'] ?? '', // Use null coalescing operator for locales that might not exist
        $translation['es'] ?? '',
        $translation['pt'] ?? '',
        // No actions column for now
    ];
})->all(); // Use all() to get a plain array
?>

@extends('gcore::admin.layouts.master')

@section('content')
    {{-- Cache Buster: {{ now()->timestamp }} --}}
    <x-gcore::section class="py-8">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <x-gcore::flex justify="between" align="center" class="mb-10 flex-col md:flex-row bg-gradient-to-r from-blue-500 to-indigo-600 p-10 rounded-2xl shadow-xl text-white">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <x-gcore::heading level="h1" text="{{ __('i18n.page.title') }} (Current Locale: {{ App::getLocale() }})" class="text-5xl font-extrabold leading-tight mb-3 drop-shadow-lg" />
                    <p class="text-blue-100 text-lg opacity-90">Gestión centralizada de todas tus traducciones.</p>
                </div>
                <x-gcore::flex gap="4" class="flex-col sm:flex-row mt-6 md:mt-0">
                    <x-gcore::button variant="light" :outline="false" class="transform hover:scale-105 transition-all duration-300 ease-in-out px-8 py-3 text-lg font-bold shadow-lg">
                        {{ __('i18n.button.add_new_translation') }}
                    </x-gcore::button>
                    <x-gcore::button variant="secondary" :outline="false" class="transform hover:scale-105 transition-all duration-300 ease-in-out px-8 py-3 text-lg font-bold shadow-lg" disabled>
                        {{ __('i18n.button.upload_json') }}
                    </x-gcore::button>
                </x-gcore::flex>
            </x-gcore::flex>

            <!-- Language Overview Section -->
            <x-gcore::card title="{{ __('i18n.section.language_overview_title') }}" class="mb-8">
                <x-gcore::grid columns="1 sm:grid-cols-2 lg:grid-cols-3" gap="6">
                    <!-- Language Card: Español -->
                    <x-gcore::card class="border border-gray-200 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow duration-300">
                        <x-gcore::heading level="h3" text="Español (ES)" class="mb-2 text-lg font-semibold text-gray-800" />
                        <x-gcore::progress-bar value="{{ $percentages['es'] }}" max="100" variant="success" show-label class="mb-2" />
                        <p class="text-sm text-gray-600 mb-1">{{ $percentages['es'] }}% {{ app('translator')->get('gcore::i18n.card.completed_percentage') }}</p>
                        <p class="text-sm text-gray-600">{{ $translatedCounts['es'] }}/{{ $totalUniqueStrings }} {{ __('i18n.card.strings_translated') }}</p>
                    </x-gcore::card>

                    <!-- Language Card: English -->
                    <x-gcore::card class="border border-gray-200 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow duration-300">
                        <x-gcore::heading level="h3" text="English (EN)" class="mb-2 text-lg font-semibold text-gray-800" />
                        <x-gcore::progress-bar value="{{ $percentages['en'] }}" max="100" variant="warning" show-label class="mb-2" />
                        <p class="text-sm text-gray-600 mb-1">{{ $percentages['en'] }}% {{ app('translator')->get('gcore::i18n.card.completed_percentage') }}</p>
                        <p class="text-sm text-gray-600">{{ $translatedCounts['en'] }}/{{ $totalUniqueStrings }} {{ __('i18n.card.strings_translated') }}</p>
                    </x-gcore::card>

                    <!-- Language Card: Português -->
                    <x-gcore::card class="border border-gray-200 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow duration-300">
                        <x-gcore::heading level="h3" text="Português (BR)" class="mb-2 text-lg font-semibold text-gray-800" />
                        <x-gcore::progress-bar value="{{ $percentages['pt'] }}" max="100" variant="danger" show-label class="mb-2" />
                        <p class="text-sm text-gray-600 mb-1">{{ $percentages['pt'] }}% {{ app('translator')->get('gcore::i18n.card.completed_percentage') }}</p>
                        <p class="text-sm text-gray-600">{{ $translatedCounts['pt'] }}/{{ $totalUniqueStrings }} {{ __('i18n.card.strings_translated') }}</p>
                    </x-gcore::card>
                </x-gcore::grid>
            </x-gcore::card>

            <!-- Missing Translations Section -->
            <x-gcore::alert type="warning" class="mb-8 p-6 rounded-lg shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                <div>
                    <x-gcore::heading level="h2" text="{{ __('i18n.section.missing_strings_title') }}" class="text-yellow-800 mb-2 text-2xl font-semibold" />
                    <p class="text-yellow-700">{{ __('i18n.missing_strings.description') }}</p>
                    <p class="text-yellow-700 font-bold mt-2">{{ $missingStringsCount }} {{ __('i18n.missing_strings.detected_count') }}</p>
                </div>
                <x-gcore::button variant="warning" :outline="false" class="mt-4 md:mt-0 transform hover:scale-105 transition-all duration-300 ease-in-out" disabled>
                    {{ __('i18n.button.scan_missing_strings') }}
                </x-gcore::button>
            </x-gcore::alert>

            <!-- Translations Table Section -->
            <div>
                <x-gcore::heading level="h2" text="{{ __('i18n.section.all_translations_title') }}" class="mb-4 text-2xl font-semibold" />

                <!-- Search and Filters -->
                <x-gcore::flex gap="4" class="mb-6 flex-col md:flex-row">
                    <x-gcore::form-input name="search_query" type="text" placeholder="{{ __('i18n.placeholder.search_text') }}" class="flex-grow shadow-sm" disabled />
                    <x-gcore::form-select name="group_filter" class="shadow-sm" disabled :options="[
                        '' => __('i18n.filter.group_option_default'),
                        'gcore' => __('i18n.filter.group_gcore'),
                        'auth' => __('i18n.filter.group_auth'),
                        'validation' => __('i18n.filter.group_validation')
                    ]" />
                    <x-gcore::form-select name="status_filter" class="shadow-sm" disabled :options="[
                        '' => __('i18n.filter.status_option_default'),
                        'incomplete' => __('i18n.filter.status_incomplete'),
                        'complete' => __('i18n.filter.status_complete')
                    ]" />
                </x-gcore::flex>

                <!-- Table -->
                <x-gcore::table class="min-w-full divide-y divide-gray-200" striped hoverable responsive :headers="[
                    __('i18n.table.header.key'),
                    __('i18n.table.header.group'),
                    __('i18n.table.header.english'),
                    __('i18n.table.header.spanish'),
                    __('i18n.table.header.portuguese')
                ]" :rows="$tableRows" />

                <!-- Pagination -->
                <x-gcore::flex justify="center" class="mt-6">
                    {{ $translations->links('gcore::components.pagination') }}
                </x-gcore::flex>
            </div>
        </div>
    </x-gcore::section>
@endsection
