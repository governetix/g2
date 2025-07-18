@extends('gcore::admin.layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Configuración de Formato (Tipografía y Texto)</h1>

        <div class="grid grid-cols-1 gap-6">
            <!-- Heading Component Examples -->
            <x-gcore::card title="Ejemplos de Encabezados" class="shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Encabezados por defecto:</h2>
                <x-gcore::heading level="h1" text="Encabezado H1" class="mb-2" />
                <x-gcore::heading level="h2" text="Encabezado H2" class="mb-2" />
                <x-gcore::heading level="h3" text="Encabezado H3" class="mb-2" />
                <x-gcore::heading level="h4" text="Encabezado H4" class="mb-2" />
                <x-gcore::heading level="h5" text="Encabezado H5" class="mb-2" />
                <x-gcore::heading level="h6" text="Encabezado H6" class="mb-4" />

                <h2 class="text-xl font-semibold mb-2">Encabezados personalizados:</h2>
                <x-gcore::heading level="h1" text="Título Personalizado" font-size="3rem" color="hsl(var(--color-primario))" text-align="center" margin-bottom="1rem" />
                <x-gcore::heading level="h2" text="Subtítulo con Estilo" font-family="'Inter', sans-serif" font-weight="700" font-style="italic" color="hsl(var(--color-secundario))" line-height="1.2" letter-spacing="0.05em" />
                <x-gcore::heading level="h3" text="Texto Transformado" text-transform="uppercase" text-decoration="underline" />
                <x-gcore::heading level="h4" text="Margen y Relleno" margin-top="2rem" padding="1rem" class="bg-blue-100 rounded" />
                <x-gcore::heading level="h5">
                    <span>Encabezado con <strong>HTML</strong> en el slot</span>
                </x-gcore::heading>
            </x-gcore::card>

            <!-- CodeBlock Component Example -->
            <x-gcore::card title="Ejemplo de Bloque de Código" class="shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Código PHP:</h2>
                <x-gcore::code-block language="php">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
?&gt;
                </x-gcore::code-block>

                <h2 class="text-xl font-semibold mt-6 mb-2">Código JavaScript:</h2>
                <x-gcore::code-block language="javascript">
                    console.log('Hello, World!');

                    function greet(name) {
                        return `Hello, ${name}!`
                    }

                    const message = greet('Néstor');
                    console.log(message);
                </x-gcore::code-block>

                <h2 class="text-xl font-semibold mt-6 mb-2">Código CSS:</h2>
                <x-gcore::code-block language="css">
                    .container {
                        max-width: 960px;
                        margin: 0 auto;
                        padding: 20px;
                    }

                    .button {
                        background-color: var(--color-primario);
                        color: var(--color-fondo-principal);
                        padding: 10px 15px;
                        border-radius: 5px;
                    }
                </x-gcore::code-block>
            </x-gcore::card>
        </div>
    </div>
@endsection
