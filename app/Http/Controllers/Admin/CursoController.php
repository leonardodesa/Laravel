<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index() {
        $registros = Curso::all();

        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar() {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request) {
        $dados = $request->all();

        if(isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        $this->validate($request, [
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('imagem')) {
                $image = $request->file('imagem');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $dados['imagem'] = $destinationPath . $name;

                // $this->save();

            }

            Curso::create($dados);
            return redirect()->route('admin.cursos.index');
        }
    }
