@extends('gcore::admin.layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Configuración de Gráficos</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- ChartContainer Component Example 1: Bar Chart -->
            <x-gcore::chart-container title="Ventas Mensuales" description="Gráfico de barras de las ventas del último trimestre."
                                     width="100%" height="300px" background-color="hsl(var(--grafico-fondo-contenedor))" border-color="hsl(var(--color-borde-base))" border-width="1px" border-radius="8px" box-shadow="0 2px 4px hsla(var(--color-sombra-base), 0.1)">
                <canvas id="salesChart" class="w-full h-full"></canvas>
                <script>
                    // Placeholder for chart library initialization (e.g., Chart.js)
                    // const ctx = document.getElementById('salesChart').getContext('2d');
                    // new Chart(ctx, {
                    //     type: 'bar',
                    //     data: {
                    //         labels: ['Enero', 'Febrero', 'Marzo'],
                    //         datasets: [{
                    //             label: 'Ventas',
                    //             data: [12, 19, 3],
                    //             backgroundColor: [
                    //                 'hsl(var(--grafico-serie-1))',
                    //                 'hsl(var(--grafico-serie-2))',
                    //                 'hsl(var(--grafico-serie-3))'
                    //             ],
                    //             borderColor: [
                    //                 'hsl(var(--grafico-serie-1))',
                    //                 'hsl(var(--grafico-serie-2))',
                    //                 'hsl(var(--grafico-serie-3))'
                    //             ],
                    //             borderWidth: 1
                    //         }]
                    //     },
                    //     options: {
                    //         responsive: true,
                    //         maintainAspectRatio: false,
                    //         scales: {
                    //             y: {
                    //                 beginAtZero: true,
                    //                 grid: { color: 'hsl(var(--grafico-linea-cuadricula))' },
                    //                 ticks: { color: 'hsl(var(--grafico-texto-etiqueta))' }
                    //             },
                    //             x: {
                    //                 grid: { color: 'hsl(var(--grafico-linea-cuadricula))' },
                    //                 ticks: { color: 'hsl(var(--grafico-texto-etiqueta))' }
                    //             }
                    //         },
                    //         plugins: {
                    //             tooltip: {
                    //                 backgroundColor: 'hsl(var(--grafico-tooltip-fondo))',
                    //                 titleColor: 'hsl(var(--grafico-tooltip-texto))',
                    //                 bodyColor: 'hsl(var(--grafico-tooltip-texto))'
                    //             }
                    //         }
                    //     }
                    // });
                </script>
            </x-gcore::chart-container>

            <!-- ChartContainer Component Example 2: Line Chart -->
            <x-gcore::chart-container title="Usuarios Registrados" description="Tendencia de registro de usuarios en el último año."
                                     width="100%" height="300px" background-color="hsl(var(--grafico-fondo-contenedor))" border-color="hsl(var(--color-borde-base))" border-width="1px" border-radius="8px" box-shadow="0 2px 4px hsla(var(--color-sombra-base), 0.1)">
                <canvas id="usersChart" class="w-full h-full"></canvas>
                <script>
                    // Placeholder for chart library initialization (e.g., Chart.js)
                    // const ctx2 = document.getElementById('usersChart').getContext('2d');
                    // new Chart(ctx2, {
                    //     type: 'line',
                    //     data: {
                    //         labels: ['Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    //         datasets: [{
                    //             label: 'Nuevos Usuarios',
                    //             data: [65, 59, 80, 81, 56, 55],
                    //             fill: false,
                    //             borderColor: 'hsl(var(--grafico-serie-4))',
                    //             tension: 0.1
                    //         }]
                    //     },
                    //     options: {
                    //         responsive: true,
                    //         maintainAspectRatio: false,
                    //         scales: {
                    //             y: {
                    //                 beginAtZero: true,
                    //                 grid: { color: 'hsl(var(--grafico-linea-cuadricula))' },
                    //                 ticks: { color: 'hsl(var(--grafico-texto-etiqueta))' }
                    //             },
                    //             x: {
                    //                 grid: { color: 'hsl(var(--grafico-linea-cuadricula))' },
                    //                 ticks: { color: 'hsl(var(--grafico-texto-etiqueta))' }
                    //             }
                    //         },
                    //         plugins: {
                    //             tooltip: {
                    //                 backgroundColor: 'hsl(var(--grafico-tooltip-fondo))',
                    //                 titleColor: 'hsl(var(--grafico-tooltip-texto))',
                    //                 bodyColor: 'hsl(var(--grafico-tooltip-texto))',
                    //             }
                    //         }
                    //     }
                    // });
                </script>
            </x-gcore::chart-container>

            <!-- ChartContainer Component Example 3: Pie Chart with custom colors -->
            <x-gcore::chart-container title="Distribución de Categorías" description="Porcentaje de productos por categoría."
                                     width="100%" height="300px" background-color="hsl(var(--grafico-fondo-contenedor))" border-color="hsl(var(--color-borde-base))" border-width="1px" border-radius="8px" box-shadow="0 2px 4px hsla(var(--color-sombra-base), 0.1)">
                <canvas id="pieChart" class="w-full h-full"></canvas>
                <script>
                    // Placeholder for chart library initialization (e.g., Chart.js)
                    // const ctx3 = document.getElementById('pieChart').getContext('2d');
                    // new Chart(ctx3, {
                    //     type: 'pie',
                    //     data: {
                    //         labels: ['Electrónica', 'Ropa', 'Hogar', 'Libros'],
                    //         datasets: [{
                    //             data: [30, 20, 25, 25],
                    //             backgroundColor: [
                    //                 'hsl(var(--grafico-serie-5))',
                    //                 'hsl(var(--grafico-serie-6))',
                    //                 'hsl(var(--grafico-serie-7))',
                    //                 'hsl(var(--grafico-serie-8))'
                    //             ],
                    //             borderColor: 'hsl(var(--grafico-fondo-contenedor))'
                    //         }]
                    //     },
                    //     options: {
                    //         responsive: true,
                    //         maintainAspectRatio: false,
                    //         plugins: {
                    //             legend: { labels: { color: 'hsl(var(--grafico-texto-etiqueta))' } },
                    //             tooltip: {
                    //                 backgroundColor: 'hsl(var(--grafico-tooltip-fondo))',
                    //                 titleColor: 'hsl(var(--grafico-tooltip-texto))',
                    //                 bodyColor: 'hsl(var(--grafico-tooltip-texto))',
                    //             }
                    //         }
                    //     }
                    // });
                </script>
            </x-gcore::chart-container>

        </div>
    </div>
@endsection
