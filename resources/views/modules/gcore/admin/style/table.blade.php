@extends('gcore::admin.layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Configuración de Tablas</h1>

        <div class="grid grid-cols-1 gap-6">
            <x-gcore::card title="Ejemplo de Tabla Básica" class="shadow-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left">ID</th>
                                <th class="py-2 px-4 border-b text-left">Nombre</th>
                                <th class="py-2 px-4 border-b text-left">Email</th>
                                <th class="py-2 px-4 border-b text-left">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b">1</td>
                                <td class="py-2 px-4 border-b">Juan Pérez</td>
                                <td class="py-2 px-4 border-b">juan.perez@example.com</td>
                                <td class="py-2 px-4 border-b">Administrador</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">2</td>
                                <td class="py-2 px-4 border-b">María García</td>
                                <td class="py-2 px-4 border-b">maria.garcia@example.com</td>
                                <td class="py-2 px-4 border-b">Editor</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b">3</td>
                                <td class="py-2 px-4 border-b">Carlos Sánchez</td>
                                <td class="py-2 px-4 border-b">carlos.sanchez@example.com</td>
                                <td class="py-2 px-4 border-b">Usuario</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">4</td>
                                <td class="py-2 px-4 border-b">Ana López</td>
                                <td class="py-2 px-4 border-b">ana.lopez@example.com</td>
                                <td class="py-2 px-4 border-b">Usuario</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-gcore::card>

            <x-gcore::card title="Tabla con Filas Alternas y Hover" class="shadow-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left">Producto</th>
                                <th class="py-2 px-4 border-b text-left">Cantidad</th>
                                <th class="py-2 px-4 border-b text-left">Precio Unitario</th>
                                <th class="py-2 px-4 border-b text-left">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even:bg-gray-50 hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">Laptop X1</td>
                                <td class="py-2 px-4 border-b">2</td>
                                <td class="py-2 px-4 border-b">$1200.00</td>
                                <td class="py-2 px-4 border-b">$2400.00</td>
                            </tr>
                            <tr class="even:bg-gray-50 hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">Monitor Curvo</td>
                                <td class="py-2 px-4 border-b">3</td>
                                <td class="py-2 px-4 border-b">$300.00</td>
                                <td class="py-2 px-4 border-b">$900.00</td>
                            </tr>
                            <tr class="even:bg-gray-50 hover:bg-gray-100">
                                <td class="py-2 px-4 border-b">Teclado Mecánico</td>
                                <td class="py-2 px-4 border-b">5</td>
                                <td class="py-2 px-4 border-b">$80.00</td>
                                <td class="py-2 px-4 border-b">$400.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-gcore::card>

            <!-- Example of a Table with a Matrix component if it were used for tabular data -->
            <x-gcore::card title="Ejemplo de Tabla con Componente Matrix (si aplica)" class="shadow-lg">
                <p class="mb-4">Si el componente `Matrix` se usa para mostrar datos tabulares, aquí hay un ejemplo de cómo se vería:</p>
                <x-gcore::matrix
                    :headers="['País', 'Población (millones)', 'Capital']"
                    :rows="[
                        ['España', '47', 'Madrid'],
                        ['Francia', '65', 'París'],
                        ['Alemania', '83', 'Berlín'],
                    ]"
                    responsive="true"
                />
            </x-gcore::card>

        </div>
    </div>
@endsection
