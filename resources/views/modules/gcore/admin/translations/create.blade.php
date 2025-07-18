@extends('gcore::admin.layouts.master')

@php
    $errors = $errors ?? new \Illuminate\Support\ViewErrorBag();
@endphp

@section('content')
    <x-gcore::section class="py-8">
        <div class="container mx-auto px-4">
            <x-gcore::flex justify="between" align="start" class="mb-6 flex-col md:flex-row">
                <x-gcore::heading level="h1" text="{{ __('i18n.new_term.form_title') }}" class="mb-4 md:mb-0" />
            </x-gcore::flex>

            <x-gcore::card>
                <form action="{{ route('admin.core.translations.store') }}" method="POST">
                    @csrf

                    <x-gcore::form-input
                        name="key"
                        label="{{ __('i18n.new_term.key_label') }}"
                        type="text"
                        value="{{ old('key') }}"
                        placeholder="{{ __('i18n.new_term.key_placeholder') }}"
                        required
                    />
                    <x-gcore::form-error :messages="$errors->get('key')" />

                    <x-gcore::form-select
                        name="group"
                        label="{{ __('i18n.new_term.group_label') }}"
                        {{-- Se corrigió la forma en que se pasan las opciones. --}}
                        {{-- Ahora se espera un array asociativo donde la clave es el valor y el elemento es la etiqueta. --}}
                        :options="['i18n' => 'i18n']"
                        value="{{ old('group') }}"
                        required
                    />
                    <x-gcore::form-error :messages="$errors->get('group')" />

                    <!-- Section for dynamic language fields -->
                    <div id="language-fields-container" class="mt-6 border-t border-gray-200 pt-6">
                        <h2 class="text-lg font-semibold mb-4">{{ __('i18n.new_term.languages_section_title') }}</h2>
                        <!-- Initial language fields will be added here, or dynamically via JS -->
                        <!-- For now, let's add a placeholder for English and Spanish -->
                        <x-gcore::form-textarea
                            name="translations[en]"
                            label="English (en)"
                            rows="3"
                            placeholder="Enter translation for English"
                        >{{ old('translations.en', '') }}</x-gcore::form-textarea>
                        <x-gcore::form-error :messages="$errors->get('translations.en')" />

                        <x-gcore::form-textarea
                            name="translations[es]"
                            label="Español (es)"
                            rows="3"
                            placeholder="Enter translation for Spanish"
                        >{{ old('translations.es', '') }}</x-gcore::form-textarea>
                        <x-gcore::form-error :messages="$errors->get('translations.es')" />
                    </div>

                    <x-gcore::flex justify="end" class="mt-6">
                        <x-gcore::button variant="secondary" href="{{ route('admin.core.translations.index') }}" class="mr-3">
                            {{ __('i18n.new_term.cancel_button') }}
                        </x-gcore::button>
                        <x-gcore::button type="submit" variant="primary">
                            {{ __('i18n.new_term.save_button') }}
                        </x-gcore::button>
                    </x-gcore::flex>
                </form>
            </x-gcore::card>
        </div>
    </x-gcore::section>
@endsection
