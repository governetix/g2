@extends('gcore::admin.layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Configuración de Mapas</h1>

        <div class="grid grid-cols-1 gap-6">
            <x-gcore::card title="Ejemplo de Mapa Geográfico" class="shadow-lg">
                <p class="mb-4">Este es un placeholder para la visualización de mapas. La configuración de colores y estilos se aplicaría a través de las variables CSS definidas en el tema activo.</p>
                <div id="map-container" class="w-full h-96 bg-gray-200 flex items-center justify-center text-gray-500 rounded-lg border border-gray-300"
                     style="background-color: hsl(var(--mapa-color-minimo)); border-color: hsl(var(--mapa-borde-region));">
                    <p>Aquí se renderizaría un mapa interactivo (ej. Leaflet, Google Maps)</p>
                </div>
                <p class="mt-4 text-sm text-gray-600">Colores de ejemplo para el mapa: Mínimo (<span class="inline-block w-4 h-4 rounded-full" style="background-color: hsl(var(--mapa-color-minimo));"></span>), Máximo (<span class="inline-block w-4 h-4 rounded-full" style="background-color: hsl(var(--mapa-color-maximo));"></span>), Borde de Región (<span class="inline-block w-4 h-4 rounded-full" style="background-color: hsl(var(--mapa-borde-region));"></span>).</p>

                <h3 class="text-lg font-semibold mt-6 mb-2">Ejemplo de Aplicación de Estilos de Mapa:</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="font-medium">Color Mínimo:</p>
                        <div class="w-full h-10 rounded" style="background-color: hsl(var(--mapa-color-minimo));"></div>
                        <p class="text-sm text-gray-600"><code>--mapa-color-minimo</code></p>
                    </div>
                    <div>
                        <p class="font-medium">Color Máximo:</p>
                        <div class="w-full h-10 rounded" style="background-color: hsl(var(--mapa-color-maximo));"></div>
                        <p class="text-sm text-gray-600"><code>--mapa-color-maximo</code></p>
                    </div>
                    <div class="col-span-2">
                        <p class="font-medium">Borde de Región:</p>
                        <div class="w-full h-10 rounded border-2" style="border-color: hsl(var(--mapa-borde-region));"></div>
                        <p class="text-sm text-gray-600"><code>--mapa-borde-region</code></p>
                    </div>
                </div>
            </x-gcore::card>

            <!-- Add more map examples or a dedicated Map component if developed -->

        </div>
    </div>
@endsection
