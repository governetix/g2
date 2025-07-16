<?php

namespace Modules\GCore\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GCore\Repositories\TranslationRepository;

class TranslationController extends Controller
{
    protected $translationRepository;

    public function __construct(TranslationRepository $translationRepository)
    {
        $this->translationRepository = $translationRepository;
    }

    public function index()
    {
        $translations = $this->translationRepository->all();
        return view('gcore::admin.translations.index', compact('translations'));
    }

    public function create()
    {
        return view('gcore::admin.translations.create');
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
