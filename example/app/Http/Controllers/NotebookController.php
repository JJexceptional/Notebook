<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NotebookController extends Controller
{
    public function index(){
        $notebooks = Notebook::all();

       return view('notebook.index', compact('notebooks'));
    }


    public function create()
    {
        return view('notebook.create');
    }



    public function store()
    {
        $data = \request()->validate([
           'ФИО' => 'string',
           'Компания' => '',
           'Телефон' => 'integer',
           'Email' => 'string',
           'Дата_рождения' => '',
           'Фото' => '',
        ]);
         Notebook::create($data);
         return redirect()->route('notebook.index');
    }



    public function show(Notebook $notebook)
    {
        return view('notebook.show', compact('notebook'));
    }



    public function edit(Notebook $notebook)
    {
        return view('notebook.edit', compact('notebook'));
    }




    public function update(Notebook $notebook)
    {
        $data = \request()->validate([
            'ФИО' => 'string',
            'Компания' => '',
            'Телефон' => 'integer',
            'Email' => 'string',
            'Дата_рождения' => '',
            'Фото' => '',
        ]);
        $notebook->update($data);
        return redirect()->route('notebook.show', $notebook->id);
    }

    public function destroy(Notebook $notebook)
    {
       $notebook->delete();
       return redirect()->route('notebook.index');
    }

}
