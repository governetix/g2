@extends('gcore::admin.layouts.master')

@section('content')
    <x-gcore::section class="py-8">
        <div class="container mx-auto px-4">
            <x-gcore::heading level="h1" text="Configuración de Formularios" class="text-center mb-8" />

            <x-gcore::grid columns="1" gap="6">
                <x-gcore::card title="Ejemplos de Campos de Entrada" class="shadow-lg">
                    <form class="space-y-6">
                        <x-gcore::grid columns="1 md:grid-cols-2" gap="6">
                            <div>
                                <x-gcore::form-label for="text_input" value="Campo de Texto:" />
                                <x-gcore::form-input name="text_input" id="text_input" type="text" placeholder="Introduce texto aquí" class="mt-1 block w-full" />
                                <x-gcore::form-error :errors="$errors" field="text_input" />
                            </div>

                            <div>
                                <x-gcore::form-label for="email_input" value="Campo de Email:" />
                                <x-gcore::form-input name="email_input" id="email_input" type="email" placeholder="tu@ejemplo.com" required class="mt-1 block w-full" />
                                <x-gcore::form-error :errors="$errors" field="email_input" />
                            </div>

                            <div>
                                <x-gcore::form-label for="password_input" value="Campo de Contraseña:" />
                                <x-gcore::form-input name="password_input" id="password_input" type="password" placeholder="Contraseña" class="mt-1 block w-full" />
                                <x-gcore::form-error :errors="$errors" field="password_input" />
                            </div>

                            <div>
                                <x-gcore::form-label for="number_input" value="Campo Numérico:" />
                                <x-gcore::form-input name="number_input" id="number_input" type="number" value="123" class="mt-1 block w-full" />
                                <x-gcore::form-error :errors="$errors" field="number_input" />
                            </div>

                            <div>
                                <x-gcore::form-label for="disabled_input" value="Campo Deshabilitado:" />
                                <x-gcore::form-input name="disabled_input" id="disabled_input" type="text" value="Este campo está deshabilitado" disabled class="mt-1 block w-full" />
                            </div>

                            <div>
                                <x-gcore::form-label for="readonly_input" value="Campo de Solo Lectura:" />
                                <x-gcore::form-input name="readonly_input" id="readonly_input" type="text" value="Este campo es de solo lectura" readonly class="mt-1 block w-full" />
                            </div>
                        </x-gcore::grid>

                        <x-gcore::divider class="my-6" />

                        <x-gcore::grid columns="1 md:grid-cols-2" gap="6">
                            <div>
                                <x-gcore::form-label for="textarea_input" value="Área de Texto:" />
                                <x-gcore::form-textarea name="textarea_input" id="textarea_input" placeholder="Escribe tu mensaje aquí..." rows="4" class="mt-1 block w-full">Contenido predefinido</x-gcore::form-textarea>
                            </div>

                            <div>
                                <x-gcore::form-label for="select_input" value="Selección:" />
                                <x-gcore::form-select name="select_input" id="select_input" class="mt-1 block w-full">
                                    <option value="opcion1">Opción 1</option>
                                    <option value="opcion2" selected>Opción 2</option>
                                    <option value="opcion3">Opción 3</option>
                                </x-gcore::form-select>
                            </div>
                        </x-gcore::grid>

                        <x-gcore::divider class="my-6" />

                        <x-gcore::grid columns="1 md:grid-cols-2" gap="6">
                            <div>
                                <x-gcore::form-checkbox name="checkbox_input" id="checkbox_input" label="Aceptar términos y condiciones" checked />
                            </div>

                            <div class="space-y-2">
                                <x-gcore::form-label value="Elige una opción:" />
                                <x-gcore::form-radio name="radio_group" id="radio_option1" value="radio1" label="Opción de Radio 1" checked />
                                <x-gcore::form-radio name="radio_group" id="radio_option2" value="radio2" label="Opción de Radio 2" />
                            </div>
                        </x-gcore::grid>

                        <x-gcore::divider class="my-6" />

                        <x-gcore::grid columns="1 md:grid-cols-2" gap="6">
                            <div>
                                <x-gcore::form-label for="file_input" value="Subir Archivo:" />
                                <x-gcore::form-file-input name="file_input" id="file_input" class="mt-1 block w-full" />
                            </div>

                            <div>
                                <x-gcore::form-label for="switch_input" value="Activar Notificaciones:" />
                                <x-gcore::form-switch name="switch_input" id="switch_input" label="" checked />
                            </div>
                        </x-gcore::grid>

                        <x-gcore::flex justify="end" class="mt-8">
                            <x-gcore::button type="submit" variant="primary" size="lg" icon="fas fa-paper-plane">Enviar Formulario</x-gcore::button>
                        </x-gcore::flex>
                    </form>
                </x-gcore::card>
            </x-gcore::grid>
        </div>
    </x-gcore::section>
@endsection