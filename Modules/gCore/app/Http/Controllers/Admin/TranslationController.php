<?php

namespace Modules\GCore\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GCore\Repositories\TranslationRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TranslationController extends Controller
{
    protected $translationRepository;

    public function __construct(TranslationRepository $translationRepository)
    {
        $this->translationRepository = $translationRepository;
    }

    public function index(Request $request)
    {
        $allGroupedTranslations = $this->translationRepository->getAllGrouped();

        // --- INICIO DE LÍNEA DE DEPURACIÓN ---
        // Descomenta la línea de abajo para ver el conteo de la colección
        // dd($allGroupedTranslations->count());
        //dd(config('database.connections.sqlite')); // <--- Añade esta línea
        // --- FIN DE LÍNEA DE DEPURACIÓN ---

        // Calcular el total de cadenas únicas
        $totalUniqueStrings = $allGroupedTranslations->count();

        // Inicializar contadores para cada idioma
        $translatedCounts = [
            'es' => 0,
            'en' => 0,
            'pt' => 0,
        ];

        // Iterar sobre las traducciones agrupadas para contar las cadenas traducidas por idioma
        foreach ($allGroupedTranslations as $translation) {
            if (!empty($translation['es'])) {
                $translatedCounts['es']++;
            }
            if (!empty($translation['en'])) {
                $translatedCounts['en']++;
            }
            if (!empty($translation['pt'])) {
                $translatedCounts['pt']++;
            }
        }

        // Calcular porcentajes
        $percentages = [
            'es' => $totalUniqueStrings > 0 ? round(($translatedCounts['es'] / $totalUniqueStrings) * 100) : 0,
            'en' => $totalUniqueStrings > 0 ? round(($translatedCounts['en'] / $totalUniqueStrings) * 100) : 0,
            'pt' => $totalUniqueStrings > 0 ? round(($translatedCounts['pt'] / $totalUniqueStrings) * 100) : 0,
        ];

        // Calcular el número de cadenas faltantes
        $missingStringsCount = 0;
        foreach ($allGroupedTranslations as $translation) {
            // Si alguna de las traducciones (es, en, pt) está vacía, se considera una cadena faltante
            if (empty($translation['es']) || empty($translation['en']) || empty($translation['pt'])) {
                $missingStringsCount++;
            }
        }

        // Manual pagination
        $perPage = 15;
        $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
        $currentItems = $allGroupedTranslations->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $translations = new LengthAwarePaginator(
            $currentItems,
            $totalUniqueStrings, // El total de ítems para la paginación es el total de cadenas únicas
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('gcore::admin.translations.index', compact('translations', 'translatedCounts', 'percentages', 'totalUniqueStrings', 'missingStringsCount'));
    }

    public function create()
    {
        dd($translatedCounts, $percentages, $totalUniqueStrings);
    }

    public function store(Request $request)
    {
        $request->validate([
            'locale' => 'required|string|max:10',
            'group' => 'required|string|max:255',
            'key' => 'required|string|max:255',
            'value' => 'nullable|string',
        ]);

        $this->translationRepository->create($request->all());

        return redirect()->route('admin.core.translations.index')->with('success', 'Traducción creada exitosamente.');
    }

    public function edit($id)
    {
        $translation = $this->translationRepository->find($id);
        if (! $translation) {
            abort(404);
        }
        return view('gcore::admin.translations.edit', compact('translation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'locale' => 'required|string|max:10',
            'group' => 'required|string|max:255',
            'key' => 'required|string|max:255',
            'value' => 'nullable|string',
        ]);

        $this->translationRepository->update($id, $request->all());

        return redirect()->route('admin.core.translations.index')->with('success', 'Traducción actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $this->translationRepository->delete($id);

        return redirect()->route('admin.core.translations.index')->with('success', 'Traducción eliminada exitosamente.');
    }
}
