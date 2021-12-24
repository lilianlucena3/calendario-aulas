<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aula::latest()->paginate(5);

        return view('aulas.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nmAula' => 'required',
            'nmProfessor' => 'required',
            'quantAlunos' => 'required'
        ]);

        Aula::create($request->all());

        return redirect()->route('aulas.index')
            ->with('success', 'Aula cadastrada com sucesso.');
    }

    /**
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show(Aula  $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    /**
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(Aula  $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aula  $aula)
    {
        $request->validate([
            'nmAula' => 'required',
            'nmProfessor' => 'required',
            'quantAlunos' => 'required',
        ]);

        $aula->update($request->all());

        return redirect()->route('aulas.index')
            ->with('success', 'Aula Atualizada com Sucesso');
    }

    /**
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula  $aula)
    {
        $aula->delete();

        return redirect()->route('aulas.index')
            ->with('success', 'Aula deletada com sucesso');
    }
}
