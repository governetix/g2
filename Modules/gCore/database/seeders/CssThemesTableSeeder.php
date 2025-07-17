<?php

namespace Modules\GCore\database\seeders;

use Illuminate\Database\Seeder;
use Modules\GCore\Models\CssTheme;

class CssThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Light Theme
        CssTheme::create([
            'name' => 'Default Light Theme',
            'path' => 'default-light',
            'is_active' => true,
            'colors_json' => json_encode([
                "theme-name": "Default Light Theme",
                "Colores Funcionales Generales": {
                    "color-primario": "220 80% 50%",
                    "color-secundario": "260 60% 60%",
                    "color-acento": "30 90% 50%",
                    "color-fondo-principal": "0 0% 100%",
                    "color-fondo-secundario": "220 10% 95%",
                    "color-texto-principal": "220 20% 20%",
                    "color-texto-secundario": "220 10% 40%",
                    "color-borde-base": "220 10% 80%",
                    "color-sombra-base": "220 10% 70%",
                    "color-exito": "120 60% 40%",
                    "color-advertencia": "40 90% 50%",
                    "color-error": "0 70% 50%",
                    "color-informacion": "200 70% 50%",
                    "color-deshabilitado": "220 10% 70%"
                },
                "Colores Interactivos (Botones, Enlaces, etc.)": {
                    "interactivo-fondo-base": "var(--color-primario)",
                    "interactivo-texto-base": "var(--color-fondo-principal)",
                    "interactivo-borde-base": "var(--color-primario)",
                    "interactivo-fondo-hover": "220 80% 40%",
                    "interactivo-texto-hover": "var(--color-fondo-principal)",
                    "interactivo-borde-hover": "220 80% 40%",
                    "interactivo-fondo-focus": "220 80% 30%",
                    "interactivo-texto-focus": "var(--color-fondo-principal)",
                    "interactivo-borde-focus": "220 80% 30%",
                    "interactivo-fondo-activo": "220 80% 20%",
                    "interactivo-texto-activo": "var(--color-fondo-principal)",
                    "interactivo-borde-activo": "220 80% 20%"
                },
                "Colores de Campos de Formulario": {
                    "campo-fondo-predeterminado": "var(--color-fondo-principal)",
                    "campo-texto-predeterminado": "var(--color-texto-principal)",
                    "campo-placeholder": "var(--color-texto-secundario)",
                    "campo-borde-predeterminado": "var(--color-borde-base)",
                    "campo-borde-focus": "var(--color-primario)",
                    "campo-fondo-deshabilitado": "var(--color-fondo-secundario)",
                    "campo-icono": "var(--color-texto-secundario)"
                },
                "Colores de Divisores": {
                    "divisor-color": "var(--color-borde-base)"
                },
                "Colores de Tablas": {
                    "tabla-fondo-cabecera": "var(--color-fondo-secundario)",
                    "tabla-texto-cabecera": "var(--color-texto-principal)",
                    "tabla-borde-celda": "var(--color-borde-base)",
                    "tabla-fondo-fila-alterna": "var(--color-fondo-principal)",
                    "tabla-fondo-fila-hover": "var(--color-fondo-secundario)"
                },
                "Colores de Bloques de Código": {
                    "codigo-fondo": "220 10% 15%",
                    "codigo-texto": "220 20% 90%"
                },
                "Colores de Citas (Blockquotes)": {
                    "cita-borde-izquierdo": "var(--color-borde-base)"
                },
                "Colores de Iconos e Ilustraciones": {
                    "icono-base": "var(--color-texto-secundario)",
                    "ilustracion-base": "var(--color-texto-secundario)"
                },
                "Colores de Gráficos (Paleta de Series)": {
                    "grafico-serie-1": "220 80% 50%",
                    "grafico-serie-2": "260 60% 60%",
                    "grafico-serie-3": "30 90% 50%",
                    "grafico-serie-4": "120 60% 40%",
                    "grafico-serie-5": "0 70% 50%",
                    "grafico-serie-6": "200 70% 50%",
                    "grafico-serie-7": "180 70% 50%",
                    "grafico-serie-8": "60 90% 50%",
                    "grafico-serie-9": "300 70% 50%",
                    "grafico-serie-10": "280 60% 60%",
                    "grafico-serie-11": "10 90% 50%",
                    "grafico-serie-12": "150 60% 40%",
                    "grafico-texto-etiqueta": "var(--color-texto-secundario)",
                    "grafico-linea-eje": "var(--color-borde-base)",
                    "grafico-linea-cuadricula": "var(--color-borde-base)",
                    "grafico-tooltip-fondo": "var(--color-fondo-secundario)",
                    "grafico-tooltip-texto": "var(--color-texto-principal)",
                    "grafico-fondo-contenedor": "var(--color-fondo-principal)"
                },
                "Colores de Mapas": {
                    "mapa-color-minimo": "220 10% 90%",
                    "mapa-color-maximo": "220 80% 50%",
                    "mapa-borde-region": "var(--color-borde-base)"
                }
            ])
        ]);

        // Default Dark Theme
        CssTheme::create([
            'name' => 'Default Dark Theme',
            'path' => 'default-dark',
            'is_active' => false,
            'colors_json' => json_encode([
                "theme-name": "Default Dark Theme",
                "Colores Funcionales Generales": {
                    "color-primario": "220 80% 50%",
                    "color-secundario": "260 60% 60%",
                    "color-acento": "30 90% 50%",
                    "color-fondo-principal": "220 10% 10%",
                    "color-fondo-secundario": "220 10% 20%",
                    "color-texto-principal": "220 20% 90%",
                    "color-texto-secundario": "220 10% 60%",
                    "color-borde-base": "220 10% 30%",
                    "color-sombra-base": "220 10% 5%",
                    "color-exito": "120 60% 40%",
                    "color-advertencia": "40 90% 50%",
                    "color-error": "0 70% 50%",
                    "color-informacion": "200 70% 50%",
                    "color-deshabilitado": "220 10% 70%"
                },
                "Colores Interactivos (Botones, Enlaces, etc.)": {
                    "interactivo-fondo-base": "220 80% 50%",
                    "interactivo-texto-base": "220 10% 10%",
                    "interactivo-borde-base": "220 80% 50%",
                    "interactivo-fondo-hover": "220 80% 60%",
                    "interactivo-texto-hover": "220 10% 10%",
                    "interactivo-borde-hover": "220 80% 60%",
                    "interactivo-fondo-focus": "220 80% 70%",
                    "interactivo-texto-focus": "220 10% 10%",
                    "interactivo-borde-focus": "220 80% 70%",
                    "interactivo-fondo-activo": "220 80% 80%",
                    "interactivo-texto-activo": "220 10% 10%",
                    "interactivo-borde-activo": "220 80% 80%"
                },
                "Colores de Campos de Formulario": {
                    "campo-fondo-predeterminado": "220 10% 15%",
                    "campo-texto-predeterminado": "220 20% 90%",
                    "campo-placeholder": "220 10% 60%",
                    "campo-borde-predeterminado": "220 10% 30%",
                    "campo-borde-focus": "220 80% 50%",
                    "campo-fondo-deshabilitado": "220 10% 25%",
                    "campo-icono": "220 10% 60%"
                },
                "Colores de Divisores": {
                    "divisor-color": "220 10% 30%"
                },
                "Colores de Tablas": {
                    "tabla-fondo-cabecera": "220 10% 20%",
                    "tabla-texto-cabecera": "220 20% 90%",
                    "tabla-borde-celda": "220 10% 30%",
                    "tabla-fondo-fila-alterna": "220 10% 10%",
                    "tabla-fondo-fila-hover": "220 10% 25%"
                },
                "Colores de Bloques de Código": {
                    "codigo-fondo": "220 10% 5%",
                    "codigo-texto": "220 20% 90%"
                },
                "Colores de Citas (Blockquotes)": {
                    "cita-borde-izquierdo": "220 10% 30%"
                },
                "Colores de Iconos e Ilustraciones": {
                    "icono-base": "220 10% 60%",
                    "ilustracion-base": "220 10% 60%"
                },
                "Colores de Gráficos (Paleta de Series)": {
                    "grafico-serie-1": "220 80% 50%",
                    "grafico-serie-2": "260 60% 60%",
                    "grafico-serie-3": "30 90% 50%",
                    "grafico-serie-4": "120 60% 40%",
                    "grafico-serie-5": "0 70% 50%",
                    "grafico-serie-6": "200 70% 50%",
                    "grafico-serie-7": "180 70% 50%",
                    "grafico-serie-8": "60 90% 50%",
                    "grafico-serie-9": "300 70% 50%",
                    "grafico-serie-10": "280 60% 60%",
                    "grafico-serie-11": "10 90% 50%",
                    "grafico-serie-12": "150 60% 40%",
                    "grafico-texto-etiqueta": "220 10% 60%",
                    "grafico-linea-eje": "220 10% 30%",
                    "grafico-linea-cuadricula": "220 10% 25%",
                    "grafico-tooltip-fondo": "220 10% 25%",
                    "grafico-tooltip-texto": "220 20% 90%",
                    "grafico-fondo-contenedor": "220 10% 15%"
                },
                "Colores de Mapas": {
                    "mapa-color-minimo": "220 10% 20%",
                    "mapa-color-maximo": "220 80% 50%",
                    "mapa-borde-region": "220 10% 30%"
                }
            ])
        ]);
    }
}
