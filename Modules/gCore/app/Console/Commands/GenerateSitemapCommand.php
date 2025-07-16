<?php

namespace Modules\GCore\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gcore:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera el archivo sitemap.xml para la aplicación.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generando sitemap...');

        $sitemapContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Ejemplo: Añadir la página de inicio
        $sitemapContent .= '<url>';
        $sitemapContent .= '<loc>' . url('/') . '</loc>';
        $sitemapContent .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
        $sitemapContent .= '<changefreq>daily</changefreq>';
        $sitemapContent .= '<priority>1.0</priority>';
        $sitemapContent .= '</url>';

        // Aquí podrías añadir lógica para obtener URLs de modelos de base de datos, etc.
        // Ejemplo: $posts = Post::all();
        // foreach ($posts as $post) {
        //     $sitemapContent .= '<url>';
        //     $sitemapContent .= '<loc>' . url('/posts/' . $post->slug) . '</loc>';
        //     $sitemapContent .= '<lastmod>' . $post->updated_at->toAtomString() . '</lastmod>';
        //     $sitemapContent .= '<changefreq>weekly</changefreq>';
        //     $sitemapContent .= '<priority>0.8</priority>';
        //     $sitemapContent .= '</url>';
        // }

        $sitemapContent .= '</urlset>';

        Storage::disk('public')->put('sitemap.xml', $sitemapContent);

        $this->info('Sitemap generado exitosamente en: ' . public_path('sitemap.xml'));

        return Command::SUCCESS;
    }
}
